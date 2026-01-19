<?php

$meta_title = "Home - HelpAge Sri Lanka";
$meta_description = "HelpAge Sri Lanka is a charitable non-governmental Organization working for and on behalf of disadvantaged senior citizens in Sri Lanka to improve their quality of lives.";
$meta_keywords = "HelpAge Sri Lanka, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/";
$og_image = "https://helpagesl.org/assets/images/og-home.webp";

$page = $_GET['page'] ?? 'home';

$allowedPages = [
    'home',
    'about',
    'contact',
    'w-donation',
    'w-donation-details',
];

if (!in_array($page, $allowedPages)) {
    http_response_code(404);
    require '404.php';
    exit;
}

require_once 'layouts/head.php';
require_once 'layouts/header.php';

if ($page === 'home') {
    require_once 'layouts/home-hero.php';
}
?>


<!-- three columns -->
<section>
    <div class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="flex flex-col md:flex-row p-2" data-aos="fade-right" data-aos-duration="1500">
            <div class="flex justify-center items-center px-4">
                <i
                    class="fa-solid fa-hand-holding-heart bg-red-100 p-6 rounded-2xl  text-4xl text-red-600 mb-2 md:mb-0"></i>
            </div>
            <div>
                <h3 class="font-semibold text-lg text-center md:text-left">Supporting Hands that Heal</h3>
                <p class="text-gray-700 text-sm text-center md:text-left">Your contribution helps us provide
                    essential care, medical aid, and
                    emotional support to elders who need it most.</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row p-2" data-aos="zoom-in" data-aos-duration="1500">
            <div class="flex justify-center items-center px-4">
                <i class="fa-solid fa-bowl-food bg-red-100 p-6 rounded-2xl  text-4xl text-red-600 mb-2 md:mb-0"></i>
            </div>
            <div>
                <h3 class="font-semibold text-lg text-center md:text-left">Nourishing Lives with Love</h3>
                <p class="text-gray-700 text-sm text-center md:text-left">Every donation ensures a warm meal and
                    dignity for our senior
                    citizens who
                    often go hungry and unseen.</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row p-2" data-aos="fade-left" data-aos-duration="1500">
            <div class="flex justify-center items-center px-4">
                <i class="fa-solid fa-shield-heart text-4xl bg-red-100 p-6 rounded-2xl text-red-600 mb-2 md:mb-0"></i>
            </div>
            <div>
                <h3 class="font-semibold text-lg text-center md:text-left">Building Safe Havens for the Elderly</h3>
                <p class="text-gray-700 text-sm text-center md:text-left">Help us create comfortable living spaces
                    where elders feel valued,
                    respected, and cared for every day.</p>
            </div>
        </div>
    </div>
</section>

<hr class="container mx-auto border-t border-gray-300 my-4">

<!-- Who We Are. -->
<section>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 grid-cols-1 md:grid-cols-2 lg:gap-6">
            <div data-aos="fade-right" data-aos-duration="1500">
                <h4 class="text-red-600 mb-4 ">Who We Are.</h4>
                <h2 class="text-2xl md:text-3xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    The Heart Behind Our Work</h2>
                <p class="text-gray-700 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">HelpAge Sri Lanka is a charitable
                    non-governmental Organization working for and on behalf of disadvantaged senior citizens in Sri
                    Lanka to improve their quality of lives. By working together we ensure that people in Sri Lanka
                    understand how much older people have contributed to society when they were able and strong and
                    that they must enjoy their right to healthcare, social services and economic and physical
                    security.</p>

                <ul class=" mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>500m liters
                        of water provided through communities</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>4000+ houses
                        built for the poor people</li>
                    <li class="my-4"><i class="fa-solid fa-check bg-green-500 p-2 rounded-xl mx-2"></i>700+ schools
                        built for underserved children</li>
                </ul>

                <a href="/about"
                    class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300 mb-4 md:mb-2 hover:border border-red-600">
                    Our Story
                    <i
                        class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
                </a>

            </div>
            <div data-aos="fade-left" data-aos-duration="1500">
                <img src="/assets/images/sec-1.webp" alt="Who We Are" class="rounded-2xl">
            </div>
        </div>
    </div>
</section>

<?php require_once 'components/donation-logos.php'; ?>

<!-- donations -->
<section>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div data-aos="fade-right" data-aos-duration="1500">
                <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold mb-12">
                    Give Hope. Support. Dignity.
                </h2>
                <p class="text-gray-700 mb-12">
                    Your generosity helps us care for elderly citizens across Sri Lanka — providing them with
                    medical aid, food, and emotional support to live with dignity and independence.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-duration="1500">
                <p class="text-gray-700 mb-12">
                    Each donation funds vital programs like free cataract surgeries, mobile medical clinics, and
                    elder homes.
                    Together, we can create a future where every senior feels valued, respected, and cared for.
                </p>
                <a href="/w-donation"
                    class="group inline-flex items-center border-2 border-black bg-white text-black pl-4 pr-2 py-2 rounded-full hover:bg-black hover:text-white transition duration-300 mb-4">
                    Make a Difference
                    <i
                        class="fa-solid fa-arrow-right bg-black text-white p-3 rounded-full ml-3 transition duration-300 group-hover:bg-white group-hover:text-black"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4" id="latestDonations" data-aos="fade-up"
            data-aos-duration="1500">
            <!-- Latest donations will be injected here -->
        </div>

    </div>
</section>

<!-- For you -->
<section class="bg-red-50 py-16">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 items-center">
            <!-- Image Section -->
            <div class="order-2 relative md:order-1 animate-slide-in-left">
                <!-- Image Container with Grid Layout -->
                <div class="relative w-full max-w-md mx-auto h-96 md:h-[500px]">

                    <div
                        class="absolute top-0 left-0 w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 transform -rotate-6 hover:rotate-0 transition-all duration-500 hover:scale-110 hover:z-10">
                        <img src="/assets/images/help1.JPG" alt="Elderly Care 1"
                            class="w-full h-full rounded-2xl shadow-xl object-cover border-4 border-white"
                            data-aos="fade-right" data-aos-duration="500">
                    </div>

                    <div
                        class="absolute top-4 right-4 w-28 h-28 md:w-36 md:h-36 lg:w-44 lg:h-44 transform rotate-3 hover:rotate-0 transition-all duration-500 hover:scale-110 hover:z-10">
                        <img src="/assets/images/help2.JPG" alt="Elderly Care 2"
                            class="w-full h-full rounded-2xl shadow-xl object-cover border-4 border-white"
                            data-aos="fade-left" data-aos-duration="1500">
                    </div>

                    <div
                        class="absolute top-1/2 left-8 -translate-y-1/2 w-36 h-36 md:w-44 md:h-44 lg:w-52 lg:h-52 transform -rotate-12 hover:rotate-0 transition-all duration-500 hover:scale-110 hover:z-10">
                        <img src="/assets/images/help3.JPG" alt="Elderly Care 3"
                            class="w-full h-full rounded-2xl shadow-xl object-cover border-4 border-white"
                            data-aos="fade-right" data-aos-duration="500">
                    </div>

                    <div
                        class="absolute top-1/2 right-12 -translate-y-1/2 w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 transform rotate-8 hover:rotate-0 transition-all duration-500 hover:scale-110 hover:z-10">
                        <img src="/assets/images/sec-1.webp" alt="Elderly Care 4"
                            class="w-full h-full rounded-2xl shadow-xl object-cover border-4 border-white"
                            data-aos="fade-left" data-aos-duration="1500">
                    </div>

                    <div
                        class="absolute bottom-8 left-12 w-28 h-28 md:w-36 md:h-36 lg:w-44 lg:h-44 transform rotate-6 hover:rotate-0 transition-all duration-500 hover:scale-110 hover:z-10">
                        <img src="/assets/images/img2.webp" alt="Elderly Care 5"
                            class="w-full h-full rounded-2xl shadow-xl object-cover border-4 border-white"
                            data-aos="fade-right" data-aos-duration="500">
                    </div>

                    <div
                        class="absolute bottom-4 right-0 w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 transform -rotate-3 hover:rotate-0 transition-all duration-500 hover:scale-110 hover:z-10">
                        <img src="/assets/images/manu.JPG" alt="Elderly Care 6"
                            class="w-full h-full rounded-2xl shadow-xl object-cover border-4 border-white"
                            data-aos="fade-left" data-aos-duration="1500">
                    </div>

                    <!-- Decorative Background Element -->
                    <div
                        class="absolute inset-0 -z-10 bg-gradient-to-br from-red-100 to-orange-100 rounded-3xl opacity-60 transform rotate-2">
                    </div>
                </div>

                <!-- Floating Action Button -->
                <!-- <div class="flex justify-center mt-8">
        <button class="bg-red-600 text-white px-6 py-3 rounded-full shadow-lg hover:bg-red-700 transform hover:scale-105 transition-all duration-300 flex items-center gap-2">
            <i class="fa-solid fa-images"></i>
            <span>View Gallery</span>
        </button>
    </div> -->
            </div>



            <!-- Content Section -->
            <div class="order-1 col-span-2 md:order-2">

                <h4 class="text-red-600 font-semibold text-lg mb-2 tracking-wide" data-aos="fade-down"
                    data-aos-duration="1000">
                    For You
                </h4>

                <h2 class="text-3xl md:text-3xl xl:text-6xl font-bold text-gray-800 mb-6 leading-tight"
                    data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                    How can you help us?
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-4 border-red-500"
                        data-aos="fade-right" data-aos-duration="1000">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="bg-red-100 p-3 rounded-full">
                                <i class="fa-solid fa-eye text-2xl text-red-600"></i>
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-gray-800">
                                Eye Hospital
                            </h3>
                        </div>
                        <div class="space-y-3">
                            <p class="text-gray-700 text-sm flex items-start gap-2">
                                <i class="fa-solid fa-star text-red-500 mt-1 flex-shrink-0"></i>
                                <span>Donations towards a cataract surgery to restore the vision of an elderly –
                                    Rs.25,000.</span>
                            </p>
                            <p class="text-gray-700 text-sm flex items-start gap-2">
                                <i class="fa-solid fa-star text-red-500 mt-1 flex-shrink-0"></i>
                                <span>Your contribution for maintenance of Eye Hospital.</span>
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-4 border-red-500"
                        data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="bg-red-100 p-3 rounded-full">
                                <i class="fa-solid fa-house-medical text-2xl text-red-600"></i>
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-gray-800">
                                Day Centre
                            </h3>
                        </div>
                        <div class="space-y-3">
                            <p class="text-gray-700 text-sm flex items-start gap-2">
                                <i class="fa-solid fa-star text-red-500 mt-1 flex-shrink-0"></i>
                                <span>Donations for Breakfast (Rs.8,000), Lunch (Rs.10,000) and Tea (Rs.4,000) for 40
                                    elders.</span>
                            </p>
                            <p class="text-gray-700 text-sm flex items-start gap-2">
                                <i class="fa-solid fa-star text-red-500 mt-1 flex-shrink-0"></i>
                                <span>For more information: No:24, Dharmashrama Mawatha, Borupana, Rathmalana. –
                                    0112635566</span>
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-4 border-red-500"
                        data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="bg-red-100 p-3 rounded-full">
                                <i class="fa-solid fa-wheelchair text-2xl text-red-600"></i>
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-gray-800">
                                Mobility Equipment
                            </h3>
                        </div>
                        <p class="text-gray-700 text-sm flex items-start gap-2">
                            <i class="fa-solid fa-star text-red-500 mt-1 flex-shrink-0"></i>
                            <span>Your donations towards wheel chairs and walking aids such as crutches and walking
                                frames and Hearing aids. Used wheel chairs and other mobility equipment are also
                                accepted.</span>
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-l-4 border-red-500"
                        data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="bg-red-100 p-3 rounded-full">
                                <i class="fa-solid fa-truck-medical text-2xl text-red-600"></i>
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-gray-800">
                                Mobile Medical Unit
                            </h3>
                        </div>
                        <p class="text-gray-700 text-sm flex items-start gap-2">
                            <i class="fa-solid fa-star text-red-500 mt-1 flex-shrink-0"></i>
                            <span>Your sponsorship for a MMU camp to screen 150 elders – Cost Rs. 150,000.</span>
                        </p>
                    </div>
                </div>

                <div class="mt-8 flex justify-center md:justify-start" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="400">
                    <a href="/w-donation"
                        class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300">
                        Support Our Causes
                        <i
                            class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fundraising -->
<section>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold mb-12"
                    data-aos="fade-right" data-aos-duration="1500">
                    Every Contribution Builds a Brighter Tomorrow
                </h2>
                <p class="text-gray-700 mb-12">
                    Our fundraising initiatives bring together compassionate individuals and communities to support
                    Sri Lanka's
                    most vulnerable elders. Each campaign is a step toward restoring hope, health, and happiness in
                    their lives.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-duration="1500">
                <p class="text-gray-700 mb-12">
                    From medical care and nutrition to safe housing and companionship, your support fuels programs
                    that uplift
                    the lives of seniors who once gave so much to society. Join hands with us and become a part of
                    their second
                    chance at life.
                </p>
                <a href="/w-fundraising"
                    class="group inline-flex items-center border-2 border-black bg-white text-black pl-4 pr-2 py-2 rounded-full hover:bg-black hover:text-white transition duration-300 mb-4">
                    Join Our Fundraisers
                    <i
                        class="fa-solid fa-arrow-right bg-black text-white p-3 rounded-full ml-3 transition duration-300 group-hover:bg-white group-hover:text-black"></i>
                </a>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-4" id="latestFundraising" data-aos="fade-up"
            data-aos-duration="1500">
            <!-- Latest donations will be injected here -->
        </div>

    </div>
</section>

<!-- <section>
        <div class="container mx-auto px-6 py-12">
            <div class="relative w-full">
                <video id="myVideo" class="w-full rounded-xl shadow-lg">
                    <source src="https://demo.gloriathemes.com/faun/demo/wp-content/uploads/2025/07/home-1-video.mp4"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <button id="playButton"
                    class="absolute inset-0 flex items-center justify-center text-red-800 text-5xl bg-black/40 rounded-xl transition duration-300 hover:bg-black/60">
                    <i
                        class="fa-solid fa-play p-4 bg-red-100 rounded-full flex items-center justify-center w-32 h-32 animate-pulse"></i>
                </button>
            </div>
        </div>
    </section> -->

<!-- quick donation -->
<section class="bg-[url('/assets/images/donate.webp')] bg-center bg-cover">
    <div class="bg-black bg-opacity-50 py-12">
        <div class="container mx-auto px-6 py-12 backdrop-blur-md rounded-2xl">
            <div class="grid grid-cols-1 grid-cols-1 md:grid-cols-2 lg:gap-6">
                <div data-aos="fade-right" data-aos-duration="1500">
                    <h4 class="text-red-200 mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8">
                        Every act of kindness counts.
                    </h4>
                    <h2
                        class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold mb-4 md:mb-6 lg:mb-6 xl:mb-6 2xl:mb-8 text-white">
                        Give now to bring comfort and care to Sri Lanka's elderly.
                    </h2>
                    <p class="text-gray-400 mb-12">
                        A quick donation can provide medicine, warm meals, and a helping hand to those who once gave
                        so much to our society.
                        Your compassion today can make their tomorrow brighter.
                    </p>
                </div>

                <div class="flex items-center justify-center w-full px-4 sm:px-0" data-aos="fade-left"
                    data-aos-duration="1500">
                    <form id="donationForm"
                        class="relative w-full max-w-xl mx-auto bg-white p-6 sm:p-8 rounded-2xl shadow-md overflow-hidden">

                        <!-- STEP 1: Select Amount -->
                        <div class="form-step active">
                            <h2 class="text-xl font-semibold mb-4 text-gray-800 text-center sm:text-left">Select
                                Your Donation Amount</h2>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4">
                                <label class="cursor-pointer">
                                    <input type="radio" name="donation_amount" value="1000" class="hidden peer">
                                    <div
                                        class="border-2 border-gray-300 peer-checked:border-red-600 peer-checked:bg-red-50 rounded-xl text-center py-3 font-medium transition">
                                        Rs. 1,000
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="donation_amount" value="2000" class="hidden peer">
                                    <div
                                        class="border-2 border-gray-300 peer-checked:border-red-600 peer-checked:bg-red-50 rounded-xl text-center py-3 font-medium transition">
                                        Rs. 2,000
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="donation_amount" value="5000" class="hidden peer">
                                    <div
                                        class="border-2 border-gray-300 peer-checked:border-red-600 peer-checked:bg-red-50 rounded-xl text-center py-3 font-medium transition">
                                        Rs. 5,000
                                    </div>
                                </label>

                                <label class="cursor-pointer col-span-2 sm:col-span-3">
                                    <input type="radio" name="donation_amount" value="custom" id="custom-option"
                                        class="hidden peer">
                                    <div
                                        class="border-2 border-gray-300 peer-checked:border-red-600 peer-checked:bg-red-50 rounded-xl text-center py-3 font-medium transition">
                                        Enter Custom Amount
                                    </div>
                                </label>

                                <div id="customAmountContainer" class="hidden col-span-2 sm:col-span-3">
                                    <input type="number" id="customAmount" name="custom_amount"
                                        placeholder="Enter your amount (Rs.)"
                                        class="w-full border-2 border-red-500 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-red-600 text-gray-700">
                                </div>
                            </div>
                            <div class="mt-6 text-center sm:text-right">
                                <button type="button"
                                    class="next-btn bg-red-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-red-700 transition w-full sm:w-auto">
                                    Next
                                </button>
                            </div>
                        </div>

                        <!-- STEP 2: Personal Details -->
                        <div class="form-step hidden">
                            <h2 class="text-xl font-semibold mb-4 text-gray-800 text-center sm:text-left">Your
                                Details</h2>
                            <div class="space-y-4">
                                <input type="text" name="name" placeholder="Full Name" required
                                    class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-red-600">
                                <input type="email" name="email" placeholder="Email Address" required
                                    class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-red-600">
                                <textarea name="description" placeholder="Write a short message..." rows="3"
                                    class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-red-600"></textarea>
                            </div>
                            <div class="mt-6 flex flex-col sm:flex-row justify-between gap-3 sm:gap-0">
                                <button type="button"
                                    class="prev-btn bg-gray-200 text-gray-700 font-semibold py-3 px-6 rounded-full hover:bg-gray-300 w-full sm:w-auto">
                                    Previous
                                </button>
                                <button type="submit"
                                    class="bg-red-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-red-700 w-full sm:w-auto">
                                    Donate Now
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <script>
                    $(document).ready(function () {
                        const $steps = $(".form-step");
                        let currentStep = 0;

                        // --- 1. HANDLE CUSTOM AMOUNT VISIBILITY ---
                        $('input[name="donation_amount"]').on('change', function () {
                            if ($(this).val() === 'custom') {
                                $('#customAmountContainer').removeClass('hidden').find('input').focus();
                            } else {
                                $('#customAmountContainer').addClass('hidden');
                            }
                        });

                        // --- 2. MULTI-STEP NAVIGATION ---

                        // Next Button Click
                        $(".next-btn").on("click", function () {
                            if (validateStep(currentStep)) {
                                $steps.eq(currentStep).addClass("hidden");
                                currentStep++;
                                $steps.eq(currentStep).removeClass("hidden");
                            }
                        });

                        // Previous Button Click
                        $(".prev-btn").on("click", function () {
                            $steps.eq(currentStep).addClass("hidden");
                            currentStep--;
                            $steps.eq(currentStep).removeClass("hidden");
                        });

                        // Simple Validation Function
                        function validateStep(stepIndex) {
                            let isValid = true;
                            const $currentStep = $steps.eq(stepIndex);

                            // Step 1: Amount Validation
                            if (stepIndex === 0) {
                                const selectedRadio = $('input[name="donation_amount"]:checked').val();
                                if (!selectedRadio) {
                                    $('<div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-20">Please select a donation amount.</div>').appendTo('body').delay(3000).fadeOut(function () { $(this).remove(); });
                                    isValid = false;
                                } else if (selectedRadio === 'custom') {
                                    const customAmount = $('#customAmount').val();
                                    if (!customAmount || customAmount <= 0) {
                                        $('<div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-20">Please enter a valid custom amount.</div>').appendTo('body').delay(3000).fadeOut(function () { $(this).remove(); });
                                        isValid = false;
                                    }
                                }
                            }

                            // Step 2: Personal Details Validation
                            if (stepIndex === 1) {
                                const name = $('input[name="name"]').val().trim();
                                const email = $('input[name="email"]').val().trim();
                                if (!name || !email) {
                                    $('<div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-20">Please fill in your name and email.</div>').appendTo('body').delay(3000).fadeOut(function () { $(this).remove(); });
                                    isValid = false;
                                }
                            }

                            return isValid;
                        }

                        // --- 3. FORM SUBMISSION & PAYSAFE CONNECTION ---
                        $("#donationForm").on("submit", function (e) {
                            e.preventDefault();

                            // 1. Get Selected Amount
                            let amount = 0;
                            const selectedRadio = $('input[name="donation_amount"]:checked').val();

                            if (selectedRadio === 'custom') {
                                amount = parseFloat($('#customAmount').val());
                            } else {
                                amount = parseFloat(selectedRadio);
                            }

                            if (!amount || amount <= 0) {
                                $('<div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg">Invalid donation amount.</div>').appendTo('body').delay(3000).fadeOut(function () { $(this).remove(); });
                                return;
                            }

                            // 2. Get User Details
                            const name = $('input[name="name"]').val().trim() || "Anonymous";
                            const email = $('input[name="email"]').val().trim();
                            // We do not use card details here because PaySafe handles that securely on the redirect page.

                            // 3. Prepare PaySafe Parameters
                            const currency = "LKR";
                            const description = "Donation"; // Or use $('textarea[name="description"]').val()

                            // Generate Unique Order ID
                            const now = new Date();
                            const datePart = now.getFullYear().toString().slice(-2) +
                                String(now.getMonth() + 1).padStart(2, "0") +
                                String(now.getDate()).padStart(2, "0");
                            const randomPart = Math.floor(Math.random() * 9000) + 1000;
                            const cleanName = name.replace(/[^a-zA-Z0-9]/g, "").toUpperCase().slice(0, 6);
                            const orderId = `SW${datePart}${cleanName}${randomPart}`;

                            // 4. Construct API URL
                            // Encoding parameters to ensure URL safety
                            const paymentUrl = `https://helpage.go.digitable.io/paysafe/sey?currency=${currency}&amount=${amount}&orderId=${orderId}&description=${encodeURIComponent(description)}&customerName=${encodeURIComponent(name)}&customerEmail=${encodeURIComponent(email)}`;

                            console.log("Redirecting to:", paymentUrl);

                            // 5. UX: Change Button Text & Redirect
                            const $btn = $(this).find('button[type="submit"]');
                            $btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Processing...');

                            window.location.href = paymentUrl;
                        });
                    });
                </script>
            </div>
        </div>
</section>

<!-- whats new -->
<section>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div data-aos="fade-right" data-aos-duration="1500">
                <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold mb-12">What’s New
                </h2>
                <p class="text-gray-700 mb-12">
                    Discover the latest stories, initiatives, and milestones shaping our journey to care for Sri
                    Lanka's elderly.
                </p>
            </div>
            <div data-aos="fade-left" data-aos-duration="1500">
                <p class="text-gray-700 mb-4">
                    From free cataract surgery camps to elder home renovation projects and medical outreach
                    programs, we’re making steady progress toward a kinder tomorrow.
                    Each event, each effort, and each volunteer helps us extend dignity and hope to those who need
                    it most.
                </p>
                <a href="/w-donation"
                    class="group inline-flex items-center border-2 border-black bg-white text-black pl-4 pr-2 py-2 rounded-full hover:bg-black hover:text-white transition duration-300 mb-4">
                    View More
                    <i
                        class="fa-solid fa-arrow-right bg-black text-white p-3 rounded-full ml-3 transition duration-300 group-hover:bg-white group-hover:text-black"></i>
                </a>
            </div>
        </div>

        <div class="w-full px-4 md:px-8 py-12 bg-white">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up"
                data-aos-duration="1500">

                <!-- Video Card 1 -->
                <div class="bg-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="aspect-video w-full rounded-xl overflow-hidden mb-4">
                        <lite-youtube videoid="rOjg1F_vQKg" class="w-full h-full object-cover rounded-t-lg shadow-lg"
                            title="HelpAge Sri Lanka Video 1">
                        </lite-youtube>

                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap items-center gap-4 mb-3">
                            <p class="text-gray-600 text-sm">
                                by <a href="#"
                                    class="font-semibold text-gray-900 hover:text-red-600 transition-colors">HelpAge Sri
                                    Lanka</a>
                            </p>
                            <p class="text-gray-500 text-sm">Mar 2, 2023</p>
                            <p class="text-gray-500 text-sm">1:43 Min</p>
                        </div>

                        <h3 class="font-semibold text-lg md:text-xl text-gray-900 mb-3 line-clamp-2">
                            ஓட்டமாவடியில் முதியோருக்கு உலர் உணவு
                        </h3>

                        <p class="text-gray-700 text-sm leading-relaxed">
                            HelpAge Sri Lanka conducted Economic Crisis Response Project in Sri Lanka with the support
                            of the HelpAge International Global Emergency Fund. Published in Speedsam TV.
                        </p>
                    </div>

                </div>

                <!-- Video Card 2 -->
                <div class="bg-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="aspect-video w-full rounded-xl overflow-hidden mb-4">

                        <lite-youtube videoid="3PVYidddW8s" class="w-full h-full object-cover rounded-t-lg shadow-lg"
                            title="HelpAge Sri Lanka Video 2"></lite-youtube>
                    </div>

                    <div class="p-6">
                        <div class="flex flex-wrap items-center gap-4 mb-3">
                            <p class="text-gray-600 text-sm">
                                by <a href="#"
                                    class="font-semibold text-gray-900 hover:text-red-600 transition-colors">HelpAge Sri
                                    Lanka</a>
                            </p>
                            <p class="text-gray-500 text-sm">Mar 2, 2023</p>
                            <p class="text-gray-500 text-sm">0:44 Min</p>
                        </div>

                        <h3 class="font-semibold text-lg md:text-xl text-gray-900 mb-3 line-clamp-2">
                            HelpAge Sri Lanka Eye Hospital Cataract Beneficiary
                        </h3>

                        <p class="text-gray-700 text-sm leading-relaxed">
                            Planning is powerful. Discover how collaboration, energy, and purpose-driven teamwork
                            turn ideas into real impact in our volunteer programs.
                        </p>
                    </div>

                </div>

                <!-- Video Card 3 -->
                <div class="bg-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="aspect-video w-full rounded-xl overflow-hidden mb-4">

                        <lite-youtube videoid="GdWkEVRVyTE" class="w-full h-full object-cover rounded-t-lg shadow-lg"
                            title="HelpAge Sri Lanka Video 3"></lite-youtube>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap items-center gap-4 mb-3">
                            <p class="text-gray-600 text-sm">
                                by <a href="#"
                                    class="font-semibold text-gray-900 hover:text-red-600 transition-colors">Helena
                                    Wallin</a>
                            </p>
                            <p class="text-gray-500 text-sm">5 months ago</p>
                            <p class="text-gray-500 text-sm">0:33 Min</p>
                        </div>

                        <h3 class="font-semibold text-lg md:text-xl text-gray-900 mb-3 line-clamp-2">
                            HelpAge Sri Lanka Eye Hospital Cataract Beneficiary
                        </h3>

                        <p class="text-gray-700 text-sm leading-relaxed">
                            HelpAge Sri Lanka Programmes - Social Media Communication
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <style>
            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>


    </div>
</section>

<?php include 'layouts/footer.php'; ?>