<style>
    /* 1. Initial State (Hidden & Moved Down) */
    .animate-ready {
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.8s ease-out;
    }

    /* 2. Active State (Visible & Original Position) */
    .animate-active {
        opacity: 1;
        transform: translateY(0);
    }

    /* 3. Delays for sequential animation */
    .delay-100 {
        transition-delay: 0.1s;
    }

    .delay-200 {
        transition-delay: 0.2s;
    }

    .delay-300 {
        transition-delay: 0.3s;
    }

    .delay-400 {
        transition-delay: 0.4s;
    }
</style>

<section class="relative min-h-screen">
    <div id="hero-carousel" class="relative w-full min-h-screen" data-carousel="slide">
        <div class="relative h-full overflow-hidden min-h-screen">

            <div class="carousel-item hidden min-h-screen" data-carousel-item>
                <img src="/assets/images/hero.webp" class="absolute block w-full h-full object-cover" alt="Hero">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center py-8 md:py-0">
                    <div class="container mx-auto px-4 sm:px-6 text-center">
                        <div class="flex justify-center items-center mb-4 md:mb-8 animate-ready">
                            <div
                                class="w-28 h-28 md:w-32 md:h-32 2xl:w-48 2xl:h-48 rounded-full bg-white/20 backdrop-blur-xl flex justify-center items-center shadow-2xl border border-white/30">
                                <img src="/assets/images/logo-sri-lanka.webp" alt="Logo"
                                    class="w-20 h-20 md:w-28 md:h-28 2xl:w-32 2xl:h-32 object-contain" />
                            </div>
                        </div>
                        <h1
                            class="animate-ready delay-100 text-2xl sm:text-3xl md:text-5xl 2xl:text-7xl font-bold text-white mt-4 md:mt-8 mb-4 md:mb-6 leading-tight mx-8 md:mx-4">
                            Supporting Elderly Citizens in Sri Lanka
                        </h1>
                        <p
                            class="animate-ready delay-200 text-sm sm:text-base md:text-lg lg:text-xl text-white mb-6 md:mb-12 max-w-3xl mx-auto leading-relaxed px-2">
                            Join us in our mission to improve the quality of life for senior citizens across the
                            country.
                        </p>
                        <div class="animate-ready delay-300">
                            <a href="/w-donation"
                                class="group inline-flex items-center bg-white text-black pl-4 pr-2 py-2 rounded-full hover:bg-black hover:text-white transition duration-300 mb-4">
                                Get Started
                                <i
                                    class="fa-solid fa-arrow-right bg-black text-white p-3 rounded-full ml-3 transition duration-300 group-hover:bg-white group-hover:text-black"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item hidden min-h-screen" data-carousel-item>
                <img src="/assets/images/1.webp" class="absolute block w-full h-full object-cover" alt="Elderly Care">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center py-8 md:py-0">
                    <div class="container mx-auto px-4 sm:px-6 text-center">
                        <div class="flex justify-center items-center mb-4 md:mb-8 animate-ready">
                            <div
                                class="w-28 h-28 md:w-32 md:h-32 2xl:w-48 2xl:h-48 rounded-full bg-white/20 backdrop-blur-xl flex justify-center items-center shadow-2xl border border-white/30">
                                <img src="/assets/images/logo-sri-lanka.webp" alt="Logo"
                                    class="w-20 h-20 md:w-28 md:h-28 2xl:w-32 2xl:h-32 object-contain" />
                            </div>
                        </div>
                        <h2
                            class="animate-ready delay-100 text-xl sm:text-2xl md:text-4xl 2xl:text-6xl font-bold text-white mt-4 md:mt-8 mb-4 md:mb-6 leading-tight">
                            Healthcare & Medical Support
                        </h2>
                        <p
                            class="animate-ready delay-200 text-sm sm:text-base md:text-lg lg:text-xl text-white mb-4 md:mb-8 max-w-2xl mx-auto leading-relaxed px-2">
                            Providing essential medical care, cataract surgeries, and health screenings for our elderly
                            community members.
                        </p>
                        <div
                            class="animate-ready delay-300 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 sm:gap-3 md:gap-4 max-w-4xl mx-auto mb-4 md:mb-8">
                            <div
                                class="bg-white/20 backdrop-blur-sm rounded-lg p-2 sm:p-3 md:p-4 border border-white/30 mx-8 md:mx-2">
                                <i class="fa-solid fa-eye text-lg sm:text-xl md:text-2xl text-white mb-1 sm:mb-2"></i>
                                <p class="text-white font-semibold text-xs sm:text-sm md:text-base">Cataract Surgeries
                                </p>
                            </div>
                            <div
                                class="bg-white/20 backdrop-blur-sm rounded-lg p-2 sm:p-3 md:p-4 border border-white/30 mx-8 md:mx-2">
                                <i
                                    class="fa-solid fa-stethoscope text-lg sm:text-xl md:text-2xl text-white mb-1 sm:mb-2"></i>
                                <p class="text-white font-semibold text-xs sm:text-sm md:text-base">Health Checkups</p>
                            </div>
                            <div
                                class="bg-white/20 backdrop-blur-sm rounded-lg p-2 sm:p-3 md:p-4 border border-white/30 mx-8 md:mx-2">
                                <i class="fa-solid fa-pills text-lg sm:text-xl md:text-2xl text-white mb-1 sm:mb-2"></i>
                                <p class="text-white font-semibold text-xs sm:text-sm md:text-base">Medicine Support</p>
                            </div>
                        </div>
                        <div class="animate-ready delay-400">
                            <a href="/w-donation"
                                class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300 mt-12 md:mt-24">
                                Support Healthcare
                                <i
                                    class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item hidden min-h-screen" data-carousel-item>
                <img src="/assets/images/about_us_main_banner.png" class="absolute block w-full h-full object-cover"
                    alt="About Us">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center py-8 md:py-0">
                    <div class="container mx-auto px-4 sm:px-6 text-center">
                        <div class="flex justify-center items-center mb-4 md:mb-8 animate-ready">
                            <div
                                class="w-28 h-28 md:w-32 md:h-32 2xl:w-48 2xl:h-48 rounded-full bg-white/20 backdrop-blur-xl flex justify-center items-center shadow-2xl border border-white/30">
                                <img src="/assets/images/logo-sri-lanka.webp" alt="Logo"
                                    class="w-20 h-20 md:w-28 md:h-28 2xl:w-32 2xl:h-32 object-contain" />
                            </div>
                        </div>
                        <h2
                            class="animate-ready delay-100 text-xl sm:text-2xl md:text-4xl 2xl:text-6xl font-bold text-white mt-4 md:mt-8 mb-4 md:mb-6 leading-tight">
                            Nutrition & Daily Meals
                        </h2>
                        <p
                            class="animate-ready delay-200 text-sm sm:text-base md:text-lg lg:text-xl text-white mb-4 md:mb-8 max-w-2xl mx-auto leading-relaxed px-2">
                            Ensuring no elder goes hungry with our daily meal programs and nutritional support
                            initiatives.
                        </p>
                        <div
                            class="animate-ready delay-300 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 sm:gap-3 md:gap-4 max-w-4xl mx-auto mb-4 md:mb-8">
                            <div
                                class="bg-white/20 backdrop-blur-sm rounded-lg p-2 sm:p-3 md:p-4 border border-white/30 mx-8 md:mx-2">
                                <i class="fa-solid fa-users text-lg sm:text-xl md:text-2xl text-white mb-1 sm:mb-2"></i>
                                <p class="text-white font-semibold text-xs sm:text-sm md:text-base">500+ elders served
                                    daily</p>
                            </div>
                            <div
                                class="bg-white/20 backdrop-blur-sm rounded-lg p-2 sm:p-3 md:p-4 border border-white/30 mx-8 md:mx-2">
                                <i class="fa-solid fa-heart text-lg sm:text-xl md:text-2xl text-white mb-1 sm:mb-2"></i>
                                <p class="text-white font-semibold text-xs sm:text-sm md:text-base">15,000+ meals
                                    monthly</p>
                            </div>
                            <div
                                class="bg-white/20 backdrop-blur-sm rounded-lg p-2 sm:p-3 md:p-4 border border-white/30 mx-8 md:mx-2">
                                <i
                                    class="fa-solid fa-hand-holding-heart text-lg sm:text-xl md:text-2xl text-white mb-1 sm:mb-2"></i>
                                <p class="text-white font-semibold text-xs sm:text-sm md:text-base">25 communities
                                    reached</p>
                            </div>
                        </div>
                        <div class="animate-ready delay-400">
                            <a href="/w-donation"
                                class="group inline-flex items-center bg-red-600 text-white pl-4 pr-2 py-2 rounded-full hover:bg-white hover:text-black transition duration-300 mt-12 md:mt-24">
                                Sponsor Meals
                                <i
                                    class="fa-solid fa-arrow-right bg-white text-red-600 p-3 rounded-full ml-3 transition duration-300 group-hover:bg-red-600 group-hover:text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <button data-carousel-prev
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-2 sm:px-4 md:px-6 cursor-pointer group focus:outline-none">
            <span
                class="inline-flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full bg-white/40 hover:bg-white/60 transform hover:scale-110 transition-all duration-300">
                <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 text-white" fill="none" viewBox="0 0 6 10"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        d="M5 1 1 5l4 4" />
                </svg>
            </span>
        </button>
        <button data-carousel-next
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-2 sm:px-4 md:px-6 cursor-pointer group focus:outline-none">
            <span
                class="inline-flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full bg-white/40 hover:bg-white/60 transform hover:scale-110 transition-all duration-300">
                <svg class="w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 text-white" fill="none" viewBox="0 0 6 10"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        d="m1 9 4-4-4-4" />
                </svg>
            </span>
        </button>
    </div>
</section>

<script>
    $(document).ready(function () {
        const $carousel = $('#hero-carousel');
        const $slides = $carousel.find('[data-carousel-item]');
        let currentIndex = 0;
        let interval = null;
        let isTransitioning = false;

        function showSlide(index) {
            if (isTransitioning || index === currentIndex) return;
            isTransitioning = true;

            const $currentSlide = $slides.eq(currentIndex);
            const $nextSlide = $slides.eq(index);

            // 1. Remove animation class from current slide so it's ready for next time
            $currentSlide.find('.animate-ready').removeClass('animate-active');

            // 2. Fade out current
            $currentSlide.fadeOut(600, function () {
                // 3. Fade in new
                $nextSlide.fadeIn(600, function () {
                    // 4. Trigger animation on new slide
                    $(this).find('.animate-ready').addClass('animate-active');
                    isTransitioning = false;
                });
                currentIndex = index;
            });
        }

        function nextSlide() {
            let newIndex = (currentIndex + 1) % $slides.length;
            showSlide(newIndex);
        }

        function prevSlide() {
            let newIndex = (currentIndex - 1 + $slides.length) % $slides.length;
            showSlide(newIndex);
        }

        function resetInterval() {
            clearInterval(interval);
            interval = setInterval(nextSlide, 5000);
        }

        // --- Init ---
        $slides.hide();
        const $firstSlide = $slides.eq(0);
        $firstSlide.show();

        // Animate first slide immediately
        setTimeout(() => {
            $firstSlide.find('.animate-ready').addClass('animate-active');
        }, 100);

        interval = setInterval(nextSlide, 5000);

        // --- Controls ---
        $carousel.find('[data-carousel-next]').on('click', function (e) {
            e.preventDefault();
            nextSlide();
            resetInterval();
        });

        $carousel.find('[data-carousel-prev]').on('click', function (e) {
            e.preventDefault();
            prevSlide();
            resetInterval();
        });

        // Keyboard Support
        $(document).on('keydown', function (e) {
            if (e.key === 'ArrowLeft') { prevSlide(); resetInterval(); }
            if (e.key === 'ArrowRight') { nextSlide(); resetInterval(); }
        });
    });
</script>