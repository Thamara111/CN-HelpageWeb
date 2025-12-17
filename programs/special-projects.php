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
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Special projects</h2>
        <p class="text-gray-200 mb-12 max-w-2xl mx-auto">
            Our Special Projects division focuses on innovative initiatives designed to uplift and empower elderly
            citizens across Sri Lanka. These projects go beyond our regular activities and address the unique challenges
            faced by senior communities. Through targeted programs, collaborative partnerships, and sustainable
            development efforts, we strive to create long-term positive impact.
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
                <h4 class="text-red-600 mb-4">Special Projects</h4>
                <h2 class="text-2xl md:text-3xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    “Caring for older people, uplifting communities, and creating a future of dignity and security.”
                </h2>

                <p class="text-gray-700 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8 text-justify">
                    Led by Head of Programmes Mr. Chaminda de Silva, HelpAge Sri Lanka’s Programme Division ensures
                    dignified ageing through rights advocacy, medical outreach, and humanitarian response. Supported by
                    13 head office staff and 5 field coordinators in key districts (Ampara, Jaffna, Galle, Matara,
                    Hambantota), we manage vital initiatives like the Sponsor a Grandparent (SaG) Programme and Mobile
                    Medical Unit (MMU) camps. Together, we are dedicated to building a future where every older person
                    in Sri Lanka lives with security, respect, and hope.
                </p>

                <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        Micro Finance
                    </li>

                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        Disaster Relief
                    </li>

                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        Training of Trainers (TOT)
                    </li>

                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        Staff Training
                    </li>

                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        Elder Rights Advocacy
                    </li>

                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        Livelihood Programmes
                    </li>

                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        Cataract Surgery Campaigns
                    </li>
                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        Voluntary Home Care Programmes
                    </li>
                    <li class="my-4 flex">
                        <i
                            class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2 flex justify-center items-center"></i>
                        SAG – Sponsor a Grandparent Programme
                    </li>


                </ul>



                <p class="text-gray-700 mb-4">
                    Recent impact: Over 6,500 elders supported through special projects, 1,200 families assisted with
                    livelihood development, 400+ cataract surgeries completed, and rapid disaster relief provided across
                    multiple districts.
                </p>
                <!-- <a href="/w-donation"
                    class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300 mb-4 md:mb-2">
                    Support Health Programs
                    <i
                        class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
                </a> -->

            </div>
            <div>
                <img src="/assets/images/sec-1.webp" alt="" class="rounded-2xl">
            </div>
        </div>
    </div>
</section>


<!-- Contact Section -->
<section class="">
    <div class="container mx-auto px-6 py-12">
        <div class="w-full px-4 md:px-8  bg-white">
            <h2 class="text-3xl font-bold mb-4 text-center">What We Do for Special Projects</h2>

            <p class="text-gray-600 mb-12 max-w-3xl text-center mx-auto">
                The Programme Division stands by a simple promise:
                to ensure that every older people in Sri Lanka lives with dignity, good health, and hope. Through
                compassion, professionalism, and strong partnerships, we continue to touch lives, strengthen
                communities, and protect the well-being of our elders across the nation.

            </p>
            <div id="special-projects-container" class="grid grid-cols-1 gap-8">
            </div>
            <div id="loading-state" class="text-center text-gray-500 mt-8">
                Loading...
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        const container = $("#special-projects-container");
        $.getJSON('/assets/json/projects.json', function (data) {

            // Filter only "Special Projects" category
            const specialProjectsData = data.HelpAge_SriLanka_Events_And_Programs_2024_25
                .filter(cat => cat.category === "Special Projects")
                .flatMap(cat => cat.programs); // flatten the programs array

            // Loop through filtered programs
            $.each(specialProjectsData, function (index, item) {
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
        <a href="/special-projects-details?special-projects=${item.id}" 
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