<?php
require_once '../layouts/head.php';

// Meta tags
$meta_title = "Fundraising & Community Relations - HelpAge Sri Lanka";
$meta_description = "Learn more about HelpAge Sri Lanka's fundraising and community relations programs and how you can contribute to improving the lives of elderly citizens in Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Fundraising Programs, Community Relations, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/programs/fundraising";
$og_image = "https://helpagesl.org/assets/images/og-fundraising-program.webp";

require_once '../layouts/header.php';
?>

<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">
    <!-- Background video -->

    <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/projects/fundraising.jpg"
        alt="fundraising hero">

    <!-- Overlay (optional for better readability) -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Hero content -->
    <div class="relative z-10 px-4" data-aos="fade-up" data-aos-duration="1500">
        <h2 class="text-4xl md:text-6xl font-bold mb-4">Fundraising & Community Relations</h2>
        <p class="text-gray-200 mb-12 max-w-2xl mx-auto">
            Our fundraising and community relations initiatives aim to provide essential support and resources
            to elderly citizens
            across Sri Lanka. From regular health check-ups to specialized medical care, we ensure our seniors
            receive the attention they deserve.
        </p>
        <a href="#fundraising-donations-container"
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
                <h4 class="text-red-600 mb-4">Fundraising & Community Relations</h4>
                <h2 class="text-2xl md:text-3xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    Uniting Communities to Support Our Elders
                </h2>
                <p class="text-gray-700 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8 text-justify">
                    Our Fundraising & Community Relations work builds sustainable support networks for older people
                    across Sri Lanka. Through grassroots fundraising, corporate partnerships, events and digital
                    campaigns we mobilize resources, raise awareness and create long-term relationships that improve
                    seniors' dignity, health and living conditions.
                </p>

                <ul class=" mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    <li class="my-4"><i
                            class="fa-solid fa-hands-holding-child bg-green-500 p-2 rounded-xl mx-2"></i>Community
                        fundraisers and donor drives that channel local support to neighbourhood initiatives</li>
                    <li class="my-4"><i class="fa-solid fa-people-roof bg-green-500 p-2 rounded-xl mx-2"></i>Corporate
                        partnerships and workplace giving programmes to sustain long-term projects</li>
                    <li class="my-4"><i class="fa-solid fa-calendar-days bg-green-500 p-2 rounded-xl mx-2"></i>Signature
                        events, awareness campaigns and digital appeals to engage new donors and volunteers</li>
                    <li class="my-4"><i
                            class="fa-solid fa-hand-holding-heart bg-green-500 p-2 rounded-xl mx-2"></i>Targeted
                        sponsorships for emergency relief, medicines and social support for the most vulnerable elders
                    </li>
                    <li class="my-4"><i class="fa-solid fa-network-wired bg-green-500 p-2 rounded-xl mx-2"></i>Community
                        relations activities that strengthen ties between local leaders, service providers and seniors
                    </li>
                </ul>

                <p class="text-gray-700 mb-4">
                    Recent impact: mobilised thousands of community donors, raised funds to support hundreds of local
                    programmes, and enabled regular home visits, transport for medical care and emergency aid for
                    hundreds of seniors across the country.
                </p>



                <!-- <a href="/w-donation"
                    class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300 mb-4 md:mb-2">
                    Support Health Programs
                    <i
                        class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
                </a> -->

            </div>
            <div data-aos="fade-left" data-aos-duration="1500">
                <img src="/assets/images/sec-1.webp" alt="Fundraising & Community Relations" class="rounded-2xl">
            </div>
        </div>
    </div>
</section>

<!-- <section id="fundraising-donations-container" class="py-12">
    <div class="container mx-auto px-6 py-12">
        <div class="w-full px-4 md:px-8 bg-white">
            <h2 class="text-3xl font-bold mb-4 text-center">Fundraising & Community Relations Donations</h2>

            <p class="text-gray-600 mb-12 max-w-3xl text-center mx-auto">
                Support our Fundraising & Community Relations initiatives by choosing a program below. Your contribution
                helps
                provide medicines, mobile clinics and essential screenings for elders in need across Sri Lanka.
            </p>

            <div id="fundraising-donations-container"
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8"></div>

            <div id="loading-donations" class="text-center text-gray-500 mt-8">
                Loading donations...
            </div>
        </div>
    </div>
</section> -->

<!-- <script>
    $(document).ready(function () {
        const container = $("#fundraising-donations-container");
        const loading = $("#loading-donations");

        $.getJSON('/assets/json/donations.json', function (data) {

            const fundraisingDonations = data.filter(item => item.category === "Fundraising & Community Relations");

            loading.hide();

            if (fundraisingDonations.length === 0) {
                container.append(`<p class="col-span-full text-center text-red-500">
                No Fundraising & Community Relations donations found.
            </p>`);
                return;
            }

            fundraisingDonations.forEach(item => {
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
</script> -->

<!-- Contact Section -->
<section class="">
    <div class="container mx-auto px-6 pb-12" data-aos="fade-up" data-aos-duration="1500">
        <h2 class="text-3xl font-bold mb-4 text-center">What We Do for Fundraising & Community Relations</h2>

        <p class="text-gray-600 mb-12 max-w-3xl text-center mx-auto">
            HelpAge Sri Lanka provides essential medical support for elderly communities across the nation.
            These programs focus on early detection, treatment, eye care, mobility support and preventive
            healthcare — reaching seniors who need it most.
        </p>
        <div class="w-full px-4 md:px-8  bg-white">
            <div id="fundraising-container" class="grid grid-cols-1  gap-8">
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
        const container = $("#fundraising-container");
        $.getJSON('/assets/json/projects.json', function (data) {

            // Filter only "Fundraising & Community Relations" category
            const fundraisingData = data.HelpAge_SriLanka_Events_And_Programs_2024_25
                .filter(cat => cat.category === "Fundraising & Community Relations")
                .flatMap(cat => cat.programs); // flatten the programs array

            // Loop through filtered programs
            $.each(fundraisingData, function (index, item) {
                const flexDirection = (index % 2 === 0) ? '' : 'flex-row-reverse';

                const card = `
                <div class="flex ${flexDirection} rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 h-64 bg-white overflow-hidden">
    
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
        <a href="/programs-fundraising-details?fundraising=${item.id}" 
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