<?php
// e-card.php
$categories = [
   'birthday' => 'Birthday Card',
   'fathers' => "Father's Day",
   'mothers' => "Mother's Day",
];

function listTemplates(string $category): array
{
   $dir = __DIR__ . "/templates/$category";
   if (!is_dir($dir))
      return [];
   $files = array_merge(glob($dir . "/*.{png,PNG,jpg,JPG,jpeg,JPEG}", GLOB_BRACE));
   sort($files);
   $base = "/ecard-editor"; // Adjust this to your subfolder path
   $out = [];
   foreach ($files as $path) {
      $name = basename($path);
      $out[] = ['id' => $name, 'url' => $base . "/templates/$category/" . rawurlencode($name)];
   }
   return $out;
}

$selectedCategory = $_GET['cat'] ?? 'birthday';
if (!isset($categories[$selectedCategory]))
   $selectedCategory = 'birthday';
$templates = listTemplates($selectedCategory);

require_once __DIR__ . '/../layouts/head.php';
require_once __DIR__ . '/../layouts/header.php';
?>

<div class="max-w-7xl mx-auto px-6 py-12">
   <div class="mb-10 text-center md:text-left">
      <h1 class="text-4xl font-black text-slate-900">E-Card Designer</h1>
      <p class="text-slate-500 mt-2">Pick a template to start personalizing your message.</p>

      <div class="mt-8 flex flex-wrap gap-2 justify-center md:justify-start">
         <?php foreach ($categories as $key => $label): ?>
            <a href="?cat=<?= $key ?>"
               class="px-5 py-2.5 rounded-full text-sm font-bold transition duration-300 <?= $selectedCategory === $key ? 'bg-slate-900 text-white shadow-lg' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50' ?>">
               <?= htmlspecialchars($label) ?>
            </a>
         <?php endforeach; ?>
      </div>
   </div>

   <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <?php foreach ($templates as $t): ?>
         <div
            class="group relative bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 cursor-pointer"
            onclick="openEditor('<?= $t['url'] ?>', '<?= $t['id'] ?>')">
            <div class="aspect-[3/4] overflow-hidden">
               <img src="<?= $t['url'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                  alt="">
            </div>
            <div
               class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
               <button
                  class="w-full py-3 bg-white text-slate-900 rounded-xl font-bold text-sm uppercase tracking-wider">Edit
                  Template</button>
            </div>
         </div>
      <?php endforeach; ?>
   </div>
</div>

<div id="editorModal"
   class="hidden fixed inset-0 z-[100] bg-slate-900/90 backdrop-blur-md flex items-center justify-center p-4">
   <div class="bg-white w-full max-w-6xl rounded-[2rem] overflow-hidden shadow-2xl flex flex-col md:flex-row h-[95dvh]">

      <div
         class="flex-1 bg-slate-50 p-6 md:p-12 flex flex-col items-center justify-center relative border-r border-slate-100 overflow-hidden">
         <button onclick="closeModal()"
            class="absolute top-6 left-6 p-2 rounded-full hover:bg-white transition text-slate-400 hover:text-slate-900">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
         </button>

         <div id="stage"
            class="relative shadow-2xl origin-center transition-all bg-white overflow-hidden flex items-center justify-center min-h-[70vh]">
            <img id="modalTemplateImg" src="" class="max-h-[80vh] md:max-h-[85dvh] w-auto block object-contain" alt="">

            <div id="modalUserLayer" class="hidden absolute cursor-move border-2 border-dashed border-blue-400 group">
               <img id="modalUserImg" src="" class="w-full h-full pointer-events-none" alt="">
               <div
                  class="absolute -top-3 -right-3 bg-blue-500 text-white p-1 rounded-full opacity-0 group-hover:opacity-100 transition">
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                     <path
                        d="M7 9a2 2 0 100-4 2 2 0 000 4zM11 5a2 2 0 114 0 2 2 0 01-4 0zM13 9a2 2 0 100-4 2 2 0 000 4zM5 9a2 2 0 114 0 2 2 0 01-4 0zM5 13a2 2 0 100-4 2 2 0 000 4zM11 9a2 2 0 114 0 2 2 0 01-4 0zM13 13a2 2 0 100-4 2 2 0 000 4zM17 9a2 2 0 114 0 2 2 0 01-4 0z">
                     </path>
                  </svg>
               </div>
            </div>
         </div>

         <div class="mt-6 flex items-center gap-4 bg-white/80 px-4 py-2 rounded-full border border-slate-200">
            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Scale Photo</span>
            <input id="modalScaleRange" type="range" min="0.5" max="2.5" step="0.01" value="1"
               class="w-32 accent-slate-900">
         </div>
      </div>

      <div class="w-full md:w-[420px] bg-white overflow-y-auto p-8 border-l border-slate-100">
         <div id="modalMsg" class="hidden mb-6 p-4 rounded-xl text-xs font-bold border"></div>

         <div class="space-y-10">
            <div>
               <h4 class="text-[11px] font-black text-slate-400 uppercase tracking-[.2em] mb-4">Step 01: Photo</h4>
               <label
                  class="flex flex-col items-center justify-center border-2 border-dashed border-slate-200 rounded-2xl p-6 hover:border-blue-500 hover:bg-blue-50/50 transition cursor-pointer group">
                  <input type="file" id="modalFileInput" accept="image/*" class="hidden">
                  <div class="p-3 bg-slate-100 rounded-full group-hover:bg-blue-500 group-hover:text-white transition">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                     </svg>
                  </div>
                  <span class="mt-3 text-sm font-bold text-slate-600">Upload Image</span>
               </label>

               <div id="cropControl" class="hidden mt-6 space-y-4">
                  <div class="rounded-2xl overflow-hidden bg-slate-900 h-48 border border-slate-800">
                     <img id="modalCropTarget" src="">
                  </div>
                  <button id="modalBtnCrop"
                     class="w-full py-4 bg-slate-900 text-white rounded-xl font-bold text-sm hover:shadow-xl transition-all">
                     Crop & Apply to Card
                  </button>
               </div>
            </div>

            <div id="step2Area" class="opacity-30 pointer-events-none transition-opacity duration-500">
               <h4 class="text-[11px] font-black text-slate-400 uppercase tracking-[.2em] mb-4">Step 02: Message</h4>
               <div class="space-y-4">
                  <div class="grid grid-cols-2 gap-4">
                     <input type="text" id="to_name" placeholder="To:"
                        class="bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-slate-900 w-full">
                     <input type="text" id="from_name" placeholder="From:"
                        class="bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-slate-900 w-full">
                  </div>
                  <input type="email" id="to_email" placeholder="Recipient Email Address"
                     class="bg-slate-50 border-0 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-slate-900 w-full">
               </div>
            </div>

            <div id="step3Area" class="opacity-30 pointer-events-none transition-opacity duration-500">
               <h4 class="text-[11px] font-black text-slate-400 uppercase tracking-[.2em] mb-4">Step 03: Finish</h4>
               <button id="modalBtnGenerate"
                  class="w-full py-5 bg-red-600 text-white rounded-2xl font-black text-xs uppercase tracking-[.2em] hover:bg-red-700 shadow-xl shadow-red-200 transition-all active:scale-95">
                  Generate & Send Card
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- e-card -->
<script>
   let cropper = null;
   let scale = 1;
   let currentTemplateId = '';

   function showModalMsg(text, isError = false) {
      const el = document.getElementById('modalMsg');
      el.textContent = text;
      el.className = `mb-6 p-4 rounded-xl text-xs font-bold border ${isError ? 'bg-red-50 text-red-600 border-red-100' : 'bg-green-50 text-green-600 border-green-100'}`;
      el.classList.remove('hidden');
   }

   function openEditor(url, id) {
      currentTemplateId = id;
      document.getElementById('modalTemplateImg').src = url;
      document.getElementById('editorModal').classList.remove('hidden');
      document.body.style.overflow = 'hidden';
   }

   function closeModal() {
      document.getElementById('editorModal').classList.add('hidden');
      document.body.style.overflow = '';
   }

   // Upload & Crop
   document.getElementById('modalFileInput').addEventListener('change', (e) => {
      const file = e.target.files[0];
      if (!file) return;
      const url = URL.createObjectURL(file);
      const target = document.getElementById('modalCropTarget');
      target.src = url;
      document.getElementById('cropControl').classList.remove('hidden');
      if (cropper) cropper.destroy();
      target.onload = () => {
         cropper = new Cropper(target, { viewMode: 1, dragMode: 'move', autoCropArea: 1, aspectRatio: 1 });
      }
   });

   document.getElementById('modalBtnCrop').addEventListener('click', () => {
      if (!cropper) return;
      const canvas = cropper.getCroppedCanvas({ width: 800, height: 800 });
      const userImg = document.getElementById('modalUserImg');
      const userLayer = document.getElementById('modalUserLayer');

      userImg.src = canvas.toDataURL('image/png');
      userLayer.classList.remove('hidden');
      userLayer.style.width = '200px';
      userLayer.style.height = '200px';
      userLayer.style.left = '50px';
      userLayer.style.top = '50px';

      document.getElementById('step2Area').classList.remove('opacity-30', 'pointer-events-none');
      document.getElementById('step3Area').classList.remove('opacity-30', 'pointer-events-none');
      showModalMsg("Photo Applied! Now enter details.");
   });

   // Drag Logic
   let isDragging = false, startX, startY, startL, startT;
   const layer = document.getElementById('modalUserLayer');

   layer.addEventListener('mousedown', (e) => {
      isDragging = true;
      startX = e.clientX; startY = e.clientY;
      startL = parseFloat(layer.style.left);
      startT = parseFloat(layer.style.top);
   });

   window.addEventListener('mousemove', (e) => {
      if (!isDragging) return;
      layer.style.left = (startL + (e.clientX - startX)) + 'px';
      layer.style.top = (startT + (e.clientY - startY)) + 'px';
   });
   window.addEventListener('mouseup', () => isDragging = false);

   document.getElementById('modalScaleRange').addEventListener('input', (e) => {
      scale = e.target.value;
      document.getElementById('modalUserImg').style.transform = `scale(${scale})`;
   });

   // Generate & Send
   document.getElementById('modalBtnGenerate').addEventListener('click', async () => {
      const btn = document.getElementById('modalBtnGenerate');
      btn.disabled = true;
      btn.textContent = "SENDING...";

      const stage = document.getElementById('stage').getBoundingClientRect();
      const lRect = layer.getBoundingClientRect();

      const payload = {
         category: '<?= $selectedCategory ?>',
         templateId: currentTemplateId,
         userPngBase64: document.getElementById('modalUserImg').src,
         placement: {
            x: lRect.left - stage.left,
            y: lRect.top - stage.top,
            w: lRect.width,
            h: lRect.height,
            scale: scale
         },
         stageW: stage.width,
         stageH: stage.height,
         email_data: {
            to: document.getElementById('to_email').value,
            to_name: document.getElementById('to_name').value,
            from_name: document.getElementById('from_name').value
         }
      };

      const res = await fetch('generate.php', {
         method: 'POST',
         headers: { 'Content-Type': 'application/json' },
         body: JSON.stringify(payload)
      });

      const result = await res.json();
      if (result.ok) {
         showModalMsg("E-Card sent successfully!");
         setTimeout(closeModal, 2000);
      } else {
         showModalMsg(result.error || "Error generating card", true);
         btn.disabled = false;
         btn.textContent = "GENERATE & SEND CARD";
      }
   });
</script>
<?php
require_once __DIR__ . '/../layouts/footer.php'; ?>