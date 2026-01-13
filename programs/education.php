<?php

$meta_title = "Education & Awareness - HelpAge Sri Lanka";
$meta_description = "Learn more about HelpAge Sri Lanka's education programs and initiatives aimed at improving the lives of children and youth in Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Education Programs, Youth Development, Children, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/programs/education-awareness";

// Optional Open Graph image
$og_image = "https://helpagesl.org/assets/images/og-education-awareness.webp";

require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>


<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">
    <!-- Background video -->

    <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/projects/education.jpg"
        alt="education hero">

    <!-- Overlay (optional for better readability) -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Hero content -->
    <div class="relative z-10 px-4" data-aos="fade-up" data-aos-duration="1500">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Education & Awareness</h2>
        <p class="text-gray-200 mb-12 max-w-2xl mx-auto">
            Our education and awareness initiatives aim to provide essential information and resources to
            elderly citizens
            across Sri Lanka. From health education to legal rights awareness, we ensure our seniors
            receive the knowledge they need to live with dignity.
        </p>
        <a href="#education-donations-container"
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
            <div data-aos="fade-right" data-aos-duration="1500">
                <h4 class="text-red-600 mb-4">Education & Awareness</h4>
                <h2 class="text-2xl md:text-3xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    Empowering Our Elders Through Knowledge</h2>
                <p class="text-gray-700 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8 text-justify">
                    HelpAge Sri Lanka is dedicated to enhancing the knowledge and skills of senior citizens through
                    various educational programs. We focus on critical areas such as health literacy, legal rights, and
                    digital skills to empower our elders to navigate the modern world confidently.
                </p>

                <ul class="mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Workshops on
                        health and wellness topics</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Legal rights
                        education and advocacy</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Digital literacy
                        training for seniors</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Community
                        outreach programs to raise awareness</li>
                </ul>

                <p class="text-gray-700 mb-4">
                    Recent impact: Over 5,000 seniors educated through workshops, 1,000+ participants in digital
                    literacy programs, and numerous community events held to promote awareness.
                </p>

                <!-- <a href="/w-donation"
                    class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300 mb-4 md:mb-2">
                    Support Health Programs
                    <i
                        class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
                </a> -->

            </div>
            <div data-aos="fade-left" data-aos-duration="1500">
                <img src="/assets/images/sec-1.webp" alt="Education & Awareness" class="rounded-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="education-donations-container" class="" data-aos="fade-up" data-aos-duration="1500">
    <div class="container mx-auto px-6 py-12">
        <div class="w-full px-4 md:px-8  bg-white">
            <div id="education-container" class="grid grid-cols-1  gap-8">
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
        const container = $("#education-container");
        $.getJSON('/assets/json/projects.json', function (data) {

            // Filter only "Education & Awareness" category
            const educationData = data.HelpAge_SriLanka_Events_And_Programs_2024_25
                .filter(cat => cat.category === "Education & Awareness")
                .flatMap(cat => cat.programs); // flatten the programs array

            // Loop through filtered programs
            $.each(educationData, function (index, item) {
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
        <a href="/programs-education-details?education=${item.id}" 
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