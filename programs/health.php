<?php
require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>

<!-- HERO SECTION -->
<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">

    <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/projects/health.png"
        alt="Health & Medical">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 px-4">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Health & Medical</h2>
        <p class="text-gray-200 mb-12 max-w-2xl mx-auto">
            Our health and medical initiatives aim to provide essential healthcare services to elderly citizens
            across Sri Lanka. From regular health check-ups to specialized medical care, we ensure our seniors
            receive the attention they deserve.
        </p>

        <a href="#health-donations-container"
            class="group inline-flex items-center bg-white text-black pl-4 pr-2 py-2 rounded-full hover:bg-black hover:text-white transition duration-300 mb-4">
            Get Started
            <i
                class="fa-solid fa-arrow-right bg-black text-white p-3 rounded-full ml-3 transition duration-300 group-hover:bg-white group-hover:text-black"></i>
        </a>
    </div>
</section>

<?php require_once '../components/counter.php' ?>


<!-- MAIN INTRO SECTION -->
<section>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <h4 class="text-red-600 mb-4">Health & Medical Care</h4>
                <h2 class="text-2xl md:text-3xl 2xl:text-6xl font-bold mb-4">
                    Caring for the Health of Our Elders
                </h2>

                <p class="text-gray-700 mb-6 text-justify">
                    HelpAge Sri Lanka runs targeted health and medical programs to ensure senior citizens receive
                    timely, dignified and continuous healthcare. From community screening and mobile clinics to
                    medicine distribution and rehabilitation services, our focus is on preventive care and improving
                    quality of life.
                </p>

                <ul class="mb-6">
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Eye hospital</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Day center</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Free medicines
                        and basic physiotherapy support</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Home care
                        assistant</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>Ayurvedic center
                    </li>
                </ul>

                <p class="text-gray-700">
                    Recent impact: <strong>10,000+</strong> health check-ups, <strong>300+</strong> mobile clinics and
                    thousands of seniors supported with medicines and follow-up care.
                </p>
            </div>

            <div>
                <img src="/assets/images/sec-1.png" alt="Health Programs" class="rounded-2xl">
            </div>

        </div>
    </div>
</section>


<!-- HEALTH DONATIONS SECTION -->
<section class="py-12">
    <div class="container mx-auto px-6 py-12">
        <div class="w-full px-4 md:px-8 bg-white">
            <h2 class="text-3xl font-bold mb-4 text-center">Health & Medical Donations</h2>

            <p class="text-gray-600 mb-12 max-w-3xl text-center mx-auto">
                Support our Health & Medical initiatives by choosing a program below. Your contribution helps
                provide medicines, mobile clinics and essential screenings for elders in need across Sri Lanka.
            </p>

            <div id="health-donations-container"
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8"></div>

            <div id="loading-donations" class="text-center text-gray-500 mt-8">
                Loading donations...
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        const container = $("#health-donations-container");
        const loading = $("#loading-donations");

        $.getJSON('/assets/json/donations.json', function (data) {

            const healthDonations = data.filter(item => item.category === "Health & Medical");

            loading.hide();

            if (healthDonations.length === 0) {
                container.append(`<p class="col-span-full text-center text-red-500">
                No Health & Medical donations found.
            </p>`);
                return;
            }

            healthDonations.forEach(item => {
                const card = `
                <div class="relative flex flex-col bg-gradient-to-r from-gray-50 to-gray-200 border border-gray-300 rounded-2xl shadow hover:shadow-xl transition">
                    <img src="${item.image}" alt="${item.title}" class="rounded-t-lg w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg truncate">${item.title}</h3>
                        <p class="text-gray-700 text-sm mt-2 line-clamp-3">${item.minidescription}</p>
                        <p class="text-green-800 text-lg mt-2">${item.amount}</p>

                        <a href="/w-donation-details?donation=${item.id}"
                           class="mt-4 inline-block bg-gray-50 border-2 border-black text-black hover:bg-black hover:text-white py-2 px-4 rounded-2xl">
                           Proceed to Donate
                        </a>
                    </div>
                </div>
            `;
                container.append(card);
            });

        }).fail(function () {
            loading.html('<p class="text-red-500">Failed to load donations. Please try again later.</p>');
        });
    });
</script>


<!-- WHAT WE DO – PROGRAM LIST SECTION -->
<section class="pb-12">
    <div class="container mx-auto px-6 py-12">
        <div class="w-full px-4 md:px-8 bg-white">


            <div id="health-container" class="grid grid-cols-1 gap-8"></div>

            <div id="loading-programs" class="text-center text-gray-500 mt-8">
                Loading programs...
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        const container = $("#health-container");

        $.getJSON('/assets/json/projects.json', function (data) {

            const healthData = data.HelpAge_SriLanka_Events_And_Programs_2024_25
                .filter(cat => cat.category === "Health & Medical")
                .flatMap(cat => cat.programs);

            $("#loading-programs").hide();

            healthData.forEach((item, index) => {

                // CHANGE ORDER for every 2nd row
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
                </div>
            `;

                container.append(card);
            });

        }).fail(function () {
            $("#loading-programs").html(
                '<p class="text-red-500">Failed to load Health & Medical programs. Please try again later.</p>'
            );
        });
    });

</script>

<?php include '../layouts/footer.php'; ?>