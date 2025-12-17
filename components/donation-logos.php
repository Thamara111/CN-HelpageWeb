<!-- donation logos -->
<section class="py-16">
    <div class="container mx-auto px-6">
        <div class="relative">
            <!-- Carousel Container -->
            <div id="partners-carousel" class="flex space-x-6 overflow-hidden">
                <!-- Partner Item -->
                <a href="https://www.who.int/" target="_blank" class="group flex-none flex justify-center items-center p-4 bg-white rounded-2xl hover:shadow-lg 
                transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative flex justify-center items-center">
                        <img src="/assets/images/who.webp" alt="World Health Organization" class="max-h-20 object-contain transition-all duration-300 
                        group-hover:scale-105 group-hover:brightness-110">
                    </div>
                </a>

                <a href="https://www.unfpa.org/" target="_blank" class="group flex-none flex justify-center items-center p-4 bg-white rounded-2xl hover:shadow-lg 
                transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative flex justify-center items-center">
                        <img src="/assets/images/unicef.webp" alt="UNFPA" class="max-h-14 object-contain transition-all duration-300 
                        group-hover:scale-105 group-hover:brightness-110">
                        <div class="absolute inset-0 bg-green-500 opacity-0 group-hover:opacity-5 rounded-lg 
                        transition-opacity duration-300"></div>
                    </div>
                </a>

                <a href="https://www.helpage.org/" target="_blank" class="group flex-none flex justify-center items-center p-4 bg-white rounded-2xl hover:shadow-lg 
                transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative flex justify-center items-center">
                        <img src="/assets/images/helpage-int.webp" alt="helpage international" class="max-h-14 object-contain transition-all duration-300 
                        group-hover:scale-105 group-hover:brightness-110">
                        <div class="absolute inset-0 bg-purple-500 opacity-0 group-hover:opacity-5 rounded-lg 
                        transition-opacity duration-300"></div>
                    </div>
                </a>

                <a href="https://www.helpage.de/" target="_blank" class="group flex-none flex justify-center items-center p-4 bg-white rounded-2xl hover:shadow-lg 
                transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative flex justify-center items-center">
                        <img src="/assets/images/had-logo-kleint.webp" alt="HAD" class="max-h-14 object-contain transition-all duration-300 
                        group-hover:scale-105 group-hover:brightness-110">
                        <div class="absolute inset-0 bg-purple-500 opacity-0 group-hover:opacity-5 rounded-lg 
                        transition-opacity duration-300"></div>
                    </div>
                </a>

                <a href="https://tvsupreme.lk/" target="_blank" class="group flex-none flex justify-center items-center p-4 bg-white rounded-2xl hover:shadow-lg 
                transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative flex justify-center items-center">
                        <img src="/assets/images/Supreme_tv.webp" alt="Supreme TV" class="max-h-14 object-contain transition-all duration-300 
                        group-hover:scale-105 group-hover:brightness-110">
                        <div class="absolute inset-0 bg-red-500 opacity-0 group-hover:opacity-5 rounded-lg 
                        transition-opacity duration-300"></div>
                    </div>
                </a>

                <a href="https://supreme.lk/" target="_blank" class="group flex-none flex justify-center items-center p-4 bg-white rounded-2xl hover:shadow-lg 
                transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative flex justify-center items-center">
                        <img src="/assets/images/supream-g.webp" alt="Supreme G" class="max-h-14 object-contain transition-all duration-300 
                        group-hover:scale-105 group-hover:brightness-110">
                        <div class="absolute inset-0 bg-orange-500 opacity-0 group-hover:opacity-5 rounded-lg 
                        transition-opacity duration-300"></div>
                    </div>
                </a>

                <a href="https://supreme.lk/csr-2/" target="_blank" class="group flex-none flex justify-center items-center p-4 bg-white rounded-2xl hover:shadow-lg 
                transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative flex justify-center items-center">
                        <img src="/assets/images/supream-care.webp" alt="Supreme Care" class="max-h-14 object-contain transition-all duration-300 
                        group-hover:scale-105 group-hover:brightness-110">
                        <div class="absolute inset-0 bg-teal-500 opacity-0 group-hover:opacity-5 rounded-lg 
                        transition-opacity duration-300"></div>
                    </div>
                </a>

                <a href="https://friendsdiaper.in/" target="_blank" class="group flex-none flex justify-center items-center p-4 bg-white rounded-2xl hover:shadow-lg 
                transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative flex justify-center items-center">
                        <img src="/assets/images/Friends-Logo.webp" alt="Friends" class="max-h-14 object-contain transition-all duration-300 
                        group-hover:scale-105 group-hover:brightness-110">
                        <div class="absolute inset-0 bg-pink-500 opacity-0 group-hover:opacity-5 rounded-lg 
                        transition-opacity duration-300"></div>
                    </div>
                </a>
            </div>


        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('#partners-carousel').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            infinite: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: { slidesToShow: 4 }
                },
                {
                    breakpoint: 768,
                    settings: { slidesToShow: 3 }
                },
                {
                    breakpoint: 480,
                    settings: { slidesToShow: 2 }
                }
            ]
        });
    });
</script>