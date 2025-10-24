$(document).ready(function () {
    /*** --- CUSTOM AMOUNT TOGGLE --- ***/
    $('input[name="donation_amount"]').change(function () {
        if ($(this).attr("id") === "amount-custom") {
            $("#custom-amount-container").slideDown(300);
            $("#custom_amount").focus();
        } else {
            $("#custom-amount-container").slideUp(300);
        }
    });

    /*** --- GET DONATION DETAILS FROM URL --- ***/
    const params = new URLSearchParams(window.location.search);
    const donationId = params.get("donation");

    if (donationId) {
        $.getJSON("/assets/json/donations.json", function (data) {
            const donation = data.find((item) => item.id === donationId);

            if (donation) {
                /*** --- CALCULATE SUB-DONATIONS TOTAL --- ***/
                const subTotal = donation.subDonations
                    ? donation.subDonations.reduce((sum, sub) => sum + sub.amount, 0)
                    : 0;

                /*** --- EXTRACT NUMERIC AMOUNT --- ***/
                const numericValues = String(donation.amount || 0).match(/\d+(?:,\d{3})*(?:\.\d+)?/g);
                let amountValue = 0;

                if (numericValues && numericValues.length > 0) {
                    amountValue = parseFloat(numericValues[0].replace(/,/g, ""));
                }

                // Use subTotal only if main amount is numeric (not "Select from the options")
                if (amountValue === 0 && subTotal > 0 && !isNaN(parseFloat(donation.amount.replace(/[^0-9.]/g, '')))) {
                    amountValue = subTotal;
                }



                /*** --- BUILD SUB-DONATION HTML --- ***/
                let subHtml = "";
                if (donation.subDonations && donation.subDonations.length > 0) {
                    subHtml = `
                        <h3 class="text-xl font-semibold mt-6 mb-3">Select Sub-Donations</h3>
                        <ul class="space-y-3" id="subDonationList">
                            ${donation.subDonations.map((sub, index) => `
                                <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg border">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" class="subDonationCheck" data-amount="${sub.amount}" data-title="${sub.title}" id="sub${index}">
                                        <div class="flex flex-col">
                                            <label for="sub${index}" class="font-semibold text-gray-800 text-sm w-44">${sub.title}</label>
                                            <p class="font-normal text-gray-800 text-xs w-44">${sub.description}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <input type="number" 
                                            class="subDonationQty w-12 border rounded-lg text-center font-semibold text-gray-800" 
                                            data-id="sub${index}" min="1" max="10" value="1" disabled>
                                        <span class="subDonationSubtotal text-gray-700 font-medium" data-id="sub${index}">Rs. 0</span>
                                    </div>
                                </li>
                            `).join("")}
                        </ul>
                    `;
                }

                /*** --- INITIAL VALUES --- ***/
                let currentQty = 1;
                let subDonationTotals = {};
                let currentTotal = amountValue * currentQty;

                const updateTotal = () => {
                    let subTotal = 0;
                    $.each(subDonationTotals, (key, value) => {
                        subTotal += value;
                    });
                    currentTotal = (amountValue * currentQty) + subTotal;
                    $(".totalAmountLabel, #totalAmount").text(`Rs. ${currentTotal.toLocaleString('en-IN')}`);
                };

                const initialTotalText = amountValue > 0
                    ? `Rs. ${currentTotal.toLocaleString('en-IN')}`
                    : "Select from the options";

                $(".totalAmountLabel, #totalAmount").text(initialTotalText);

                /*** --- DONATION DETAILS HTML --- ***/
                const html = `
                    <div class="col-span-1 md:col-span-2 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <h1 class="text-4xl font-bold mb-6 text-gray-900 leading-tight">${donation.title}</h1>
                        <img src="${donation.image}" alt="${donation.title}" class="rounded-xl w-full h-96 object-cover object-center mb-6 shadow-md">
                         <div class="inline-block md:hidden bg-red-500 text-white font-bold text-lg px-6 py-4 mb-2 rounded-xl hover:bg-red-600 transition-all duration-200 w-full text-center shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <a href="#donate" class="text-lg font-semibold">Donation Details</a>
                    </div>
                        <p class="text-gray-700 mb-6 text-sm md:text-base leading-relaxed">${donation.description}</p>
                    </div>
                   
                    <div id="donate" class=" col-span-1 bg-white border-2 border-gray-100 rounded-xl p-8 shadow-lg max-w-md w-full hover:shadow-xl transition-shadow duration-300">
                        <h1 class="text-2xl font-bold text-gray-900 mb-6 leading-tight">
                            Amount per donation:
                            <span class="text-red-500 block mt-2">
                                ${amountValue > 0 ? `Rs. ${amountValue.toLocaleString('en-IN')}` : "Select from the options"}
                            </span>
                        </h1>

                        <div class="flex items-center mb-6 p-4 bg-blue-50 rounded-lg border border-blue-100">
                            <i class="fa-solid fa-chart-line p-3 bg-blue-100 text-blue-600 rounded-full mr-4"></i>
                            <p class="text-lg font-medium text-gray-900">
                                ${donation.donors || 0} people have just made a donation
                            </p>
                        </div>

                        ${subHtml}

                        <div class="mb-6">
                            <label for="donationQty" class="block text-gray-700 font-semibold mb-3 text-lg">Select Quantity</label>
                            <input type="number" id="donationQty" value="1" min="1" max="10"
                                class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 text-center text-lg font-semibold focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all duration-200">
                        </div>

                        <div class="mb-6 p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <p class="text-xl font-bold text-gray-800 flex justify-between items-center">
                                Total Amount:
                                <span id="totalAmount" class="text-red-500 text-2xl">${initialTotalText}</span>
                            </p>
                        </div>

                        <div class="flex flex-col space-y-4 w-full mb-6">
                            <button id="donateNowBtn"
                                class="text-white bg-red-600 px-6 py-3 rounded-xl border-2 border-red-600 hover:bg-white hover:text-red-600 transition duration-300">
                                Proceed to Donate
                            </button>
                            <a href="#" class="bg-gray-100 text-gray-700 font-semibold text-lg px-6 py-4 rounded-xl hover:bg-gray-200 transition-all duration-300 w-full text-center border border-gray-300 hover:border-gray-400 flex items-center justify-center space-x-2">
                                <i class="fa-solid fa-share-nodes"></i>
                                <span>Share this Campaign</span>
                            </a>
                        </div>
                    </div>
                `;

                $("#donation-details").html(html);

                // Smooth scroll to top for better mobile UX
                $('html, body').animate({ scrollTop: $('#donation-details').offset().top - 80 }, 400);


                // Sub-donation checkbox toggle
                $("#donation-details").on("change", ".subDonationCheck", function () {
                    const id = $(this).attr("id");
                    const amount = parseFloat($(this).data("amount"));
                    const $qtyInput = $(`.subDonationQty[data-id="${id}"]`);
                    const $subtotalSpan = $(`.subDonationSubtotal[data-id="${id}"]`);

                    if (this.checked) {
                        $qtyInput.prop("disabled", false);
                        const qty = parseInt($qtyInput.val()) || 1;
                        subDonationTotals[id] = amount * qty;
                        $subtotalSpan.text(`Rs. ${(amount * qty).toLocaleString('en-IN')}`);
                    } else {
                        $qtyInput.prop("disabled", true).val(1);
                        delete subDonationTotals[id];
                        $subtotalSpan.text(`Rs. 0`);
                    }
                    updateTotal();
                });

                // Main donation quantity change
                $("#donation-details").on("input", "#donationQty", function () {
                    currentQty = parseInt($(this).val()) || 1;
                    updateTotal();
                });

                // Sub-donation quantity change
                $("#donation-details").on("input", ".subDonationQty", function () {
                    const id = $(this).data("id");
                    const $checkbox = $(`#${id}`);
                    const amount = parseFloat($checkbox.data("amount"));
                    const qty = parseInt($(this).val()) || 1;

                    if ($checkbox.is(":checked")) {
                        subDonationTotals[id] = amount * qty;
                        $(`.subDonationSubtotal[data-id="${id}"]`).text(`Rs. ${(amount * qty).toLocaleString('en-IN')}`);
                    }
                    updateTotal();
                });

                // Donate button click
                $("#donation-details").on("click", "#donateNowBtn", function (e) {
                    e.preventDefault();

                    const donationTitles = [donation.title];
                    const selectedSubDonations = [];

                    $(".subDonationCheck:checked").each(function () {
                        const id = $(this).attr("id");
                        const title = $(this).data("title");
                        const amount = parseFloat($(this).data("amount"));
                        const qty = parseInt($(`.subDonationQty[data-id="${id}"]`).val()) || 1;

                        selectedSubDonations.push({ title, amount, qty });
                        donationTitles.push(`${title} (x${qty})`);
                    });

                    localStorage.setItem("donationTotal", currentTotal);
                    localStorage.setItem("donationTitles", JSON.stringify(donationTitles));
                    localStorage.setItem("subDonations", JSON.stringify(selectedSubDonations));

                    window.location.href = "/donate.html";
                });
            } else {
                $("#donation-details").html("<p class='text-center text-gray-600 text-lg'>Donation not found. Please select a valid donation.</p>");
                $(".totalAmountLabel").text("Rs. 0");
            }
        }).fail(function () {
            console.error("Failed to load donation data.");
            $("#donation-details").html("<p class='text-center text-gray-600 text-lg'>Error loading donation data. Please try again later.</p>");
            $(".totalAmountLabel").text("Rs. 0");
        });
    } else {
        // Default case
        $("#amount-1000").prop("checked", true);
        $(".totalAmountLabel").text("Rs. 1,000");
    }
});
