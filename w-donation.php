<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "Donations - HelpAge Sri Lanka";
$meta_description = "Support HelpAge Sri Lanka's mission to improve the lives of elderly citizens in Sri Lanka through donations.";
$meta_keywords = "HelpAge Sri Lanka, Donations, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/w-donation";
$og_image = "https://helpagesl.org/assets/images/og-donation.webp"; // optional Open Graph image

/* =============================
   LAYOUT
   ============================= */
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<!-- Contact Section -->
<section class="">
  <div class="container mx-auto px-6 py-12">
    <div class="text-center mb-12" data-aos="fade-down" data-aos-duration="1500">
      <h2 class="text-4xl md:text-6xl font-bold mb-4">Donations</h2>
      <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
        Your generosity fuels our mission to support elderly citizens across
        Sri Lanka. Every donation, big or small, makes a significant impact
        in improving their quality of life.
      </p>
    </div>
    <div class="fixed top-8 right-8 p-4 hidden z-50" id="multi-donate-bar">
      <button id="go-to-multiple"
        class="w-full bg-red-500 text-white font-bold py-3 px-4 rounded-xl hover:bg-red-600 transition">
        Proceed with Selected Donations
      </button>
    </div>

    <div id="donation-container"
      class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-8 mt-8"
      data-aos="fade-up" data-aos-duration="1500">
      <!-- Additional donation cards can be added here -->
    </div>
  </div>
</section>

<!-- Footer -->
<script src="/assets/js/w-main.js"></script>
<?php include 'layouts/footer.php'; ?>