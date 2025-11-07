<?php
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>

<!-- Contact Section -->
<section class="">
  <div class="container mx-auto px-6 py-12">
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-6xl font-bold mb-4">Fundraising</h2>
      <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
        Your support empowers us to create lasting change for elderly
        citizens in Sri Lanka. Through dedicated fundraising efforts, we can
        provide essential services, healthcare, and community programs that
        enhance their quality of life.
      </p>
    </div>
    <div id="fund-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"></div>
    <div id="loading-state" class="text-center text-gray-500 mt-8">
      Loading funds...
    </div>
  </div>
</section>

<!-- Footer -->
<script src="/assets/js/w-fundraising.js"></script>
<?php include 'layouts/footer.php'; ?>