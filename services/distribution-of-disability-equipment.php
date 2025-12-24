<?php

$meta_title = "Distribution of Disability Equipment - HelpAge Sri Lanka";
$meta_description = "Learn more about HelpAge Sri Lanka's Distribution of Disability Equipment and how you can contribute to improving the lives of elderly citizens in Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Distribution of Disability Equipment, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/service-distribution-of-disability-equipment";
$og_image = "https://helpagesl.org/assets/images/og-disability-equipment.webp";

require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>


<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">

    <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/projects/health.png"
        alt="Health & Medical">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 px-4">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Distribution of Disability Equipment</h2>
        <p class="text-gray-200 mb-12 max-w-2xl mx-auto">
            Our community and elder care initiatives aim to provide essential support and services to elderly
            citizens
            across Sri Lanka. From regular health check-ups to specialized medical care, we ensure our seniors
            receive the attention they deserve.
        </p>

        <a href="#disability-container1"
            class="group inline-flex items-center bg-white text-black pl-4 pr-2 py-2 rounded-full hover:bg-black hover:text-white transition duration-300 mb-4">
            Get Started
            <i
                class="fa-solid fa-arrow-right bg-black text-white p-3 rounded-full ml-3 transition duration-300 group-hover:bg-white group-hover:text-black"></i>
        </a>
    </div>
</section>

<!-- Contact Section -->
<section id="disability-container1" class="">
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Distribution of Disability Equipment</h2>
            <p class="text-gray-500 mb-12 max-w-5xl mx-auto">
                Our community and elder care initiatives aim to provide essential support and services to elderly
                citizens
                across Sri Lanka. From regular health check-ups to specialized medical care, we ensure our seniors
                receive the attention they deserve.
            </p>
        </div>
        <section class="w-full px-4 md:px-8  bg-white">
            <div id="disability-container" class="grid grid-cols-1 sm:grid-cols-2  gap-8">
            </div>
            <div id="loading-state" class="text-center text-gray-500 mt-8">
                Loading...
            </div>
        </section>
    </div>
</section>

<script>
    $(document).ready(function () {
        const container = $("#disability-container");
        $.getJSON('/assets/json/services.json', function (data) {

            // Filter only "Distribution of Disability Equipment" category
            const disabilityData = data.Services
                .filter(cat => cat.category === "Disability Equipment Services")
                .flatMap(cat => cat.services_list); // flatten the programs array

            // Loop through filtered programs
            $.each(disabilityData, function (index, item) {
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
                <a href="/service-distribution-of-disability-equipment-details?disability-equipment=${item.id}" 
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
            console.error("Failed to load Distribution of Disability Equipment Services.");
            $('#loading-state').html('<p class="text-red-500">Failed to load Distribution of Disability Equipment Services. Please try again later.</p>');
        });
    });

</script>

<?php include '../layouts/footer.php'; ?>