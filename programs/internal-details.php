<?php
require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>


<!-- Human Resources & Internal Events events Details Section -->
<div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 lg:grid-cols-3 gap-8">

  <!-- Main Human Resources & Internal Events events Content -->
  <div class="lg:col-span-2">
    <div id="internal-container" class=""></div>
    <div id="loading-state" class="text-center py-8 text-gray-500">Loading events details...</div>
  </div>

  <!-- Other Human Resources & Internal Events events Sidebar -->
  <div class="space-y-6">
    <h3 class="text-xl font-bold mb-4 text-red-600">Other Human Resources & Internal Events </h3>
    <div id="other-events" class="space-y-4"></div>
  </div>
</div>

<script>
  $(document).ready(async function () {
    const params = new URLSearchParams(window.location.search);
    const eventsId = params.get("internal");

    try {
      const response = await fetch('/assets/json/projects.json');
      const data = await response.json();

      // Find the specific Human Resources & Internal Events event
      let event = null;
      data.HelpAge_SriLanka_Events_And_Programs_2024_25.forEach(category => {
        if (category.category === "Human Resources & Internal Events" && category.events) {
          const found = category.events.find(p => p.id === eventsId);
          if (found) event = found;
        }
      });

      // Render main event
      if (event) {
        $("#internal-container").html(renderProgramHTML(event));
      } else {
        $("#internal-container").html('<p class="text-red-500 text-center">Event not found.</p>');
      }

      // Get other Human Resources & Internal Events (excluding the selected one)
      const otherEvents = [];
      data.HelpAge_SriLanka_Events_And_Programs_2024_25.forEach(category => {
        if (category.category === "Human Resources & Internal Events" && category.events) {
          category.events.forEach(p => {
            if (p.id !== eventsId) otherEvents.push(p);
          });
        }
      });

      // Render other events (limit to top 5)
      const otherEventsHTML = otherEvents.slice(0, 5).map(p => `
            <a href="?internal=${p.id}" 
               class="flex items-center bg-white shadow rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300 p-4">
                <div class="flex-1">
                    <h4 class="font-semibold text-gray-800 hover:text-red-600 text-sm mb-1">${p.name}</h4>
                    <p class="text-gray-500 text-xs">${p.mini_date}</p>
                    <p class="text-gray-600 text-xs mt-1 line-clamp-2">${p.mini_description}</p>
                </div>
            </a>
        `).join('');
      $("#other-events").html(otherEventsHTML);

    } catch (err) {
      $("#internal-container").html('<p class="text-red-500 text-center">Failed to load event data.</p>');
      console.error(err);
    } finally {
      $('#loading-state').fadeOut(300, function () { $(this).remove(); });
    }

    function renderProgramHTML(program) {
      // Helper to check if budget exists
      const hasBudget = program.budget && program.budget.amount;

      return `
<div class="bg-white shadow-xl shadow-gray-200/50 rounded-3xl overflow-hidden mb-10 border border-gray-100 transition-all duration-300 hover:shadow-2xl">
    
    ${/* 1. Header Image with Gradient Overlay */ ''}
    ${program.image ? `
    <div class="relative w-full h-72 md:h-96 group overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>
        <img src="${program.image}" alt="${program.name}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out">
        
        <div class="absolute bottom-4 left-6 z-20">
            ${/* Date Badge on Image */ ''}
            <span class="inline-block bg-white/90 backdrop-blur-sm text-gray-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide mb-2">
                ${program.mini_date}
            </span>
            <h1 class="text-3xl md:text-4xl font-extrabold text-white leading-tight shadow-sm">${program.name}</h1>
        </div>
    </div>
    ` : ''}

    <div class="p-8">
        
        ${/* Donor & Meta Tags */ ''}
        <div class="flex flex-wrap items-center gap-3 mb-6">
            ${program.donor ? `
            <span class="bg-red-50 text-red-600 border border-red-100 px-3 py-1 rounded-full text-xs font-semibold flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                ${program.donor}
            </span>` : ''}
        </div>
        
        ${/* Mini Description */ ''}
        <p class="text-gray-600 text-lg mb-8 leading-relaxed font-light">${program.mini_description}</p>
        
        ${/* Key Details Card */ ''}
        <div class="bg-gray-50/80 rounded-2xl p-6 mb-8 border border-gray-100">
            <h2 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-4">Program Snapshot</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-8">
                ${/* Conditional Budget */ ''}
                ${program.budget && program.budget.amount ? `
                <div class="flex flex-col">
                    <span class="text-xs font-semibold text-gray-500 mb-1">Budget</span>
                    <span class="text-gray-800 font-medium">${program.budget.amount} ${program.budget.currency}</span>
                </div>` : ''}
                
                <div class="flex flex-col">
                    <span class="text-xs font-semibold text-gray-500 mb-1">Beneficiaries</span>
                    <span class="text-gray-800 font-medium">${program.beneficiaries}</span>
                </div>
                
                <div class="flex flex-col">
                    <span class="text-xs font-semibold text-gray-500 mb-1">Date Reported</span>
                    <span class="text-gray-800 font-medium">${program.date}</span>
                </div>

                <div class="flex flex-col md:col-span-2">
                    <span class="text-xs font-semibold text-gray-500 mb-2">Locations</span>
                    <div class="flex flex-wrap gap-2">
                        ${program.locations.map(location => `
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                ${location}
                            </span>
                        `).join('')}
                    </div>
                </div>
            </div>
        </div>

        ${/* Service Model Section */ ''}
        ${program.service_model ? `
        <div class="mb-8 pl-4 border-l-4 border-blue-500/50">
            <h2 class="text-xl font-bold mb-4 text-gray-900">Service Model</h2>
            <div class="space-y-4 text-gray-700">
                ${program.service_model.approach ? `
                <div>
                    <h4 class="font-semibold text-gray-800 text-sm">Our Approach</h4>
                    <p class="text-sm leading-relaxed text-gray-600">${program.service_model.approach}</p>
                </div>` : ''}
                
                ${program.service_model.assessment_process ? `
                <div>
                    <h4 class="font-semibold text-gray-800 text-sm">Assessment Process</h4>
                    <p class="text-sm leading-relaxed text-gray-600">${program.service_model.assessment_process}</p>
                </div>` : ''}

                ${program.service_model.quality_assurance ? `
                <div>
                    <h4 class="font-semibold text-gray-800 text-sm">Quality Assurance</h4>
                    <p class="text-sm leading-relaxed text-gray-600">${program.service_model.quality_assurance}</p>
                </div>` : ''}
            </div>
        </div>
        ` : ''}

        ${/* Training Details Section */ ''}
        ${program.training_details ? `
        <div class="mb-8 bg-amber-50 rounded-xl p-5 border border-amber-100">
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                <div>
                    <h2 class="text-lg font-bold text-gray-800 mb-1">Training & Standards</h2>
                    <p class="text-gray-700 text-sm mb-2"><strong>Facility:</strong> ${program.training_details.facility}</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        ${program.training_details.topics.map(topic => `<span class="bg-amber-100 text-amber-800 text-xs px-2 py-1 rounded-md font-medium">${topic}</span>`).join('')}
                    </div>
                </div>
            </div>
        </div>
        ` : ''}

        ${/* Full Description */ ''}
        <div class="prose prose-blue max-w-none mb-10 text-gray-700">
            <h2 class="text-xl font-bold mb-4 text-gray-900 border-b pb-2">Full Description</h2>
            <p class="leading-relaxed">${program.description}</p>
        </div>

        ${/* Contact Info Section */ ''}
        ${program.contact_info && (program.contact_info.general.landline || program.contact_info.key_staff.head_of_division) ? `
        <div class="bg-blue-50/50 rounded-xl p-6 border border-blue-100 mb-10">
            <h2 class="text-lg font-bold mb-4 text-blue-900 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                Contact Information
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-sm font-bold text-blue-800 uppercase tracking-wide mb-2">General Inquiries</h3>
                    <ul class="space-y-2 text-sm text-blue-900">
                        ${program.contact_info.general.landline ? `<li><span class="font-semibold w-16 inline-block">Landline:</span> <a href="tel:${program.contact_info.general.landline}" class="hover:underline hover:text-blue-700">${program.contact_info.general.landline}</a></li>` : ''}
                        ${program.contact_info.general.mobile ? `<li><span class="font-semibold w-16 inline-block">Mobile:</span> <a href="tel:${program.contact_info.general.mobile}" class="hover:underline hover:text-blue-700">${program.contact_info.general.mobile}</a></li>` : ''}
                        ${program.contact_info.general.email ? `<li><span class="font-semibold w-16 inline-block">Email:</span> <a href="mailto:${program.contact_info.general.email}" class="hover:underline hover:text-blue-700">${program.contact_info.general.email}</a></li>` : ''}
                    </ul>
                </div>
                ${program.contact_info.key_staff && (program.contact_info.key_staff.head_of_division || program.contact_info.key_staff.manager) ? `
                <div>
                    <h3 class="text-sm font-bold text-blue-800 uppercase tracking-wide mb-2">Key Staff</h3>
                    <ul class="space-y-2 text-sm text-blue-900">
                        ${program.contact_info.key_staff.head_of_division ? `<li><span class="font-semibold">Head of Div:</span> <a href="mailto:${program.contact_info.key_staff.head_of_division_email}" class="hover:underline hover:text-blue-700 block">${program.contact_info.key_staff.head_of_division}</a></li>` : ''}
                        ${program.contact_info.key_staff.manager ? `<li><span class="font-semibold">Manager:</span> <a href="mailto:${program.contact_info.key_staff.manager_email}" class="hover:underline hover:text-blue-700 block">${program.contact_info.key_staff.manager}</a></li>` : ''}
                    </ul>
                </div>` : ''}
            </div>
        </div>
        ` : ''}

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