<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "Fundraising Details - HelpAge Sri Lanka";
$meta_description = "Learn more about HelpAge Sri Lanka's fundraising initiatives and how you can contribute to improving the lives of elderly citizens in Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Fundraising, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/w-fundraising-details";
$og_image = "https://helpagesl.org/assets/images/og-fundraising-details.webp"; // optional Open Graph image

/* =============================
   LAYOUT
   ============================= */
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<!-- Contact Section -->
<section class="container mx-auto px-4 sm:px-6 md:px-8 py-12">
   <div id="fund-details" class="grid grid-cols-1 md:grid-cols-3 gap-8"></div>
</section>

<section id="fundModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">

   <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity backdrop-blur-sm" id="modalBackdrop"></div>

   <div class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">

         <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all 
                        w-full sm:max-w-lg border border-gray-200 
                        max-h-[90vh] overflow-y-auto">

            <button type="button" id="closeModalBtn"
               class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-full p-2 transition-colors z-20 focus:outline-none">
               <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
               </svg>
            </button>

            <div class="bg-white px-4 pb-6 pt-5 sm:p-6 sm:pb-8">

               <h2 class="text-2xl font-bold text-green-700 mb-2 text-center">
                  Confirm Funding
               </h2>
               <p class="text-gray-600 text-sm text-center mb-6 px-4">
                  Complete your details to proceed.
               </p>

               <form id="fundForm" action="#" method="POST">

                  <div
                     class="flex flex-col justify-center items-center mb-6 bg-green-50 border border-green-100 rounded-xl p-4">
                     <p id="modal-fund-title" class="text-gray-800 font-semibold text-center mb-2"></p>
                     <div class="h-px w-full bg-green-200 my-2"></div>
                     <p class="text-2xl font-bold text-green-600 text-center">
                        Total: <span id="modal-fund-total">Rs. 0</span>
                     </p>
                  </div>

                  <div class="space-y-4">
                     <h3 class="text-lg font-bold text-gray-900 flex items-center">
                        <i class="fas fa-user-circle mr-2 text-green-500 text-xl"></i> Your Information
                     </h3>

                     <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div>
                           <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Full Name *</label>
                           <input type="text" id="name" name="name" required
                              class="border border-gray-300 rounded-lg p-3 w-full focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                              placeholder="Enter full name" />
                        </div>

                        <div>
                           <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email *</label>
                           <input type="email" id="email" name="email" required
                              class="border border-gray-300 rounded-lg p-3 w-full focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all"
                              placeholder="Enter email address" />
                        </div>

                        <div class="md:col-span-2">
                           <label for="message" class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
                           <textarea id="message" name="message"
                              class="border border-gray-300 rounded-lg p-3 w-full focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all resize-none"
                              placeholder="Optional message..." rows="2"></textarea>
                        </div>
                     </div>
                  </div>

                  <div class="mt-4">
                     <label
                        class="flex items-center bg-gray-50 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-100 transition">
                        <input type="checkbox" id="anonymous-yes" name="anonymous" value="yes"
                           class="h-5 w-5 text-green-600 focus:ring-green-500 rounded border-gray-300" />
                        <span class="ml-3 text-sm font-medium text-gray-700 select-none">
                           Keep my funding anonymous
                        </span>
                     </label>
                  </div>

                  <div class="mt-6">
                     <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-bold text-lg py-3.5 px-4 rounded-xl transition-all duration-300 transform active:scale-95 shadow-lg flex items-center justify-center space-x-2">
                        <i class="fas fa-check-circle"></i>
                        <span>Proceed to Pay</span>
                     </button>
                     <div class="mt-3 flex items-center justify-center space-x-1 text-xs text-gray-500">
                        <i class="fas fa-lock text-green-500"></i>
                        <span>Secure and encrypted payment</span>
                     </div>
                  </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Footer -->
<script src="/assets/js/w-fund-details.js"></script>
<script>
   // ✅ Function to Open & Populate Modal
   function populateAndOpenFundModal() {
      // Load data from storage
      const storedTotal = localStorage.getItem("fundTotal") || 0;
      const storedTitle = localStorage.getItem("fundTitle") || "General Fund";

      // Update Modal UI
      $("#modal-fund-title").text(storedTitle);
      $("#modal-fund-total").text(`Rs. ${Number(storedTotal).toLocaleString()}`);

      // Show Modal
      $("#fundModal").removeClass("hidden");
      $("body").addClass("overflow-hidden"); // Stop background scrolling
   }

   $(document).ready(function () {

      // ✅ Close Modal Logic
      function closeFundModal() {
         $("#fundModal").addClass("hidden");
         $("body").removeClass("overflow-hidden");
      }
      $("#closeModalBtn, #modalBackdrop").on("click", closeFundModal);


      // ✅ Handle Final Payment Submission
      $("#fundForm").on("submit", function (e) {
         e.preventDefault();

         const name = $("#name").val().trim() || "Anonymous";

         // Retrieve final data from storage
         const amount = Number(localStorage.getItem("fundTotal")) || 0;
         const title = localStorage.getItem("fundTitle") || "Fund";
         const currency = "LKR";

         if (amount <= 0) {
            alert("Error: Invalid amount.");
            return;
         }

         // Generate Unique Order ID
         const now = new Date();
         const datePart = now.getFullYear().toString().slice(-2)
            + String(now.getMonth() + 1).padStart(2, "0")
            + String(now.getDate()).padStart(2, "0");
         const randomPart = Math.floor(Math.random() * 9000) + 1000;
         const cleanName = name.replace(/[^a-zA-Z0-9]/g, "").toUpperCase().slice(0, 6);
         const orderId = `SW${datePart}${cleanName}${randomPart}`;

         // Build URL
         const description = encodeURIComponent(title);
         const paymentUrl = `https://helpage.go.digitable.io/paysafe/sey?currency=${currency}&amount=${amount}&orderId=${orderId}&description=${description}`;

         console.log("Redirecting to:", paymentUrl);

         // Show loading state
         $(this).find("button[type='submit']").html('<i class="fas fa-spinner fa-spin"></i> Processing...');

         // Redirect
         window.location.href = paymentUrl;
      });
   });
</script>
<?php include 'layouts/footer.php'; ?>