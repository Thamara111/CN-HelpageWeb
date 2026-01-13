<?php

$meta_title = "Blogs - HelpAge Sri Lanka";
$meta_description = "Explore our collection of blogs focused on senior citizens, elderly care, and related topics from HelpAge Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Blogs, Senior Citizens, Elderly Care, Articles, Insights, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/blogs";
$og_image = "https://helpagesl.org/assets/images/og-blogs.webp";

require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<!-- Contact Section -->
<section class="">
  <div class="container mx-auto px-6 py-12">
    <div class="text-center mb-12" data-aos="fade-down" data-aos-duration="1500">
      <h2 class="text-4xl md:text-6xl font-bold mb-4">Our Blogs</h2>
      <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
        Your generosity fuels our mission to support elderly citizens across
        Sri Lanka. Every donation, big or small, makes a significant impact
        in improving their quality of life.
      </p>
    </div>
    <section class="w-full px-4 md:px-8  bg-white">
      <div id="blog-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"  data-aos="fade-up" data-aos-duration="1500">
      </div>
      <div id="loading-state" class="text-center text-gray-500 mt-8">
        Loading funds...
      </div>
    </section>
  </div>
</section>

<!-- Footer -->

<script>
  $(document).ready(function () {
    const container = $("#blog-container");
    let blogDate = [];
    $.getJSON('./assets/json/blogs.json', function (data) {
      blogDate = data;

      $.each(data, function (index, item) {
        const card = `
          <div class="bg-gradient-to-r from-gray-50 to-gray-200 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="aspect-video w-full rounded-t-xl overflow-hidden mb-4">
              <img src="${item.image}" alt="${item.title}" class="rounded-t-xl w-full h-full object-cover">
            </div>

            <div class="flex flex-wrap items-center gap-4 mb-3 px-6">
              <p class="text-gray-500 text-sm">${item.date}</p>
            </div>

            <h3 class="font-semibold text-lg md:text-xl text-gray-900 mb-3 truncate px-6" title="${item.title}">
            ${item.title}
            </h3>

            <p class="text-gray-700 text-sm leading-relaxed line-clamp-3 px-6">
              ${item.main_content}
            </p>
            <!-- Buttons -->
                <div class="w-full mt-6 flex flex-col sm:flex-row justify-center gap-3 px-6 mb-6">
                    <a href="/blog-details?blog=${item.id}"
                        class="w-full mt-4 inline-block bg-white border-2 border-black text-center text-black hover:bg-black hover:text-white py-2 px-4 rounded-2xl">View Details</a>
                </div>
          </div>`;
        container.append(card);
      });
      // Remove loading spinner or message
      $('#loading-state').fadeOut(300, function () {
        $(this).remove();
      });

    }).fail(function () {
      console.error("Failed to load Blog data.");
      $('#loading-state').html('<p class="text-red-500">Failed to load fund campaigns. Please try again later.</p>');
    });
  });
</script>
<?php include 'layouts/footer.php'; ?>

</body>

</html>