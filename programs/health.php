<?php
require_once '../layouts/head.php';
require_once '../layouts/header.php';
?>

<!-- Contact Section -->
<section class="">
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-6xl font-bold mb-4">Health & Medical</h2>
            <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
                Our health and medical initiatives aim to provide essential healthcare services to elderly citizens
                across Sri Lanka. From regular health check-ups to specialized medical care, we ensure our seniors
                receive the attention they deserve.
            </p>
        </div>
        <section class="w-full px-4 md:px-8  bg-white">
            <div id="health-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
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
        const container = $("#health-container");
        $.getJSON('/assets/json/projects.json', function (data) {

            // Filter only "Health & Medical" category
            const healthData = data.HelpAge_SriLanka_Events_And_Programs_2024_25
                .filter(cat => cat.category === "Health & Medical")
                .flatMap(cat => cat.programs); // flatten the programs array

            // Loop through filtered programs
            $.each(healthData, function (index, item) {
                const card = `
                <div class="bg-gray-100 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 p-6">
                    <div class="flex flex-wrap items-center gap-4 mb-3">
                        <p class="text-gray-500 text-sm">${item.mini_date}</p>
                    </div>

                    <h3 class="font-semibold text-lg md:text-xl text-gray-900 mb-3 truncate" title="${item.name}">
                        ${item.name}
                    </h3>

                    <p class="text-gray-700 text-sm leading-relaxed line-clamp-3">
                        ${item.mini_description}
                    </p>

                    <!-- Buttons -->
                    <div class="w-full mt-6 flex flex-col sm:flex-row justify-center gap-3">
                        <a href="/health-details?health=${item.id}"
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
            $('#loading-state').html('<p class="text-red-500">Failed to load Health & Medical programs. Please try again later.</p>');
        });
    });

</script>
<?php include '../layouts/footer.php'; ?>