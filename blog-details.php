<?php

$meta_title = "Blog Details - HelpAge Sri Lanka";
$meta_description = "Read detailed articles and insights on various topics related to senior citizens and elderly care from HelpAge Sri Lanka.";
$meta_keywords = "HelpAge Sri Lanka, Blog Details, Senior Citizens, Elderly Care, Articles, Insights, Non-Profit Organization, Healthcare, Social Inclusion, Economic Security";
$meta_canonical = "https://helpagesl.org/blog-details";
$og_image = "https://helpagesl.org/assets/images/og-blog.webp";

require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<!-- Blog Section -->
<div class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 lg:grid-cols-3 gap-8">

  <!-- Main Blog Content -->
  <div class="lg:col-span-2">
    <div id="blog-container" class="bg-white shadow-lg rounded-2xl overflow-hidden"></div>
    <div id="loading-state" class="text-center py-8 text-gray-500">Loading blog details...</div>
  </div>

  <!-- Other Blogs Sidebar -->
  <div class="space-y-6">
    <h3 class="text-xl font-bold mb-4 text-red-600">Recent Blogs</h3>
    <div id="other-blogs" class="space-y-4"></div>
  </div>
</div>

<script>
  $(document).ready(async function () {
    const params = new URLSearchParams(window.location.search);
    const blogId = params.get("blog");

    try {
      const response = await fetch('./assets/json/blogs.json');
      const data = await response.json();
      const blog = data.find(b => b.id === blogId);

      // Render main blog
      if (blog) {
        $("#blog-container").html(renderBlogHTML(blog));
      } else {
        $("#blog-container").html('<p class="text-red-500 text-center">Blog not found.</p>');
      }

      // Render other blogs
      const otherBlogs = data.filter(b => b.id !== blogId).slice(0, 5); // show top 5
      const otherBlogsHTML = otherBlogs.map(b => `
            <a href="?blog=${b.id}" class="flex items-center bg-white shadow rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="${b.image}" alt="${b.title}" class="w-20 h-20 object-cover">
                <div class="p-3">
                    <h4 class="font-semibold text-gray-800 hover:text-red-600 text-sm">${b.title}</h4>
                    <p class="text-gray-500 text-xs">${b.date}</p>
                </div>
            </a>
        `).join('');
      $("#other-blogs").html(otherBlogsHTML);

    } catch (err) {
      $("#blog-container").html('<p class="text-red-500 text-center">Failed to load blog data.</p>');
      console.error(err);
    } finally {
      $('#loading-state').fadeOut(300, function () { $(this).remove(); });
    }

    function renderBlogHTML(blog) {
      return `
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden px-6">
            <img src="${blog.image}" alt="${blog.title}" class="w-full h-64 md:h-96 object-cover">
            <div class="py-6">
                <h1 class="text-3xl md:text-4xl font-bold mb-2">${blog.title}</h1>
                <h2 class="text-lg text-red-600 font-semibold mb-4">${blog.subheading}</h2>
                <p class="text-gray-700 mb-4">${blog.mini_description}</p>
                <p class="text-gray-800 mb-4">${blog.main_content}</p>
                <h3 class="text-xl font-semibold mb-2">Key Details</h3>
                <ul class="list-disc list-inside mb-4">
                    ${Object.entries(blog.key_details).map(([k, v]) => `<li><span class="font-semibold">${k.replace(/_/g, ' ')}:</span> ${v}</li>`).join('')}
                </ul>
                <h3 class="text-xl font-semibold mb-2">Focus Areas</h3>
                <ul class="list-disc list-inside mb-4">${blog.focus_areas.map(a => `<li>${a}</li>`).join('')}</ul>
                <h3 class="text-xl font-semibold mb-2">Program Benefits</h3>
                <ul class="list-disc list-inside mb-4">${blog.program_benefits.map(b => `<li>${b}</li>`).join('')}</ul>
                <h3 class="text-xl font-semibold mb-2">Activities</h3>
                <ul class="list-disc list-inside mb-4">${blog.activities.map(a => `<li>${a}</li>`).join('')}</ul>
                ${blog.achievements.length ? `<h3 class="text-xl font-semibold mb-2">Achievements</h3>
                <ul class="list-disc list-inside mb-4">${blog.achievements.map(a => `<li>${a}</li>`).join('')}</ul>` : ''}
                <p class="text-gray-400 text-sm">Date: ${blog.date}</p>
            </div>
        </div>`;
    }
  });
</script>

<!-- Footer -->
<?php include 'layouts/footer.php'; ?>