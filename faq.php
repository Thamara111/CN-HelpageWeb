<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "FAQs - HelpAge Sri Lanka";
$meta_description = "Frequently asked questions about HelpAge Sri Lanka, including donation information, tax-deductibility, and more.";
$meta_keywords = "HelpAge Sri Lanka, FAQs, Donations, Tax Deductible, Recurring Donations";
$meta_canonical = "https://helpagesl.org/faqs";
$og_image = "https://helpagesl.org/assets/images/og-faqs.webp"; // optional Open Graph image

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
      <h2 class="text-4xl md:text-6xl font-bold mb-4">FAQs</h2>
      <p class="text-gray-500 mb-6 max-w-2xl mx-auto">
        Your generosity fuels our mission to support elderly citizens across Sri Lanka. Below are answers to common
        donation-related questions.
      </p>
    </div>

    <div class="max-w-3xl mx-auto w-full space-y-4 text-left">
      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          How can I make a donation?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          We accept donations online via credit/debit cards, PayPal, and bank transfers. You can also donate in
          person or by mail.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          Is my donation tax-deductible?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          Yes, donations to our organization are tax-deductible. We will provide a receipt for your contribution.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          Can I make a recurring donation?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          Absolutely! You can set up monthly, quarterly, or yearly recurring donations through our secure donation
          portal.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          Where does my donation go?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          Your donation directly supports our programs and initiatives, including specific projects, and helps us
          cover operational costs to serve more people.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          Can I donate in someone’s name?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          Yes, you can make a donation in honor or memory of someone, and we will send a personalized acknowledgment
          to the recipient if you wish.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          Are my payment details secure?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          Yes, all transactions are encrypted and processed through trusted, secure payment gateways.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          Can I volunteer instead of donating money?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          Definitely! We welcome volunteers. Please visit our “Volunteer” page to see current opportunities.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          Can I donate goods or services instead of money?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          Yes, we accept certain goods and professional services. Please contact us to see what donations are
          currently needed.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          How can I track the impact of my donation?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          We provide updates through newsletters, annual reports, and our website, showing how donations are used
          and the outcomes achieved.
        </div>
      </details>

      <details class="bg-white rounded-lg shadow-sm p-4" data-aos="fade-up" data-aos-duration="1500" data-delay="200">
        <summary class="cursor-pointer font-semibold text-lg flex justify-between items-center" aria-expanded="false">
          Can I cancel or change my recurring donation?
          <span class="text-gray-400 ml-4 toggle-icon">+</span>
        </summary>
        <div class="mt-3 text-gray-700">
          Yes, you can manage your recurring donations anytime by logging into your account or contacting our
          support team.
        </div>
      </details>
    </div>

    <script>
      $(function () {
        $('details').each(function () {
          var $d = $(this);
          var $summary = $d.find('summary').first();
          var $icon = $summary.find('.toggle-icon');

          var update = function () {
            if ($d.prop('open')) {
              $icon.text('−');
              $summary.attr('aria-expanded', 'true');
            } else {
              $icon.text('+');
              $summary.attr('aria-expanded', 'false');
            }
          };

          // Initialize state
          update();

          // Use native 'toggle' event for <details>
          this.addEventListener('toggle', update);
        });
      });
    </script>
  </div>
  </div>
</section>

<!-- Footer -->
<?php include 'layouts/footer.php'; ?>