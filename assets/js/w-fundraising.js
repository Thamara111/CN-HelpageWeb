$(document).ready(function () {
  const container = $("#fund-container"); // renamed from #donation-container
  let fundData = []; // renamed from donationData

  // Fetch fundraising data
  $.getJSON("/assets/json/fundraising.json", function (data) {
    fundData = data;

    // Loop through each fundraising item
    $.each(data, function (index, item) {
      const card = `
            <div class="fund-card bg-gradient-to-r from-gray-50 to-gray-200 flex flex-col justify-center border-2 border-gray-300 rounded-2xl hover:shadow-lg transition duration-300">
                <img src="${item.image}" alt="${item.title}" class="rounded-t-lg w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mt-4 truncate">${item.title}</h3>
                    <p class="text-gray-700 text-sm mt-3">${item.mini_description}</p>

                <!-- Progress Bar -->
                <div class="mt-6">
                    <div class="flex justify-between text-sm text-gray-600 mb-2">
                        <span>Raised: ${item.funding_status.collected}</span>
                        <div class="text-center text-sm text-gray-700 mt-2">
                        ${item.funding_status.percentage}% Funded
                    </div>
                    </div>

                    <div class="relative max-w-5xl h-2 bg-gray-200 rounded-full overflow-hidden">
                        <div class="absolute left-0 top-0 h-full bg-green-600 transition-all duration-500"
                            style="width: ${item.funding_status.percentage}%;"></div>
                    </div>

                    
                </div>

                <!-- Buttons -->
                <div class="w-full mt-6 flex flex-col sm:flex-row justify-between gap-3">
                    <a href="//w-fundraising-details?fund=${item.id}"
                        class="w-full mt-4 inline-block bg-gray-50 border-2 border-black text-center text-black hover:bg-black hover:text-white py-2 px-4 rounded-2xl  mb-4 mx-4">View More</a>
                        <a href="//w-fundraising-details?fund=${item.id}"
                        class="w-full mt-4 inline-block bg-black border-2 border-black text-center text-white hover:bg-white hover:text-black py-2 px-4 rounded-2xl  mb-4 mx-4">Donate Now</a>
                </div>
                </div>
            </div>`;

      container.append(card);
    });

    // Remove loading spinner or message
    $("#loading-state").fadeOut(300, function () {
      $(this).remove();
    });
  }).fail(function () {
    console.error("Failed to load fundraising data.");
    $("#loading-state").html(
      '<p class="text-red-500">Failed to load fund campaigns. Please try again later.</p>'
    );
  });

  // 🔍 Search Functionality
  $("#search-input").on("input", function () {
    const searchTerm = $(this).val().toLowerCase();

    $(".fund-card").each(function () {
      const title = $(this).find("h3").text().toLowerCase();
      if (title.includes(searchTerm)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});
