$(document).ready(function () {
    const container = $("#donation-container");
    let donationData = []; // Store donation data for later use

    $.getJSON("/assets/json/donations.json", function (data) {
        donationData = data; // Store the data
        
        $.each(data, function (index, item) {
            const card = `
            
            <div class="relative flex flex-col justify-center border-2 border-gray-300 rounded-2xl p-4">
                    <label class="absolute top-4 right-4 flex items-center space-x-2">
                    <input 
                        type="checkbox"
                        name="select"
                        id="select${item.id}"
                        class="donation-checkbox w-5 h-5 border-gray-300 rounded-full text-green-600 focus:ring-green-500 hidden"
                        data-id="${item.id}"
                    >
                    </label>
                    <img src="${item.image}" alt="" class="rounded-lg w-full h-48 object-cover" data-id="${item.id}">
                    <h3 class="font-semibold text-lg mt-4 truncate">${item.title}</h3>
                    <p class="text-gray-700 text-sm mt-4">${item.minidescription}</p>
                    <p class="text-green-800 text-lg mt-4">${item.amount}</p>
                    <a href="/w-donation-details.html?donation=${item.id}"
                        class="mt-4 inline-block bg-white border-2 border-black text-center text-black hover:bg-black hover:text-white py-2 px-4 rounded-2xl">Proceed to Donate</a>
                </div>`;
            
            container.append(card);
        });
        
        // Hide loading state
        $('#loading-state').fadeOut(300, function () {
            $(this).remove();
        });
    }).fail(function () {
        console.error("Failed to load donation data.");
        $('#loading-state').html('<p class="text-red-500">Failed to load donation campaigns. Please try again later.</p>');
    });

    // Select All functionality - just show checkboxes, don't select
    $('button').on('click', function() {
        if ($(this).text() === "Select All") {
            // Show all checkboxes without selecting them
            $('.donation-checkbox').removeClass('hidden');
            $(this).text('Cancel Selection');
        } else {
            // Hide all checkboxes
            $('.donation-checkbox').addClass('hidden');
            $('.donation-checkbox').prop('checked', false);
            $(this).text('Select All');
            
            // Hide donate button
            $('.fixed.bottom-0').addClass('hidden');
        }
    });

    // Individual checkbox functionality
    $(document).on('change', '.donation-checkbox', function() {
        const checkedCount = $('.donation-checkbox:checked').length;
        
        if (checkedCount > 0) {
            // Show donate button
            $('.fixed.bottom-0').removeClass('hidden');
        } else {
            // Hide donate button
            $('.fixed.bottom-0').addClass('hidden');
        }
    });

    // Search functionality
    $('#search-input').on('input', function() {
        const searchTerm = $(this).val().toLowerCase();
        
        $('.donation-card').each(function() {
            const title = $(this).find('h2').text().toLowerCase();
            if (title.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    // Donate Now button click - pass selected items via URL
    $(document).on('click', '.fixed button', function() {
        const selectedItems = [];
        
        $('.donation-checkbox:checked').each(function() {
            const itemId = $(this).data('id');
            selectedItems.push(itemId);
        });
        
        // Redirect to multiple donations page with selected IDs as URL parameters
        if (selectedItems.length > 0) {
            const queryString = selectedItems.map(id => `donation=${id}`).join('&');
            window.location.href = `/multiple-donation.html?${queryString}`;
        }
    });
});