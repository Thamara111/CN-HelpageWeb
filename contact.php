<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "Contact Us - HelpAge Sri Lanka";
$meta_description = "Get in touch with HelpAge Sri Lanka. Find our address, phone numbers, and email for inquiries, support, and partnership opportunities.";
$meta_keywords = "HelpAge Sri Lanka, Contact Us, Address, Phone Number, Email";
$meta_canonical = "https://helpagesl.org/contact";
$og_image = "https://helpagesl.org/assets/images/og-contact.webp"; // add OG image if needed

/* =============================
   LAYOUT
   ============================= */
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<!-- Contact Section -->
<section class="">
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Contact Us</h2>
            <p class="text-gray-700 mb-12 max-w-2xl mx-auto">
                Whether you’re looking to support our mission, join as a volunteer,
                or simply learn more about HelpAge Sri Lanka, we’re here to connect.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:gap-6">
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3267453069902!2d79.90160557570597!3d6.851380419264845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a8ecbe19b9d%3A0x220a2b392e8b57fc!2sHelpAge%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1760957553605!5m2!1sen!2slk"
                    width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="mb-12 rounded-2xl shadow-lg"></iframe>
                <h4 class="text-gray-500 mb-8 max-w-xl">
                    Working hand in hand with communities, we aim to deliver hope,
                    education, and essential support where it’s needed most.
                </h4>
                <ul class="mb-12 space-y-4">
                    <!-- Address -->
                    <li class="flex items-start">
                        <span
                            class="flex justify-center items-center w-12 h-12 bg-red-100 rounded-lg mr-4 flex-shrink-0">
                            <i class="fa-solid fa-location-dot text-red-600 text-xl"></i>
                        </span>
                        <p class="text-gray-700 leading-relaxed">
                            P.O. BOX 09, 102 Pemananda Mawatha,<br class="hidden md:block">
                            Raththanapitiya, Boralesgamuwa, Sri Lanka<br class="hidden md:block">
                            <span class="text-sm text-gray-500">(Adjoining Sri Jayawardenapura University
                                Premises)</span>
                        </p>
                    </li>

                    <!-- Phone -->
                    <li class="flex items-center">
                        <span
                            class="flex justify-center items-center w-12 h-12 bg-red-100 rounded-lg mr-4 flex-shrink-0">
                            <i class="fa-solid fa-phone text-red-600 text-xl"></i>
                        </span>
                        <span>
                            <a href="tel:+94112803752"
                                class="text-gray-700 hover:text-red-600 transition duration-300 text-base">
                                +94 11 2803752 |
                            </a>
                            <a href="tel:+94112803753"
                                class="text-gray-700 hover:text-red-600 transition duration-300 text-base">
                                +94 11 2803753 |
                            </a>
                            <a href="tel:+94112803754"
                                class="text-gray-700 hover:text-red-600 transition duration-300 text-base">
                                +94 11 2803754 |
                            </a>
                            <br />
                            <a href="tel:+94117418977"
                                class="text-gray-700 hover:text-red-600 transition duration-300 text-base">
                                +94 11 7418977 |
                            </a>
                            <a href="tel:+94117418981"
                                class="text-gray-700 hover:text-red-600 transition duration-300 text-base">
                                +94 11 7418981
                            </a>
                        </span>

                    </li>

                    <!-- Email -->
                    <li class="flex items-center">
                        <span
                            class="flex justify-center items-center w-12 h-12 bg-red-100 rounded-lg mr-4 flex-shrink-0">
                            <i class="fa-solid fa-envelope text-red-600 text-xl"></i>
                        </span>
                        <a href="mailto:helpage@sltnet.lk"
                            class="text-gray-700 hover:text-red-600 transition duration-300 text-base">
                            helpage@sltnet.lk
                        </a>
                    </li>
                </ul>

            </div>

            <div>
                <form action="submit_form.php" method="POST"
                    class="border border-gray-50 p-8 rounded-2xl shadow-md w-full mx-auto">

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

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                    </div>

                    <!-- Phone -->
                    <div class="mb-6">
                        <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                    </div>

                    <!-- Company -->
                    <div class="mb-6">
                        <label for="company" class="block text-gray-700 font-medium mb-2">Company Name</label>
                        <input type="text" id="company" name="company"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600" />
                    </div>

                    <!-- Message -->
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                        <textarea id="message" name="message" rows="5"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600"></textarea>
                    </div>

                    <!-- Consent Checkbox -->
                    <div class="mb-6 flex items-start gap-2">
                        <input type="checkbox" id="consent" name="consent" required
                            class=" w-5 h-5 accent-red-600 border-gray-300 rounded focus:ring-red-500" />
                        <label for="consent" class="text-gray-700 text-sm leading-snug">
                            I agree to the processing of my data as described in the
                            <a href="#" class="text-red-600 underline hover:text-red-700">privacy policy</a>.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex  items-start">
                        <button type="submit"
                            class="group text-white bg-red-600 px-8 py-3 rounded-full border-2 border-red-600 hover:bg-white hover:text-red-600 transition duration-300 font-medium">
                            Send Message
                            <i class="fa-solid fa-arrow-right  text-white   ml-2 group-hover:text-red-600"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
</section>

<!-- Footer -->
<?php include 'layouts/footer.php'; ?>