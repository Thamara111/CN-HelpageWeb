<!-- blur part (mobile safe: does not block taps) -->
<div class="fixed inset-x-0 bottom-0 h-[3rem] md:h-[6rem]
            bg-gradient-to-t from-white via-white/60 to-transparent
            backdrop-blur-full rounded-t-6xl shadow-lg
            z-30 pointer-events-none pb-[env(safe-area-inset-bottom)]"></div>

<!-- header -->
<header
    class="fixed inset-x-0 bottom-0 md:bottom-4 z-40 pb-[env(safe-area-inset-bottom)] [transform:translateZ(0)] ">
    <div class="mx-auto w-full md:w-[66%] xl:w-[50%] 2xl:w-[35%] flex justify-center items-center py-2 sm:py-3 px-4 sm:px-6 bg-gradient-to-r from-orange-400 to-red-600 shadow-md rounded-t-2xl md:rounded-full">
        <nav class="w-full relative">
            <ul
                class="flex flex-wrap justify-center items-center gap-3 sm:gap-6 text-sm sm:text-base md:text-lg font-medium text-white text-center">

                <!-- Programs -->
                <li class="relative group" id="moreMenuPrograms">
                    <a id="menuPrograms"
                        class="cursor-pointer relative flex flex-col justify-center items-center md:inline-block text-xs md:text-md hover:text-black transition-colors duration-200">
                        <i class="fa-solid fa-diagram-project inline-block md:hidden mb-1 text-white text-lg"></i>
                        <span class="text-xs md:text-base">Programs</span>
                    </a>

                    <!-- Desktop Dropdown -->
                    <div id="desktopMenuPrograms"
                        class="hidden absolute bottom-16 left-1/2 transform -translate-x-1/2 bg-white text-black rounded-2xl shadow-2xl border border-gray-200 w-[42rem] h-[32rem] overflow-hidden z-50 transition-all duration-300 opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100">
                        <div class="flex h-full">
                            <div class="w-1/2 relative bg-gradient-to-br from-red-50 to-orange-50">
                                <img src="./assets/images/help3.JPG" class="w-full h-full object-cover"
                                    alt="HelpAge Sri Lanka" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">HelpAge Sri Lanka</h3>
                                    <p class="text-white/90 text-sm">Supporting Elderly Citizens Nationwide</p>
                                </div>
                            </div>

                            <div class="w-1/2 bg-white flex flex-col justify-center">
                                <ul class="space-y-2 w-full max-w-xs mx-auto">
                                    <li>
                                        <a href="/programs-health"
                                            class="flex items-center w-full justify-start px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-heart-pulse mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Health &amp; Medical</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/programs-community-elder-care"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-people-roof mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Community &amp; Elder Care</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/programs-emergency-humanitarian"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-handshake-angle mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Emergency &amp; Humanitarian</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/programs-education-awareness"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-graduation-cap mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Education &amp; Awareness</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/programs-fundraising"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-hand-holding-heart mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Fundraising &amp; Community Relations</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/programs-internal-events"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-people-carry-box mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Human Resources &amp; Internal Events</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/programs-special-projects"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-people-carry-box mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Special Projects</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Dropdown (centered above navbar) -->
                    <ul id="mobileMenuPrograms"
                        class="hidden fixed bottom-24 left-1/2 -translate-x-1/2 bg-white text-black rounded-2xl shadow-2xl flex-col py-4 w-56 text-center md:hidden z-50 border border-gray-200">
                        <li>
                            <a href="/programs-health"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-heart-pulse mr-3 text-red-500"></i> Health &amp; Medical
                            </a>
                        </li>
                        <li>
                            <a href="/programs-community-elder-care"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-people-roof mr-3 text-red-500"></i> Community &amp; Elder Care
                            </a>
                        </li>
                        <li>
                            <a href="/programs-emergency-humanitarian"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-handshake-angle mr-3 text-red-500"></i> Emergency &amp;
                                Humanitarian
                            </a>
                        </li>
                        <li>
                            <a href="/programs-education-awareness"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-graduation-cap mr-3 text-red-500"></i> Education &amp; Awareness
                            </a>
                        </li>
                        <li>
                            <a href="/programs-fundraising"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-hand-holding-heart mr-3 text-red-500"></i> Fundraising &amp;
                                Community
                            </a>
                        </li>
                        <li>
                            <a href="/programs-internal-events"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-people-carry-box mr-3 text-red-500"></i> HR &amp; Internal Events
                            </a>
                        </li>
                        <li>
                            <a href="/programs-special-projects"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-people-carry-box mr-3 text-red-500"></i> Special Projects
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Services -->
                <li class="relative group" id="moreMenuServices">
                    <a id="menuServices"
                        class="cursor-pointer relative flex flex-col justify-center items-center md:inline-block text-xs md:text-md hover:text-black transition-colors duration-200">
                        <i class="fa-solid fa-stethoscope inline-block md:hidden mb-1 text-white text-lg"></i>
                        <span class="text-xs md:text-base">Services</span>
                    </a>

                    <!-- Desktop Dropdown -->
                    <div id="desktopMenuServices"
                        class="hidden absolute bottom-16 left-1/2 transform -translate-x-1/2 bg-white text-black rounded-2xl shadow-2xl border border-gray-200 w-[42rem] h-[28rem] overflow-hidden z-50 transition-all duration-300 opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100">
                        <div class="flex h-full">
                            <div class="w-1/2 relative bg-gradient-to-br from-red-50 to-orange-50">
                                <img src="./assets/images/help3.JPG" class="w-full h-full object-cover"
                                    alt="HelpAge Sri Lanka" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">HelpAge Sri Lanka</h3>
                                    <p class="text-white/90 text-sm">Supporting Elderly Citizens Nationwide</p>
                                </div>
                            </div>

                            <div class="w-1/2 bg-white flex flex-col justify-center">
                                <ul class="space-y-2 w-full max-w-xs mx-auto">
                                    <li>
                                        <a href="/service-mobile-medical-unit"
                                            class="flex items-center w-full justify-start px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-heart-pulse mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Mobile Medical Unit</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/service-distribution-of-disability-equipment"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-people-roof mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Distribution of Disability Equipment</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/service-eye-hospital"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-handshake-angle mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Eye Hospital</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/service-ayurvedic-center"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-graduation-cap mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Ayurvedic Center</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/service-day-center"
                                            class="flex items-center px-6 py-3 hover:bg-red-50 rounded-lg text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent hover:border-red-500 text-left">
                                            <i
                                                class="fa-solid fa-hand-holding-heart mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                            <span>Day center</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Dropdown (centered above navbar) -->
                    <ul id="mobileMenuServices"
                        class="hidden fixed bottom-24 left-1/2 -translate-x-1/2 bg-white text-black rounded-2xl shadow-2xl flex-col py-4 w-56 text-center md:hidden z-50 border border-gray-200">
                        <li>
                            <a href="/service-mobile-medical-unit"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-heart-pulse mr-3 text-red-500"></i><span> Mobile Medical
                                    Unit</span>
                            </a>
                        </li>
                        <li>
                            <a href="/service-distribution-of-disability-equipment"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-people-roof mr-3 text-red-500"></i><span> Distribution of
                                    Disability Equipment</span>
                            </a>
                        </li>
                        <li>
                            <a href="/service-eye-hospital"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-handshake-angle mr-3 text-red-500"></i> <span>Eye Hospital</span>
                            </a>
                        </li>
                        <li>
                            <a href="/service-ayurvedic-center"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-graduation-cap mr-3 text-red-500"></i> <span>Ayurvedic
                                    Center</span>
                            </a>
                        </li>
                        <li>
                            <a href="/service-day-center"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 text-left">
                                <i class="fa-solid fa-hand-holding-heart mr-3 text-red-500"></i> <span>Day Center</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Donate Now Button -->
                <li>
                    <button
                        class="text-white bg-red-700 px-4 sm:px-6 py-2 sm:py-3 rounded-full hover:bg-red-800 hover:text-white transition-all duration-300 text-sm sm:text-base flex items-center justify-center gap-2 transform scale-105 hover:scale-110 shadow-xl"
                        onclick="window.location.href='/w-donation'">
                        <span class="hidden md:inline">Help Now</span>
                        <i class="fa-solid fa-heart md:hidden animate-pulse text-red-100 text-lg"></i>
                    </button>
                </li>

                <!-- Fundraising -->
                <li>
                    <a href="/w-fundraising"
                        class="relative flex flex-col justify-center items-center md:inline-block text-xs md:text-md hover:text-black transition-colors duration-200">
                        <i class="fa-solid fa-hand-holding-heart inline-block md:hidden mb-1 text-white text-lg"></i>
                        <span class="text-xs md:text-base">Fundraising</span>
                    </a>
                </li>

                <!-- More -->
                <li class="relative group" id="moreMenuMore">
                    <a id="menuMore"
                        class="cursor-pointer relative flex flex-col justify-center items-center md:inline-block text-xs md:text-md hover:text-black transition-colors duration-200">
                        <i class="fa-solid fa-ellipsis-h inline-block md:hidden mb-1 text-white text-lg"></i>
                        <span class="text-xs md:text-base">More</span>
                    </a>

                    <!-- Desktop Menu -->
                    <div id="desktopMenu"
                        class="hidden absolute bottom-16 left-1/2 transform -translate-x-1/2 bg-white text-black rounded-2xl shadow-2xl border border-gray-200 w-[42rem] h-[32rem] overflow-hidden z-50 transition-all duration-300 opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100">
                        <div class="flex h-full">
                            <div class="w-1/2 relative bg-gradient-to-br from-red-50 to-orange-50">
                                <img src="./assets/images/manu.JPG" class="w-full h-full object-cover"
                                    alt="HelpAge Sri Lanka" />
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">HelpAge Sri Lanka</h3>
                                    <p class="text-white/90 text-sm">Supporting Elderly Citizens Nationwide</p>
                                </div>
                            </div>

                            <div class="w-1/2 bg-white flex flex-col">
                                <div class="flex-1 flex items-center justify-center py-6">
                                    <ul class="space-y-2 w-full max-w-xs">
                                        <li>
                                            <a href="/"
                                                class="flex items-center px-6 py-3 hover:bg-red-50 text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group rounded-lg border-l-4 border-transparent hover:border-red-500">
                                                <i
                                                    class="fa-solid fa-house mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/about"
                                                class="flex items-center px-6 py-3 hover:bg-red-50 text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group rounded-lg border-l-4 border-transparent hover:border-red-500">
                                                <i
                                                    class="fa-solid fa-info-circle mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                                <span>About Us</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/blogs"
                                                class="flex items-center px-6 py-3 hover:bg-red-50 text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group rounded-lg border-l-4 border-transparent hover:border-red-500">
                                                <i
                                                    class="fa-solid fa-blog mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                                <span>Blogs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/volunteering"
                                                class="flex items-center px-6 py-3 hover:bg-red-50 text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group rounded-lg border-l-4 border-transparent hover:border-red-500">
                                                <i
                                                    class="fa-solid fa-handshake-angle mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                                <span>Volunteering</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/publications"
                                                class="flex items-center px-6 py-3 hover:bg-red-50 text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group rounded-lg border-l-4 border-transparent hover:border-red-500">
                                                <i
                                                    class="fa-solid fa-handshake-angle mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                                <span>Publications</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/faqs"
                                                class="flex items-center px-6 py-3 hover:bg-red-50 text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group rounded-lg border-l-4 border-transparent hover:border-red-500">
                                                <i
                                                    class="fa-solid fa-circle-question mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                                <span>FAQs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/contact"
                                                class="flex items-center px-6 py-3 hover:bg-red-50 text-base font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group rounded-lg border-l-4 border-transparent hover:border-red-500">
                                                <i
                                                    class="fa-solid fa-phone mr-4 text-red-500 group-hover:scale-110 transition-transform duration-200"></i>
                                                <span>Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Menu (centered above navbar) -->
                    <ul id="mobileMenu"
                        class="hidden fixed bottom-24 left-1/2 -translate-x-1/2 bg-white text-black rounded-2xl shadow-2xl flex-col py-4 w-56 text-center md:hidden z-50 border border-gray-200">
                        <li>
                            <a href="/"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group">
                                <i class="fa-solid fa-house mr-3 text-red-500"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="/about"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group">
                                <i class="fa-solid fa-info-circle mr-3 text-red-500"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="/blogs"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group">
                                <i class="fa-solid fa-blog mr-3 text-red-500"></i>
                                <span>Blogs</span>
                            </a>
                        </li>
                        <li>
                            <a href="/volunteering"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group">
                                <i class="fa-solid fa-handshake-angle mr-3 text-red-500"></i>
                                <span>Volunteering</span>
                            </a>
                        </li>
                        <li>
                            <a href="/publications"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group">
                                <i class="fa-solid fa-handshake-angle mr-3 text-red-500"></i>
                                <span>Documents</span>
                            </a>
                        </li>
                        <li>
                            <a href="/faqs"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group">
                                <i class="fa-solid fa-circle-question mr-3 text-red-500"></i>
                                <span>FAQs</span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact"
                                class="flex items-center px-4 py-3 hover:bg-red-50 text-sm font-medium text-gray-700 hover:text-red-600 transition-all duration-200 group">
                                <i class="fa-solid fa-phone mr-3 text-red-500"></i>
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    $(document).ready(function () {

        // Close all mobile menus except the one passed
        function closeAllMobileMenus(except) {
            const menus = ["#mobileMenuPrograms", "#mobileMenuServices", "#mobileMenu"];
            menus.forEach(id => {
                if (id !== except) $(id).fadeOut(200);
            });
        }

        // MOBILE: toggle Programs menu
        $('#menuPrograms').on('click', function (e) {
            if ($(window).width() < 768) {
                e.preventDefault();
                e.stopPropagation();
                closeAllMobileMenus("#mobileMenuPrograms");
                $('#mobileMenuPrograms').stop(true, true).fadeToggle(200);
            }
        });

        // MOBILE: toggle Services menu
        $('#menuServices').on('click', function (e) {
            if ($(window).width() < 768) {
                e.preventDefault();
                e.stopPropagation();
                closeAllMobileMenus("#mobileMenuServices");
                $('#mobileMenuServices').stop(true, true).fadeToggle(200);
            }
        });

        // MOBILE: toggle More menu
        $('#menuMore').on('click', function (e) {
            if ($(window).width() < 768) {
                e.preventDefault();
                e.stopPropagation();
                closeAllMobileMenus("#mobileMenu");
                $('#mobileMenu').stop(true, true).fadeToggle(200);
            }
        });

        // DESKTOP hover logic for dropdowns
        function setupHover(menuId, dropdownId) {
            let hideTimeout;
            $(menuId).hover(
                function () {
                    clearTimeout(hideTimeout);
                    if ($(window).width() >= 768) {
                        $(dropdownId).removeClass('hidden');
                        setTimeout(() => {
                            $(dropdownId)
                                .addClass('opacity-100 scale-100')
                                .removeClass('opacity-0 scale-95');
                        }, 10);
                    }
                },
                function () {
                    if ($(window).width() >= 768) {
                        hideTimeout = setTimeout(function () {
                            $(dropdownId)
                                .removeClass('opacity-100 scale-100')
                                .addClass('opacity-0 scale-95');
                            setTimeout(() => {
                                $(dropdownId).addClass('hidden');
                            }, 300);
                        }, 300);
                    }
                }
            );

            $(dropdownId).hover(
                function () {
                    clearTimeout(hideTimeout);
                },
                function () {
                    hideTimeout = setTimeout(function () {
                        $(dropdownId)
                            .removeClass('opacity-100 scale-100')
                            .addClass('opacity-0 scale-95');
                        setTimeout(() => {
                            $(dropdownId).addClass('hidden');
                        }, 300);
                    }, 300);
                }
            );
        }

        setupHover('#moreMenuPrograms', '#desktopMenuPrograms');
        setupHover('#moreMenuServices', '#desktopMenuServices');
        setupHover('#moreMenuMore', '#desktopMenu');

        // Close menus when clicking outside (mobile)
        $(document).on('click', function (e) {
            if ($(window).width() < 768) {
                if (!$(e.target).closest('#menuPrograms, #mobileMenuPrograms').length) {
                    $('#mobileMenuPrograms').fadeOut(200);
                }
                if (!$(e.target).closest('#menuServices, #mobileMenuServices').length) {
                    $('#mobileMenuServices').fadeOut(200);
                }
                if (!$(e.target).closest('#menuMore, #mobileMenu').length) {
                    $('#mobileMenu').fadeOut(200);
                }
            }
        });

        // Close mobile menus when link is clicked
        $('#mobileMenuPrograms a, #mobileMenuServices a, #mobileMenu a').on('click', function () {
            $('#mobileMenuPrograms, #mobileMenuServices, #mobileMenu').fadeOut(200);
        });
    });
</script>