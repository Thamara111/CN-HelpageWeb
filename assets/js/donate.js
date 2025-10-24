$(document).ready(function () {
    // Handle custom amount toggle
    $('input[name="donation_amount"]').change(function () {
        if ($(this).attr("id") === "amount-custom") {
            $("#custom-amount-container").slideDown(300);
            $("#custom_amount").focus();
        } else {
            $("#custom-amount-container").slideUp(300);
        }
    });

    // Set default selection
    $("#amount-1000").prop("checked", true);

    // Fetch donation details and set description in textarea
    const params = new URLSearchParams(window.location.search);
    const donationId = params.get("donation");

    if (donationId) {
        $.getJSON("/assets/json/donations.json", function (data) {
            const donation = data.find((item) => item.id === donationId);
            if (donation) {
                // Set the donation description in the textarea
                $("#message").val(donation.description);
            }
        }).fail(function () {
            console.error("Failed to load donation data.");
        });
    }
});