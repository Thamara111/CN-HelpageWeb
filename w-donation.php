<?php
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>

<!-- Contact Section -->
<section class="">
  <div class="container mx-auto px-6 py-12">
    <div class="text-center mb-12">
      <h2 class="text-4xl md:text-6xl font-bold mb-4">Donations</h2>
      <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
        Your generosity fuels our mission to support elderly citizens across
        Sri Lanka. Every donation, big or small, makes a significant impact
        in improving their quality of life.
      </p>
    </div>
    <div id="donation-container"
      class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-8 mt-8">
      <!-- Additional donation cards can be added here -->
    </div>
  </div>
</section>

<!-- Footer -->
<script src="/assets/js/w-main.js"></script>
<?php include 'layouts/footer.php'; ?>