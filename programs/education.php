<?php
require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>



<!-- Contact Section -->
<section class="">
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Education & Awareness</h2>
            <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
                Our education and awareness initiatives aim to provide essential information and resources to
                elderly citizens
                across Sri Lanka. From health education to legal rights awareness, we ensure our seniors
                receive the knowledge they need to live with dignity.
            </p>
        </div>
        <section class="w-full px-4 md:px-8  bg-white">
            <div id="education-container" class="grid grid-cols-1 sm:grid-cols-2  gap-8">
            </div>
            <div id="loading-state" class="text-center text-gray-500 mt-8">
                Loading...
            </div>
        </section>
    </div>
</section>

<!-- Footer -->


<script>
    $(document).ready(function () {
        const container = $("#education-container");
        $.getJSON('/assets/json/projects.json', function (data) {

            // Filter only "Education & Awareness" category
            const educationData = data.HelpAge_SriLanka_Events_And_Programs_2024_25
                .filter(cat => cat.category === "Education & Awareness")
                .flatMap(cat => cat.programs); // flatten the programs array

            // Loop through filtered programs
            $.each(educationData, function (index, item) {
                const card = `
                <div class="flex rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 h-64 bg-white overflow-hidden">
    
    <!-- Left: Image -->
    <div class="w-1/2 relative">
        <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
        <!-- Optional dark overlay -->
        <div class="absolute inset-0 bg-black opacity-25"></div>
    </div>
    
    <!-- Right: Text content -->
    <div class="w-1/2 flex flex-col justify-center p-6">
        <!-- Date -->
        <p class="text-gray-500 text-sm mb-2">${item.mini_date}</p>

        <!-- Title -->
        <h3 class="font-semibold text-lg md:text-xl text-gray-900 mb-2 truncate" title="${item.name}">
            ${item.name}
        </h3>

        <!-- Description -->
        <p class="text-gray-700 text-sm leading-relaxed line-clamp-3 mb-4">
            ${item.mini_description}
        </p>

        <!-- Button -->
        <a href="/education-details?education=${item.id}" 
           class="inline-block bg-black text-white hover:bg-gray-800 py-2 px-4 rounded-2xl text-sm w-max">
           View Details
        </a>
    </div>

</div>`;
                container.append(card);
            });

            // Remove loading spinner or message
            $('#loading-state').fadeOut(300, function () {
                $(this).remove();
            });

        }).fail(function () {
            console.error("Failed to load Blog data.");
            $('#loading-state').html('<p class="text-red-500">Failed to load Health & Medical programs. Please try again later.</p>');
        });
    });

</script>
<?php include '../layouts/footer.php'; ?>