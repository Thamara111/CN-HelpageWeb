<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "Donation Details - HelpAge Sri Lanka";
$meta_description = "Learn more about HelpAge Sri Lanka's donation process, including tax-deductible options and recurring donations.";
$meta_keywords = "HelpAge Sri Lanka, Donations, Tax Deductible, Recurring Donations, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/w-donation-details";
$og_image = "https://helpagesl.org/assets/images/og-donation.webp"; // optional Open Graph image

/* =============================
   LAYOUT
   ============================= */
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<!-- Contact Section -->
<section class="container mx-auto px-4 sm:px-6 md:px-8 py-12">
   <div id="donation-details" class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 items-start"></div>
</section>

<section id="donationModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog"
   aria-modal="true">

   <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity backdrop-blur-sm" id="modalBackdrop"></div>

   <div class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">

         <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all 
                  w-full sm:max-w-lg md:max-w-xl border border-gray-200 
                  max-h-[90vh] overflow-y-auto"> <button type="button" id="closeModalBtn"
               class="absolute top-3 right-3 sm:top-4 sm:right-4 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-full p-2 transition-colors z-20 focus:outline-none focus:ring-2 focus:ring-red-500">
               <span class="sr-only">Close</span>
               <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
               </svg>
            </button>

            <div class="bg-white px-4 pb-6 pt-5 sm:p-6 sm:pb-8">

               <div class="text-center mb-6">
                  <h2 class="text-2xl md:text-3xl font-bold text-red-700 mb-2">
                     Make a Donation
                  </h2>
                  <p class="text-gray-600 text-sm md:text-base px-2">
                     Complete your details to support elderly citizens.
                  </p>
               </div>

               <form id="donationForm" action="#" method="POST">

                  <div
                     class="flex flex-col justify-center items-center mb-6 bg-red-50 border border-red-100 rounded-xl p-4 sm:p-5">
                     <div id="selected-donations-list"
                        class="text-center w-full space-y-1 mb-2 max-h-32 overflow-y-auto custom-scrollbar">
                     </div>
                     <div class="h-px w-full bg-red-200 my-2"></div>
                     <p class="text-xl sm:text-2xl font-bold text-red-600 text-center">
                        Total: <span id="finalTotal">Rs. 0</span>
                     </p>
                  </div>

                  <div class="space-y-4">
                     <h3 class="text-lg font-bold text-gray-900 flex items-center">
                        <i class="fas fa-user-circle mr-2 text-red-500 text-xl"></i> Your Information
                     </h3>

                     <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                           <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Full Name <span
                                 class="text-red-500">*</span></label>
                           <input type="text" id="name" name="name" required
                              class="block w-full rounded-lg border border-gray-300 px-3 py-3 text-gray-900 shadow-sm focus:border-red-500 focus:ring-2 focus:ring-red-200 sm:text-sm outline-none transition-all"
                              placeholder="Enter full name" />
                        </div>

                        <div>
                           <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email <span
                                 class="text-red-500">*</span></label>
                           <input type="email" id="email" name="email" required
                              class="block w-full rounded-lg border border-gray-300 px-3 py-3 text-gray-900 shadow-sm focus:border-red-500 focus:ring-2 focus:ring-red-200 sm:text-sm outline-none transition-all"
                              placeholder="Enter email address" />
                        </div>

                        <div class="md:col-span-2">
                           <label for="message" class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
                           <textarea id="message" name="message"
                              class="block w-full rounded-lg border border-gray-300 px-3 py-3 text-gray-900 shadow-sm focus:border-red-500 focus:ring-2 focus:ring-red-200 sm:text-sm outline-none transition-all resize-none"
                              placeholder="Optional message..." rows="2"></textarea>
                        </div>
                     </div>
                  </div>

                  <div class="mt-4">
                     <label
                        class="flex items-center bg-gray-50 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-100 transition-colors">
                        <input type="checkbox" id="anonymous-yes" name="anonymous" value="yes"
                           class="h-5 w-5 text-red-600 focus:ring-red-500 rounded border-gray-300" />
                        <span class="ml-3 text-sm font-medium text-gray-700 select-none">
                           Keep my donation anonymous
                        </span>
                     </label>
                  </div>

                  <div class="mt-6 sm:mt-8">
                     <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-bold text-lg py-3.5 px-4 rounded-xl transition-all duration-300 transform active:scale-95 shadow-lg flex items-center justify-center space-x-2">
                        <i class="fas fa-heart"></i>
                        <span>Pay Securely</span>
                     </button>

                     <div class="mt-4 flex items-center justify-center space-x-1 text-xs text-gray-500">
                        <i class="fas fa-lock text-green-500"></i>
                        <span>Secure 256-bit SSL encrypted payment</span>
                     </div>
                  </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Footer -->
<script src="/assets/js/w-details.js"></script>
<script>
   // ✅ Function called by Script 1 to Open Modal
   function populateAndOpenModal() {
      // Load data immediately from storage
      const storedTitles = JSON.parse(localStorage.getItem("donationTitles")) || [];
      const storedTotal = localStorage.getItem("donationTotal") || 0;

      // Update Modal Summary UI
      const listContainer = $("#selected-donations-list"); // Ensure this ID exists in your HTML
      listContainer.empty();

      if (storedTitles.length > 0) {
         const titlesHTML = storedTitles.map(title =>
            `<p class="text-gray-800 font-medium text-sm md:text-base border-b border-gray-100 py-1">${title}</p>`
         ).join("");
         listContainer.append(titlesHTML);
      } else {
         listContainer.html("<p class='text-gray-500 text-sm italic'>General Donation</p>");
      }

      $("#finalTotal").text(`Rs. ${Number(storedTotal).toLocaleString()}`);

      // Show the Modal
      $("#donationModal").removeClass("hidden");
   }

   $(document).ready(function () {

      // ✅ Close Modal Logic
      $("#closeModalBtn, #modalBackdrop").on("click", function () {
         $("#donationModal").addClass("hidden");
      });

      // ✅ Handle Modal Form Submission & Redirect to Payment
      $("#donationForm").on("submit", function (e) {
         e.preventDefault();

         const name = $("#name").val().trim() || "Anonymous";
         // Grab total from LocalStorage or the DOM text
         const amount = Number(localStorage.getItem("donationTotal")) || 0;
         const currency = "LKR";

         // Get titles for the description
         const donationTitles = JSON.parse(localStorage.getItem("donationTitles")) || ["General Donation"];

         if (amount <= 0) {
            alert("Please select or enter a valid donation amount.");
            return;
         }

         // Build donations parameter
         const donationsParam = encodeURIComponent(donationTitles.join(", "));

         // Generate unique order ID
         const now = new Date();
         const datePart = now.getFullYear().toString().slice(-2)
            + String(now.getMonth() + 1).padStart(2, "0")
            + String(now.getDate()).padStart(2, "0");
         const randomPart = Math.floor(Math.random() * 9000) + 1000;
         const cleanName = name.replace(/[^a-zA-Z0-9]/g, "").toUpperCase().slice(0, 6);
         const orderId = `SW${datePart}${cleanName}${randomPart}`;

         // ✅ Redirect to payment gateway
         const paymentUrl = `https://helpage.go.digitable.io/paysafe/sey?currency=${currency}&amount=${amount}&orderId=${orderId}&description=${donationsParam}`;

         console.log("Redirecting to:", paymentUrl);

         // Optional: Show loading state on button
         $(this).find("button[type='submit']").text("Redirecting...");

         window.location.href = paymentUrl;
      });
   });
</script>
<?php include 'layouts/footer.php'; ?>