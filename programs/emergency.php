<?php
require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>


<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">
    <!-- Background video -->

    <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/projects/emergency.jpg" alt="">

    <!-- Overlay (optional for better readability) -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Hero content -->
    <div class="relative z-10 px-4">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Emergency & Humanitarian</h2>
        <p class="text-gray-200 mb-12 max-w-2xl mx-auto">
            Our emergency and humanitarian initiatives aim to provide essential support and services to elderly
            citizens
            across Sri Lanka. From regular health check-ups to specialized medical care, we ensure our seniors
            receive the attention they deserve.
        </p>
        <a href=""
            class="group inline-flex items-center bg-white text-black pl-4 pr-2 py-2 rounded-full hover:bg-black hover:text-white transition duration-300 mb-4">
            Get Started
            <i
                class="fa-solid fa-arrow-right bg-black text-white p-3 rounded-full ml-3 transition duration-300 group-hover:bg-white group-hover:text-black"></i>
        </a>
    </div>
</section>

<?php require_once '../components/counter.php' ?>

<section>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 grid-cols-1 md:grid-cols-2 lg:gap-6">
            <div>
                <h4 class="text-red-600 mb-4">Emergency & Humanitarian Support</h4>
                <h2 class="text-2xl md:text-3xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    Responding to Crises with Compassion</h2>
                <p class="text-gray-700 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8 text-justify">
                    HelpAge Sri Lanka is dedicated to providing immediate assistance and support during emergencies.
                    Our initiatives focus on delivering essential supplies, medical aid, and shelter to vulnerable
                    populations affected by disasters and crises.
                </p>

                <ul class=" mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Emergency food
                        distribution to affected families</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Provision of
                        medical supplies and healthcare services</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Temporary
                        shelter and support for displaced individuals</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Psychosocial
                        support and counseling for affected communities</li>
                </ul>

                <p class="text-gray-700 mb-4">
                    Recent impact: Over 5,000 individuals supported during natural disasters, providing food, medical
                    care, and shelter to those in need.
                </p>

                <!-- <a href="/w-donation"
                    class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300 mb-4 md:mb-2">
                    Support Health Programs
                    <i
                        class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
                </a> -->

            </div>
            <div>
                <img src="/assets/images/sec-1.png" alt="" class="rounded-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="">
    <div class="container mx-auto px-6 py-12">
        <div class="w-full px-4 md:px-8  bg-white">
            <h2 class="text-3xl font-bold mb-4 text-center">What We Do for Emergency & Humanitarian</h2>

            <p class="text-gray-600 mb-12 max-w-3xl text-center mx-auto">
                HelpAge Sri Lanka provides essential medical support for elderly communities across the nation.
                These programs focus on early detection, treatment, eye care, mobility support and preventive
                healthcare — reaching seniors who need it most.
            </p>
            <div id="emergency-container" class="grid grid-cols-1 gap-8">
            </div>
            <div id="loading-state" class="text-center text-gray-500 mt-8">
                Loading...
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<script>
    $(document).ready(function () {
        const container = $("#emergency-container");
        $.getJSON('/assets/json/projects.json', function (data) {

            // Filter only "Emergency & Humanitarian" category
            const emergencyData = data.HelpAge_SriLanka_Events_And_Programs_2024_25
                .filter(cat => cat.category === "Emergency & Humanitarian")
                .flatMap(cat => cat.programs); // flatten the programs array

            // Loop through filtered programs
            $.each(emergencyData, function (index, item) {
                const flexClass = index % 2 === 0 ? 'flex-row' : 'flex-row-reverse';
                const card = `
                <div class="flex ${flexClass} rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 h-64 bg-white overflow-hidden">
    
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
        <a href="/emergency-details?emergency=${item.id}" 
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