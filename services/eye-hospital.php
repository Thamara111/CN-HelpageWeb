<?php

$meta_title = "Eye Hospital - HelpAge Sri Lanka";
$meta_description = "Learn more about HelpAge Sri Lanka's Eye Hospital and how you can contribute to improving the lives of elderly citizens in Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Eye Hospital, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/service-eye-hospital";

// Optional Open Graph image
$og_image = "https://helpagesl.org/assets/images/og-eye-hospital.webp";
require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>


<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">

    <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/projects/health.png"
        alt="Health & Medical">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 px-4">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Eye Hospital</h2>
        <p class="text-gray-200 mb-12 max-w-2xl mx-auto">
            HelpAge Sri Lanka’s Eye Hospital provides affordable, accessible, and high-quality eye care services for
            elders across the country. From cataract surgeries to vision screening camps, our mission is to restore
            sight, improve quality of life, and prevent avoidable blindness among senior citizens.
        </p>

        <a href="#eye-section"
            class="group inline-flex items-center bg-white text-black pl-4 pr-2 py-2 rounded-full hover:bg-black hover:text-white transition duration-300 mb-4">
            Get Started
            <i
                class="fa-solid fa-arrow-right bg-black text-white p-3 rounded-full ml-3 transition duration-300 group-hover:bg-white group-hover:text-black"></i>
        </a>
    </div>
</section>

<!-- Contact Section -->
<section id="eye-section" class="">
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4 text-center">What We Do for Eye Hospital</h2>

            <p class="text-gray-600 mb-12 max-w-3xl text-center mx-auto">
                HelpAge Eye Hospital delivers essential eye-care services to senior citizens who struggle to access
                quality medical treatment.
                Our initiatives focus on early diagnosis, cataract surgeries, screenings, treatments for common
                age-related eye conditions, and mobile outreach clinics. Through these programs, we aim to restore
                vision, reduce preventable blindness, and support elders to live healthier, more independent lives.
            </p>
        </div>
        <section class="w-full px-4 md:px-8  bg-white">
            <div id="eye-hospital-container" class="grid grid-cols-1 sm:grid-cols-2  gap-8">
            </div>
            <div id="loading-state" class="text-center text-gray-500 mt-8">
                Loading...
            </div>
        </section>
    </div>
</section>

<section id="eye-section" class="">
    <div class="container mx-auto px-6 py-12">
        <div class="w-full px-4 md:px-8  bg-white">
            <div id="eye-hospital-img-container" class="grid grid-cols-1 sm:grid-cols-2  gap-8">
            </div>
            <div id="loading-state" class="text-center text-gray-500 mt-8">
                Loading...
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        const container = $("#eye-hospital-container");
        $.getJSON('/assets/json/services.json', function (data) {

            // Filter only "Eye Hospital" category
            const eyeHospitalData = data.Services
                .filter(cat => cat.category === "HelpAge Eye Hospital")
                .flatMap(cat => cat.services_list); // flatten the programs array

            // Loop through filtered programs
            $.each(eyeHospitalData, function (index, item) {
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
                <a href="/service-eye-hospital-details?eye-hospital=${item.id}" 
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
            console.error("Failed to load Eye Hospital Services.");
            $('#loading-state').html('<p class="text-red-500">Failed to load Eye Hospital Services. Please try again later.</p>');
        });
    });

</script>

<?php include '../layouts/footer.php'; ?>