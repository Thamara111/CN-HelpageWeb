$(document).ready(function () {
    const container = $("#donation-container");
    let donationData = []; // Store donation data for later use

    $.getJSON("/assets/json/donations.json", function (data) {
        donationData = data; // Store the data
        
        $.each(data, function (index, item) {
            const card = `
            
            <div class="rounded-lg hover:shadow-lg transition-shadow duration-300 donation-card h-full" data-id="${item.id}">
    <div
        class="relative h-full rounded-lg hover:shadow-lg transition-shadow duration-300 bg-white border border-gray-200 overflow-hidden">
        <img src="${item.image}"
            class="w-full h-48 rounded-t-lg hover:scale-105 transition-transform duration-300 object-cover object-center"
            alt="${item.title}">


        <div class="p-4">
            <div class="flex flex-col justify-start items-start space-y-2">
                <h2 class="text-xl font-bold text-gray-800 truncate max-w-full">${item.title}</h2>
                <p class="text-sm font-semibold text-gray-600 max-w-full">${item.minidescription}</p>
                <h2 class="text-lg font-semibold text-green-600 whitespace-nowrap">${item.amount}</h2>
                <a href="/donation-details?donation=${item.id}"
                    class="inline-block bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition-colors duration-300 font-medium text-sm border border-gray-300 ">
                    Proceed to Donate
                </a>
            </div>
                </div>
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