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

<!-- Footer -->
<script src="/assets/js/w-details.js"></script>
<?php include 'layouts/footer.php'; ?>