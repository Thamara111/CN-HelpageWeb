<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "Volunteer - HelpAge Sri Lanka";
$meta_description = "Join HelpAge Sri Lanka as a volunteer to support senior citizens in Sri Lanka. Make a difference in the lives of elderly people through your time and dedication.";
$meta_keywords = "HelpAge Sri Lanka, Volunteer, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/volunteering";
$og_image = "https://helpagesl.org/assets/images/og-volunteer.webp"; // optional Open Graph image

/* =============================
   LAYOUT
   ============================= */
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>

<!-- Volunteer Section -->
<section class="">
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Join as a Volunteer</h2>
            <p class="text-gray-700 mb-12 max-w-2xl mx-auto">
                Be part of a meaningful journey to bring hope and happiness to the elderly across Sri Lanka.
                As a volunteer, you’ll play a vital role in organizing donation drives, assisting with community
                events, and providing companionship and care to those in need.
            </p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:gap-6">
            <div class="order-2 ">
                <img src="./assets/images/volunteer.JPG"
                    class="rounded-2xl border-2 border-gray-400 w-full h-full md:h-[66rem]" alt="Join as a Volunteer">


            </div>

            <div claas="order-1 mb-4 md:mb-0">
                <form action="submit_volunteer.php" method="POST"
                    class="border border-gray-100 h-full md:h-[66rem] p-8 rounded-2xl shadow-md w-full mx-auto bg-white">

                    <!-- Section Title -->
                    <h2 class="text-2xl font-semibold text-gray-800 mb-8 text-center">Volunteer Registration Form
                    </h2>

                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="firstName" class="block text-gray-700 font-medium mb-2">First Name</label>
                            <input type="text" id="firstName" name="firstName" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                        </div>

                        <div>
                            <label for="lastName" class="block text-gray-700 font-medium mb-2">Last Name</label>
                            <input type="text" id="lastName" name="lastName" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                        </div>
                    </div>

                    <!-- Email and Phone -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                        </div>

                        <div>
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                        </div>
                    </div>

                    <!-- Age and City -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="age" class="block text-gray-700 font-medium mb-2">Age</label>
                            <input type="number" id="age" name="age" min="16" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                        </div>

                        <div>
                            <label for="city" class="block text-gray-700 font-medium mb-2">City</label>
                            <input type="text" id="city" name="city" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                        </div>
                    </div>

                    <!-- Availability -->
                    <div class="mb-6">
                        <label for="availability" class="block text-gray-700 font-medium mb-2">Availability</label>
                        <select id="availability" name="availability" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
                            <option value="">Select your availability</option>
                            <option value="weekdays">Weekdays</option>
                            <option value="weekends">Weekends</option>
                            <option value="fullTime">Full-time (Event Duration)</option>
                            <option value="partTime">Part-time / Flexible</option>
                        </select>
                    </div>

                    <!-- Skills -->
                    <div class="mb-6">
                        <label for="skills" class="block text-gray-700 font-medium mb-2">Skills or Areas of
                            Interest</label>
                        <input type="text" id="skills" name="skills"
                            placeholder="e.g., Event coordination, photography, first aid, fundraising..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                    </div>

                    <!-- Motivation -->
                    <div class="mb-6">
                        <label for="motivation" class="block text-gray-700 font-medium mb-2">Why do you want to
                            volunteer?</label>
                        <textarea id="motivation" name="motivation" rows="4" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600"
                            placeholder="Share your reason for joining our donation program..."></textarea>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="emergencyName" class="block text-gray-700 font-medium mb-2">Emergency
                                Contact Name</label>
                            <input type="text" id="emergencyName" name="emergencyName" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                        </div>
                        <div>
                            <label for="emergencyPhone" class="block text-gray-700 font-medium mb-2">Emergency
                                Contact Number</label>
                            <input type="tel" id="emergencyPhone" name="emergencyPhone" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                        </div>
                    </div>

                    <!-- Consent Checkbox -->
                    <div class="mb-6 flex items-start gap-2">
                        <input type="checkbox" id="consent" name="consent" required
                            class="w-5 h-5 accent-red-600 border-gray-300 rounded focus:ring-red-500" />
                        <label for="consent" class="text-gray-700 text-sm leading-snug">
                            I agree to volunteer for this program and consent to the processing of my data as
                            described in the
                            <a href="#" class="text-red-600 underline hover:text-red-700">privacy policy</a>.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-start">
                        <button type="submit"
                            class="group text-white bg-red-600 px-10 py-3 rounded-full border-2 border-red-600 hover:bg-white hover:text-red-600 transition duration-300 font-medium">
                            Submit Application
                            <i class="fa-solid fa-arrow-right ml-2 group-hover:text-red-600"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
</section>

<?php include 'layouts/footer.php'; ?>