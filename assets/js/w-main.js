$(document).ready(function () {
  const container = $("#donation-container");
  let donationData = []; // Store donation data for later use

  $.getJSON("/assets/json/donations.json", function (data) {
    donationData = data; // Store the data

    $.each(data, function (index, item) {
      const card = `

            <div class="relative flex flex-col justify-center bg-gradient-to-r from-gray-50 to-gray-200 border border-gray-300 rounded-2xl shadow hover:shadow-xl transition-shadow duration-300 donation-card">
                  <label class="absolute -top-2 -right-2 flex items-center space-x-2 z-20">
                  <input 
                    type="checkbox"
                    name="select"
                    id="select${item.id}"
                    class="donation-checkbox appearance-none w-5 h-5 rounded-full border-2 border-gray-400 bg-white
                            checked:bg-green-600 checked:border-green-600 
                            focus:outline-none focus:ring-2 focus:ring-green-500 cursor-pointer accent-green-600"
                    data-id="${item.id}"
                  >

                </label>
                <img src="${item.image}" alt="${item.title}" class="rounded-t-lg w-full h-48 object-cover" loading="lazy" data-id="${item.id}">
                <h3 class="font-semibold text-lg mt-4 truncate px-6">${item.title}</h3>
                <p class="text-gray-700 text-sm mt-4 px-6">${item.minidescription}</p>
                <p class="text-green-800 text-lg mt-4 px-6">${item.amount}</p>
                <a href="/w-donation-details?donation=${item.id}"
                        class="mt-4 inline-block bg-gray-50 border-2 border-black text-center text-black hover:bg-black hover:text-white py-2 px-4 rounded-2xl mb-4 mx-4">Donate Now</a>
            </div>`;

      container.append(card);
    });

    // Hide loading state
    $("#loading-state").fadeOut(300, function () {
      $(this).remove();
    });
  }).fail(function () {
    console.error("Failed to load donation data.");
    $("#loading-state").html(
      '<p class="text-red-500">Failed to load donation campaigns. Please try again later.</p>'
    );
  });

  // // Select All functionality - just show checkboxes, don't select
  // $("button").on("click", function () {
  //   if ($(this).text() === "Select All") {
  //     // Show all checkboxes without selecting them
  //     $(".donation-checkbox").removeClass("hidden");
  //     $(this).text("Cancel Selection");
  //   } else {
  //     // Hide all checkboxes
  //     $(".donation-checkbox").addClass("hidden");
  //     $(".donation-checkbox").prop("checked", false);
  //     $(this).text("Select All");

  //     // Hide donate button
  //     $(".fixed.bottom-0").addClass("hidden");
  //   }
  // });

  $(document).on("change", ".donation-checkbox", function () {
    const checkedCount = $(".donation-checkbox:checked").length;

    // Show / hide multi donate bar
    if (checkedCount > 0) {
      $("#multi-donate-bar").removeClass("hidden");
    } else {
      $("#multi-donate-bar").addClass("hidden");
    }

    $(document).on("change", ".donation-checkbox", function () {
      const checkedCount = $(".donation-checkbox:checked").length;

      // Show / hide multi donate bar
      if (checkedCount > 0) {
        $("#multi-donate-bar").removeClass("hidden");
      } else {
        $("#multi-donate-bar").addClass("hidden");
      }

      // ✅ Success message when checked
      if ($(this).is(":checked")) {
        $('<div class="fixed top-2 right-8 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">' +
          'Donation selected successfully' +
          '</div>')
          .appendTo('body')
          .delay(2500)
          .fadeOut(function () {
            $(this).remove();
          });
      }
    });

  });



  // Search functionality
  $("#search-input").on("input", function () {
    const searchTerm = $(this).val().toLowerCase();

    $(".donation-card").each(function () {
      const title = $(this).find("h3").text().toLowerCase();
      if (title.includes(searchTerm)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });

  $("#go-to-multiple").on("click", function () {
    const selectedItems = [];

    $(".donation-checkbox:checked").each(function () {
      selectedItems.push($(this).data("id"));
    });

    if (selectedItems.length === 0) return;

    const query = selectedItems.map(id => `donation=${id}`).join("&");
    window.location.href = `/multiple-donation?${query}`;
  });

});
