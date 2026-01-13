$(document).ready(function () {
    /*** --- CUSTOM AMOUNT TOGGLE --- ***/
    $('input[name="fund_amount"]').change(function () {
        if ($(this).attr("id") === "amount-custom") {
            $("#custom-amount-container").slideDown(300);
            $("#custom_amount").focus();
        } else {
            $("#custom-amount-container").slideUp(300);
        }
    });

    /*** --- GET FUND DETAILS FROM URL --- ***/
    const params = new URLSearchParams(window.location.search);
    const fundId = params.get("fund"); // changed from ?donation= to ?fund=

    if (fundId) {
        $.getJSON("/assets/json/fundraising.json", function (data) {
            const fund = data.find((item) => item.id === fundId);

            if (fund) {
                /*** --- INITIALIZE FUND DETAILS --- ***/
                const goal = parseFloat(fund.funding_status.goal.replace(/[^\d.]/g, "")) || 0;
                const collected = parseFloat(fund.funding_status.collected.replace(/[^\d.]/g, "")) || 0;
                const percentage = fund.funding_status.percentage || 0;

                /*** --- FUND DETAILS HTML --- ***/
                const html = `
                    <div class="col-span-1 md:col-span-2 bg-white p-6 rounded-xl shadow-sm border border-gray-100" data-aos="fade-left" data-aos-duration="1500">
                        <h1 class="text-4xl font-bold mb-6 text-gray-900 leading-tight">${fund.title}</h1>
                        <img src="${fund.image}" alt="${fund.title}" class="rounded-xl w-full h-96 object-cover object-center mb-6 shadow-md" loading="lazy">

                        <div class="inline-block md:hidden bg-green-600 text-white font-bold text-lg px-6 py-4 mb-2 rounded-xl hover:bg-green-700 transition-all duration-200 w-full text-center shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                            <a href="#fund" class="text-lg font-semibold">Fund Details</a>
                        </div>

                        <p class="text-gray-700 mb-6 text-sm md:text-base leading-relaxed">${fund.description}</p>

                        <div class="flex flex-col md:flex-row items-center space-x-4 w-full">
                        <div class="w-2/3 bg-gray-200 rounded-full h-2.5 mb-4">
                            <div class="bg-green-600 h-2.5 rounded-full transition-all duration-500" style="width: ${percentage}%;"></div>
                        </div>
                        <div class="flex justify-between w-1/3 text-sm text-gray-600 mb-6">
                            <span>Raised: ${fund.funding_status.collected}</span>
                        </div></div>
                        
                    </div>

                    <div id="fund" class="col-span-1 bg-white border-2 border-gray-100 rounded-xl p-8 shadow-lg max-w-md w-full hover:shadow-xl transition-shadow duration-300" data-aos="fade-right" data-aos-duration="1500">
                        <h1 class="text-2xl font-bold text-gray-900 mb-6 leading-tight">
                            Support this cause
                        </h1>

                        <div class="flex items-center mb-6 p-4 bg-green-50 rounded-lg border border-green-100">
                            <i class="fa-solid fa-hand-holding-heart p-3 bg-green-100 text-green-600 rounded-full mr-4"></i>
                            <p class="text-lg font-medium text-gray-900">
                                Join others in helping older people live with dignity
                            </p>
                        </div>

                        <div class="mb-6">
                            <label for="fund_amount" class="block text-gray-700 font-semibold mb-3 text-lg">Enter Amount (Rs.)</label>
                            <input type="number" id="fund_amount" min="100" placeholder="Enter your fund amount"
                                class="w-full border-2 border-gray-200 rounded-xl px-4 py-3 text-center text-lg font-semibold focus:border-green-600 focus:ring-2 focus:ring-green-200 transition-all duration-200">
                        </div>

                        <div class="mb-6 p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <p class="text-xl font-bold text-gray-800 flex justify-between items-center">
                                Total Contribution:
                                <span id="totalAmount" class="text-green-600 text-2xl">Rs. 0</span>
                            </p>
                        </div>

                        <div class="flex flex-col space-y-4 w-full mb-6">
                            <button id="fundNowBtn"
                                class="text-white bg-green-600 px-6 py-3 rounded-xl border-2 border-green-600 hover:bg-white hover:text-green-600 transition duration-300">
                                Proceed to Fund
                            </button>
                            <a href="${fund.details_link}" target="_blank"
                                class="bg-gray-100 text-gray-700 font-semibold text-lg px-6 py-4 rounded-xl hover:bg-gray-200 transition-all duration-300 w-full text-center border border-gray-300 hover:border-gray-400 flex items-center justify-center space-x-2">
                                <i class="fa-solid fa-share-nodes"></i>
                                <span>View Campaign Details</span>
                            </a>
                        </div>
                    </div>
                `;

                $("#fund-details").html(html);

                /*** --- DYNAMIC UPDATES --- ***/
                $("#fund_amount").on("input", function () {
                    const value = parseFloat($(this).val()) || 0;
                    $("#totalAmount").text(`Rs. ${value.toLocaleString("en-IN")}`);
                });

                // Handle "Proceed to Fund" Button Click
                $("#fund-details").on("click", "#fundNowBtn", function (e) {
                    e.preventDefault();

                    // 1. Get the amount entered by the user
                    const total = parseFloat($("#fund_amount").val()) || 0;

                    // 2. Validation
                    if (total <= 0) {
                        $('<div class="fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg">Please enter a valid funding amount.</div>').appendTo('body').delay(3000).fadeOut(function () { $(this).remove(); });
                        return;
                    }

                    // 3. Get Project Details (Ensure 'fund' variable exists in your page context)
                    // If 'fund' is not defined globally, replace these with static strings or DOM grabs
                    const title = (typeof fund !== 'undefined') ? fund.title : "Project Funding";
                    const id = (typeof fund !== 'undefined') ? fund.id : "GEN-001";

                    // 4. Save to LocalStorage
                    localStorage.setItem("fundTotal", total);
                    localStorage.setItem("fundTitle", title);
                    localStorage.setItem("fundId", id);

                    // 5. Open the Modal (Function defined in Script 2)
                    populateAndOpenFundModal();
                });

            } else {
                $("#fund-details").html("<p class='flex justify-center items-center text-center text-gray-600 text-lg'>Fund not found. Please select a valid campaign.</p>");
            }
        }).fail(function () {
            console.error("Failed to load fund data.");
            $("#fund-details").html("<p class='text-center text-gray-600 text-lg'>Error loading fund data. Please try again later.</p>");
        });
    } else {
        $("#fund-details").html("<p class='text-center text-gray-600 text-lg'>No fund selected. Please return to the fundraising page.</p>");
    }
});
