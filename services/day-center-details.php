<?php
require_once '../layouts/head.php';

// Meta tags
$meta_title = "Health & Medical Program Details - HelpAge Sri Lanka";
$meta_description = "Learn more about HelpAge Sri Lanka's health and medical programs and how you can contribute to improving the lives of elderly citizens in Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Health Programs, Medical Care, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare";
$meta_canonical = "https://helpagesl.org/programs/health-details";
$og_image = "https://helpagesl.org/assets/images/og-health-program.webp";

require_once '../layouts/header.php';
?>

<!-- Health Program Details -->
<div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 lg:grid-cols-3 gap-8">

    <!-- Main Content -->
    <div class="lg:col-span-2" data-aos="fade-right" data-aos-duration="1500">
        <div id="day-center-container"></div>
        <div id="loading-state" class="text-center py-8 text-gray-500">
            Loading services details...
        </div>
    </div>

    <!-- Sidebar -->
    <aside>
        <h3 class="text-xl font-bold mb-4 text-red-600">Other Programs</h3>
        <div id="other-programs" class="space-y-4"></div>
    </aside>

</div>

<script>
$(document).ready(async function () {

    const params = new URLSearchParams(window.location.search);
    const programId = params.get("day-center");

    if (!programId) {
        $("#day-center-container").html(
            '<p class="text-red-500 text-center">Invalid service request.</p>'
        );
        return;
    }

    try {
        const response = await fetch('/assets/json/services.json');
        const data = await response.json();

        let program = null;
        let currentCategory = null;

        // ✅ Find program from Services
        data.Services.forEach(category => {
            const found = category.services_list?.find(p => p.id === programId);
            if (found) {
                program = found;
                currentCategory = category;
            }
        });

        // Render main program
        if (program) {
            $("#day-center-container").html(renderProgramHTML(program));
        } else {
            $("#day-center-container").html(
                '<p class="text-red-500 text-center">Program not found.</p>'
            );
        }

        // Render sidebar programs (same category)
        if (currentCategory && currentCategory.services_list.length > 1) {
            const sidebarHTML = currentCategory.services_list
                .filter(p => p.id !== programId)
                .map((p, index) => `
                    <a href="?day-center=${p.id}"
                       class="block bg-white shadow rounded-xl p-4 hover:shadow-xl transition" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="${index * 200}">
                        <h4 class="font-semibold text-gray-800 text-sm mb-1 hover:text-red-600">
                            ${p.name}
                        </h4>
                        <p class="text-xs text-gray-500">${p.mini_date}</p>
                        <p class="text-xs text-gray-600 mt-1 line-clamp-2">
                            ${p.mini_description}
                        </p>
                    </a>
                `)
                .join('');

            $("#other-programs").html(sidebarHTML);
        } else {
            $("#other-programs").html(
                '<p class="text-gray-400 text-sm">No other services available.</p>'
            );
        }

    } catch (err) {
        console.error(err);
        $("#day-center-container").html(
            '<p class="text-red-500 text-center">Failed to load services data.</p>'
        );
    } finally {
        $('#loading-state').fadeOut(300, function () {
            $(this).remove();
        });
    }

    // ===============================
    // Render Program HTML
    // ===============================
    function renderProgramHTML(program) {

        return `
<div class="bg-white shadow-xl rounded-3xl overflow-hidden border border-gray-100">

    <!-- Header Image -->
    ${program.image ? `
    <div class="relative h-80">
        <img src="${program.image}" alt="${program.name}"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        <div class="absolute bottom-6 left-6">
            <span class="bg-white/90 text-xs px-3 py-1 rounded-full font-semibold">
                ${program.mini_date}
            </span>
            <h1 class="text-3xl md:text-4xl font-bold text-white mt-2">
                ${program.name}
            </h1>
        </div>
    </div>` : ''}

    <div class="p-8">

        <!-- Donor -->
        ${program.donor ? `
        <span class="inline-block mb-6 bg-red-50 text-red-600 px-4 py-1 rounded-full text-xs font-semibold">
            ${program.donor}
        </span>` : ''}

        <!-- Summary -->
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            ${program.mini_description}
        </p>

        <!-- Snapshot -->
        <div class="bg-gray-50 rounded-xl p-6 mb-8">
            <h3 class="text-sm uppercase font-bold text-gray-400 mb-4">
                Program Snapshot
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                ${program.budget?.amount ? `
                <div>
                    <p class="text-xs font-semibold text-gray-500">Budget</p>
                    <p class="font-medium text-gray-800">
                        ${program.budget.amount} ${program.budget.currency}
                    </p>
                </div>` : ''}

                <div>
                    <p class="text-xs font-semibold text-gray-500">Beneficiaries</p>
                    <p class="font-medium text-gray-800">
                        ${program.beneficiaries}
                    </p>
                </div>

                <div>
                    <p class="text-xs font-semibold text-gray-500">Date</p>
                    <p class="font-medium text-gray-800">
                        ${program.date}
                    </p>
                </div>

                <div class="md:col-span-2">
                    <p class="text-xs font-semibold text-gray-500 mb-2">Locations</p>
                    <div class="flex flex-wrap gap-2">
                        ${program.locations.map(loc => `
                            <span class="bg-blue-50 text-blue-700 text-xs px-2 py-1 rounded">
                                ${loc}
                            </span>
                        `).join('')}
                    </div>
                </div>

            </div>
        </div>

        <!-- Description -->
        <div class="prose max-w-none text-gray-700">
            <h2 class="text-2xl font-bold mb-4">Full Description</h2>
            <p>${program.description}</p>
        </div>
${program.image_gallery && program.image_gallery.length > 0 ? `
        <div class="mt-8 pt-8 border-t border-gray-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                Gallery Highlights
                        <span class="text-sm font-normal text-gray-400 ml-2">(${program.image_gallery.length} images)</span>
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                ${program.image_gallery.map((img, index) => `
                    <div class="relative group overflow-hidden rounded-xl aspect-square bg-gray-100 shadow-sm cursor-pointer gallery-item" data-src="${img}">
                    <img src="${img}" loading="lazy" alt="Gallery image ${index + 1}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors"></div>
                </div>
                `).join('')}
            </div>
        </div>

        <!-- Image Modal -->
        <div id="imageModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80">
            <button id="closeModal"
                class="absolute top-5 right-5 text-white text-3xl font-bold">&times;</button>
            <img id="modalImage" class="max-w-[90%] max-h-[90%] rounded-xl shadow-2xl">
        </div>
        ` : ''}
    </div>
</div>
        `;
    }
});
</script>
<script>
    $(document).on('click', '.gallery-item', function () {
        const imgSrc = $(this).data('src');
        $('#modalImage').attr('src', imgSrc);
        $('#imageModal').removeClass('hidden').addClass('flex');
    });

    $(document).on('click', '#closeModal, #imageModal', function (e) {
        if (e.target.id === 'imageModal' || e.target.id === 'closeModal') {
            $('#imageModal').addClass('hidden').removeClass('flex');
            $('#modalImage').attr('src', '');
        }
    });

    // ESC key support
    $(document).on('keydown', function (e) {
        if (e.key === 'Escape') {
            $('#imageModal').addClass('hidden').removeClass('flex');
            $('#modalImage').attr('src', '');
        }
    });
</script>
<?php include '../layouts/footer.php'; ?>
