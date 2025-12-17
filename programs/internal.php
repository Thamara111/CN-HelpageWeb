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
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Human Resources & Internal Events</h2>
        <p class="text-gray-200 mb-12 max-w-2xl mx-auto">
            Our human resources and internal events initiatives aim to provide essential support and resources
            to elderly citizens
            across Sri Lanka. From regular training sessions to specialized workshops, we ensure our seniors
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
                <h4 class="text-red-600 mb-4">Human Resources & Internal Events</h4>
                <h2 class="text-2xl md:text-3xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    Strengthening People, Enriching Community Care
                </h2>
                <p class="text-gray-700 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8 text-justify">
                    Our Human Resources & Internal Events programme focuses on building the skills, wellbeing and
                    engagement of staff and volunteers who deliver vital services to older people across Sri Lanka.
                    Through continuous training, structured volunteer pathways and meaningful internal events, we
                    ensure teams are supported, motivated and equipped to provide dignified elderly care.
                </p>

                <ul class=" mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Capacity
                        building:
                        regular training on elderly care, safeguarding and case management</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Volunteer
                        recruitment,
                        onboarding and mentorship programmes to expand community reach</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Wellbeing &
                        support for staff:
                        counselling, feedback forums and recognition initiatives</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Internal events
                        and workshops:
                        peer learning, best-practice sharing and community engagement activities</li>
                </ul>

                <p class="text-gray-700 mb-4">
                    Recent impact: 1,200+ staff & volunteers trained, 45 internal learning events delivered and
                    sustained
                    volunteer networks supporting over 8,000 older people with social, practical and care services.
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
            <h2 class="text-3xl font-bold mb-4 text-center">What We Do for Human Resources & Internal Events</h2>

            <p class="text-gray-600 mb-12 max-w-3xl text-center mx-auto">
                HelpAge Sri Lanka provides essential medical support for elderly communities across the nation.
                These programs focus on early detection, treatment, eye care, mobility support and preventive
                healthcare — reaching seniors who need it most.
            </p>
            <div id="internal-container" class="grid grid-cols-1 gap-8">
            </div>
            <div id="loading-state" class="text-center text-gray-500 mt-8">
                Loading...
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        const container = $("#internal-container");
        const loadingState = $('#loading-state');
        const jsonPath = '/assets/json/projects.json'; // Ensure this path is correct

        console.log("Attempting to fetch JSON...");

        $.getJSON(jsonPath, function (data) {
            console.log("JSON Data Loaded.");

            try {
                // 1. Define the Root Key
                const rootKey = "HelpAge_SriLanka_Events_And_Programs_2024_25";

                if (!data[rootKey]) {
                    throw new Error(`Root key "${rootKey}" not found in JSON.`);
                }

                // 2. Filter Data (FIXED: Changed 'events' to 'programs')
                const internalData = data[rootKey]
                    .filter(cat => cat.category === "Human Resources & Internal Events")
                    .flatMap(cat => cat.programs || []); // <--- CHANGED THIS LINE

                console.log("Filtered Programs:", internalData);

                if (internalData.length === 0) {
                    container.html('<p class="text-center text-gray-500">No programs found for this category.</p>');
                    loadingState.hide();
                    return;
                }

                // 3. Loop and Append
                $.each(internalData, function (index, item) {
                    const flexDirection = (index % 2 === 0) ? '' : 'flex-row-reverse';

                    const card = `
                    <div class="flex ${flexDirection} rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 h-64 bg-white overflow-hidden">
                    
                    <div class="w-1/2 relative">
                        <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-25"></div>
                    </div>

                    <div class="w-1/2 flex flex-col justify-center p-6">
                        <p class="text-gray-500 text-sm mb-2">${item.mini_date}</p>

                        <h3 class="font-semibold text-lg text-gray-900 mb-2 truncate">${item.name}</h3>

                        <p class="text-gray-700 text-sm line-clamp-3 mb-4">${item.mini_description}</p>

                        <a href="/health-details?health=${item.id}" class="inline-block bg-black text-white hover:bg-gray-800 py-2 px-4 rounded-2xl text-sm w-max"> 
                            View Details 
                        </a>
                    </div>
                </div>`;

                    container.append(card);
                });

                loadingState.hide();

            } catch (error) {
                console.error("Logic Error:", error);
                loadingState.html(`<p class="text-red-500 text-center">Error: ${error.message}</p>`);
            }

        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", textStatus, errorThrown);
            loadingState.html(`<p class="text-red-500 text-center">Failed to load data (Status: ${jqXHR.status}). Check console for details.</p>`);
        });
    });
</script>
<?php include '../layouts/footer.php'; ?>