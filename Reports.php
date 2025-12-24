<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "Publications - HelpAge Sri Lanka";
$meta_description = "Explore HelpAge Sri Lanka's publications, including research papers, reports, and newsletters that highlight our work and impact in supporting senior citizens.";
$meta_keywords = "HelpAge Sri Lanka, Publications, Research Papers, Reports, Newsletters";
$meta_canonical = "https://helpagesl.org/publications";
$og_image = "https://helpagesl.org/assets/images/og-publications.webp"; // optional Open Graph image

/* =============================
   LAYOUT
   ============================= */
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<!-- Contact Section -->
<section class="">
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Publications</h2>
            <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
                At HelpAge Sri Lanka, we believe that sharing knowledge and research is vital
                to building a society that values and supports its senior citizens. Our
                publications highlight the work we do, the challenges faced by older people,
                and the innovative programs that are shaping a more inclusive future.
            </p>
        </div>

        <div id="report-container" class="grid grid-cols-1 md:grid-cols-3 gap-8">
        </div>
        <div id="loading-state" class="text-center text-gray-500 mt-8">
            Loading Reports...
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        const container = $('#report-container');
        let reportDate = [];

        $.getJSON('./assets/json/publications.json', function (data) {
            reportDate = data;

            $.each(data, function (index, item) {
                const card = `
                    <div class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-2xl transition-shadow duration-300">
                    <img src="${item.image}" alt="${item.title}" class="rounded-xl mb-4 w-full h-96 object-cover bg-center hover:scale-105 transition duration-300">
                    <h3 class="text-xl font-semibold mb-4">${item.title}</h3>
                    <a href="${item.pdf}" download="${item.title}"
                    class="text-black px-4 py-2 rounded-lg hover:text-blue-700">
                    Download PDF <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>
                    `;
                container.append(card);
                // Remove loading spinner or message
                $('#loading-state').fadeOut(300, function () {
                    $(this).remove();
                });
            });
        }).fail(function () {
            console.error("Failed to load Blog data.");
            $('#loading-state').html('<p class="text-red-500">Failed to load reports. Please try again later.</p>');

        });
    });
</script>
<?php include 'layouts/footer.php'; ?>