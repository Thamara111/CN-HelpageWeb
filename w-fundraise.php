<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "Fundraising - HelpAge Sri Lanka";
$meta_description = "Support HelpAge Sri Lanka's fundraising initiatives to improve the lives of elderly citizens in Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Fundraising, Senior Citizens, Elderly Care, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/w-fundraising";
$og_image = "https://helpagesl.org/assets/images/og-fundraising.webp"; // optional Open Graph image

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
      <h2 class="text-4xl md:text-6xl font-bold mb-4">Fundraising</h2>
      <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
        Your support empowers us to create lasting change for elderly
        citizens in Sri Lanka. Through dedicated fundraising efforts, we can
        provide essential services, healthcare, and community programs that
        enhance their quality of life.
      </p>
    </div>
    <div id="fund-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up" data-aos-duration="1500"></div>
    <div id="loading-state" class="text-center text-gray-500 mt-8">
      Loading funds...
    </div>
  </div>
</section>

<!-- Footer -->
<script src="/assets/js/w-fundraising.js"></script>
<?php include 'layouts/footer.php'; ?>