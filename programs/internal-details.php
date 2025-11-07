<?php
require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>


<!-- Human Resources & Internal Events events Details Section -->
<div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 lg:grid-cols-3 gap-8">

  <!-- Main Human Resources & Internal Events events Content -->
  <div class="lg:col-span-2">
    <div id="internal-container" class="bg-white shadow-lg rounded-2xl overflow-hidden"></div>
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

    function renderProgramHTML(event) {
      return `
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            <div class="p-6">
                <div class="flex flex-wrap items-center gap-4 mb-4">
                    <p class="text-gray-500 text-sm">${event.mini_date}</p>
                    <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-medium">${event.donor}</span>
                </div>

                <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">${event.name}</h1>

                <p class="text-gray-700 text-lg mb-6 leading-relaxed">${event.mini_description}</p>

                <div class="bg-gray-50 rounded-xl p-6 mb-6">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800">Event Details</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-2">Budget</h3>
                            <p class="text-gray-600">${event.budget.amount} ${event.budget.currency}</p>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-700 mb-2">Donor</h3>
                            <p class="text-gray-600">${event.donor}</p>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-700 mb-2">Beneficiaries</h3>
                            <p class="text-gray-600">${event.beneficiaries}</p>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-700 mb-2">Date</h3>
                            <p class="text-gray-600">${event.date}</p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="font-semibold text-gray-700 mb-2">Locations</h3>
                        <div class="flex flex-wrap gap-2">
                            ${event.locations.map(location => `
                                <span class="bg-white border border-gray-200 px-3 py-1 rounded-full text-xs text-gray-600">${location}</span>
                            `).join('')}
                        </div>
                    </div>
                </div>

                <div class="prose max-w-none">
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Full Description</h2>
                    <p class="text-gray-700 leading-relaxed mb-6">${event.description}</p>
                </div>
            </div>
        </div>`;
    }
  });
</script>
<?php include '../layouts/footer.php'; ?>