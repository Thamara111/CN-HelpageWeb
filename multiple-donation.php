<?php
/* =============================
   PAGE META
   ============================= */
$meta_title = "FAQs - HelpAge Sri Lanka";
$meta_description = "Frequently asked questions about HelpAge Sri Lanka, including donation information, tax-deductibility, and more.";
$meta_keywords = "HelpAge Sri Lanka, FAQs, Donations, Tax Deductible, Recurring Donations";
$meta_canonical = "https://helpagesl.org/faqs";
$og_image = "https://helpagesl.org/assets/images/og-faqs.webp"; // optional Open Graph image

/* =============================
   LAYOUT
   ============================= */
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<body class="min-h-screen flex flex-col bg-gray-50 font-['Lexend']">
    <main class="flex-grow">

        <!-- Selected Donations Section -->
        <section class="container mx-auto my-16 px-4 md:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Your Selected Donations</h2>

                <div id="selected-donations-container" class="space-y-6">
                    <!-- Dynamically loaded donations -->
                </div>

                <!-- Total Section -->
                <div id="total-section" class="mt-12 p-6 bg-white rounded-xl shadow-md border border-gray-200 hidden">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-2xl font-bold text-gray-900">Total Amount</h3>
                        <h3 id="total-amount" class="text-2xl font-bold text-red-600">Rs. 0</h3>
                    </div>

                    <div class="flex flex-col md:flex-row gap-4">
                        <button id="proceed-to-payment"
                            class="bg-red-500 text-white font-bold text-lg px-8 py-4 rounded-xl hover:bg-red-600 transition-all duration-200 flex-1 text-center shadow-md hover:shadow-lg">
                            Proceed to Payment
                        </button>
                        <button onclick="window.location.href='/w-donation'"
                            class="bg-gray-100 text-gray-700 font-semibold text-lg px-8 py-4 rounded-xl hover:bg-gray-200 transition-all duration-200 flex-1 text-center border border-gray-300">
                            Back to Selection
                        </button>
                    </div>
                </div>

                <!-- Empty State -->
                <div id="empty-state" class="text-center py-12 hidden">
                    <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
                    <p class="text-xl text-gray-600 mb-4">No donations selected</p>
                    <button onclick="window.location.href='/w-donation'"
                        class="mt-4 bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-red-600 transition-colors duration-300">
                        Back to Selection
                    </button>
                </div>

                <!-- Loading State -->
                <div id="loading-state" class="text-center py-12">
                    <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-red-600"></div>
                    <p class="mt-4 text-gray-600">Loading your selected donations...</p>
                </div>
            </div>
        </section>
    </main>

    

    <script>
        function extractAmount(amountStr) {
            if (!amountStr) return 0;
            if (amountStr.includes('-')) amountStr = amountStr.split('-')[0].trim();
            const numeric = amountStr.match(/\d+(?:,\d{3})*(?:\.\d+)?/);
            return numeric ? parseFloat(numeric[0].replace(/,/g, "")) : 0;
        }

        $(document).ready(function () {
            const container = $('#selected-donations-container');
            const emptyState = $('#empty-state');
            const totalSection = $('#total-section');
            const loadingState = $('#loading-state');
            let totalAmount = 0;

            const params = new URLSearchParams(window.location.search);
            let selectedIds = params.getAll('donation');
            if (selectedIds.length === 0 && params.get('donation')) {
                selectedIds = [params.get('donation')];
            }

            if (selectedIds.length === 0) {
                loadingState.hide();
                emptyState.removeClass('hidden');
                totalSection.addClass('hidden');
                return;
            }

            $.getJSON("/assets/json/donations.json", function (data) {
                loadingState.hide();
                const selected = data.filter(item => selectedIds.includes(String(item.id)));

                if (selected.length === 0) {
                    emptyState.removeClass('hidden');
                    totalSection.addClass('hidden');
                    return;
                }

                emptyState.addClass('hidden');
                totalSection.removeClass('hidden');

                selected.forEach(item => {
                    const amountValue = extractAmount(item.amount);
                    totalAmount += amountValue;

                    // Build sub-donation HTML (if any)
                    let subHtml = "";
                    if (item.subDonations && item.subDonations.length > 0) {
                        subHtml = `
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Select Sub-Donations</h4>
                    <ul class="space-y-2">
                        ${item.subDonations.map((sub, index) => `
                        <li class="flex justify-between items-center bg-gray-50 p-3 rounded-lg border">
                            <div class="flex items-center space-x-3">
                                <input type="checkbox" class="subDonationCheck" 
                                    data-amount="${sub.amount}" 
                                    data-id="${item.id}" 
                                    id="sub${item.id}-${index}">
                                <label for="sub${item.id}-${index}" class="text-sm font-medium text-gray-800">${sub.title}</label>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input type="number" 
                                    class="subDonationQty w-12 border rounded-lg text-center font-semibold text-gray-800" 
                                    data-parent="${item.id}"
                                    data-amount="${sub.amount}"
                                    id="subQty${item.id}-${index}" 
                                    min="1" max="10" value="1" disabled>
                                <span class="subDonationSubtotal text-gray-700 font-medium" 
                                    data-parent="${item.id}" 
                                    data-idx="${index}">Rs. 0</span>
                            </div>
                        </li>`).join('')}
                    </ul>
                </div>`;
                    }

                    const html = `
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex flex-col gap-4 donation-item" data-id="${item.id}">
                <div class="flex items-start gap-6">
                    <img src="${item.image}" alt="${item.title}" class="w-24 h-24 rounded-lg object-cover flex-shrink-0">
                    <div class="flex flex-col md:flex-row justify-between flex-1">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">${item.title}</h3>
                        <p class="text-gray-600 mb-3">
                            ${isNaN(amountValue) || amountValue === 0 && !/\d/.test(item.amount)
                            ? item.amount
                            : `Rs. ${amountValue.toLocaleString()}`}
                        </p>
                        </div>
                        <div class="flex items-center gap-3 mb-2">
                            <label class="text-gray-700 font-medium">Qty:</label>
                            <input type="number" min="1" value="1"
                                class="donation-qty w-20 border border-gray-300 rounded-lg px-3 py-2 text-center"
                                data-amount="${amountValue}" data-id="${item.id}">
                                <p class="text-lg font-semibold text-red-600">
                            Total: <span class="donation-amount" data-id="${item.id}">Rs. ${amountValue.toLocaleString()}</span>
                        </p>
                        </div>
                    </div>
                </div>
                ${subHtml}
            </div>`;

                    container.append(html);
                });

                // --- INITIAL TOTAL DISPLAY ---
                $("#total-amount").text(`Rs. ${totalAmount.toLocaleString()}`);

                // --- DONATION QTY CHANGE ---
                container.on("input", ".donation-qty", function () {
                    const id = $(this).data("id");
                    const qty = parseInt($(this).val()) || 1;
                    const baseAmount = parseFloat($(this).data("amount"));
                    const newTotal = qty * baseAmount;
                    $(`.donation-amount[data-id="${id}"]`).text(`Rs. ${newTotal.toLocaleString()}`);
                    recalcTotal();
                });

                // --- SUB-DONATION CHECKBOX ---
                container.on("change", ".subDonationCheck", function () {
                    const $this = $(this);
                    const id = $this.data("id");
                    const amount = parseFloat($this.data("amount"));
                    const $qtyInput = $(`#subQty${id}-${$this.attr("id").split('-').pop()}`);
                    const $subtotal = $(`.subDonationSubtotal[data-parent="${id}"][data-idx="${$this.attr("id").split('-').pop()}"]`);

                    if ($this.is(":checked")) {
                        $qtyInput.prop("disabled", false);
                        const qty = parseInt($qtyInput.val()) || 1;
                        $subtotal.text(`Rs. ${(amount * qty).toLocaleString()}`);
                    } else {
                        $qtyInput.prop("disabled", true).val(1);
                        $subtotal.text("Rs. 0");
                    }
                    recalcTotal();
                });

                // --- SUB-DONATION QTY CHANGE ---
                container.on("input", ".subDonationQty", function () {
                    const qty = parseInt($(this).val()) || 1;
                    const amount = parseFloat($(this).data("amount"));
                    const parentId = $(this).data("parent");
                    const index = $(this).attr("id").split('-').pop();
                    const subtotal = qty * amount;
                    $(`.subDonationSubtotal[data-parent="${parentId}"][data-idx="${index}"]`).text(`Rs. ${subtotal.toLocaleString()}`);
                    recalcTotal();
                });

                // --- RECALCULATE TOTAL ---
                function recalcTotal() {
                    let total = 0;

                    // Add main donations
                    $(".donation-qty").each(function () {
                        const q = parseInt($(this).val()) || 1;
                        const a = parseFloat($(this).data("amount"));
                        total += q * a;
                    });

                    // Add sub-donations
                    $(".subDonationCheck:checked").each(function () {
                        const parent = $(this).data("id");
                        const amount = parseFloat($(this).data("amount"));
                        const qty = parseInt($(`.subDonationQty[data-parent="${parent}"][data-amount="${amount}"]`).val()) || 1;
                        total += qty * amount;
                    });

                    $("#total-amount").text(`Rs. ${total.toLocaleString()}`);
                }

                // --- PROCEED TO PAYMENT ---
                $('#proceed-to-payment').click(function () {
                    const totalText = $("#total-amount").text();
                    const totalNumeric = totalText.replace(/[^\d]/g, "");
                    const total = parseFloat(totalNumeric) || 0;

                    const titles = [];
                    $(".donation-item").each(function () {
                        const title = $(this).find("h3").text().trim();
                        titles.push(title);

                        $(this).find(".subDonationCheck:checked").each(function () {
                            const subTitle = $(this).next("label").text().trim();
                            const qty = $(this).closest("li").find(".subDonationQty").val() || 1;
                            titles.push(`${subTitle} (x${qty})`);
                        });
                    });

                    localStorage.setItem("donationTotal", total);
                    localStorage.setItem("donationTitles", JSON.stringify(titles));

                    window.location.href = "/pay-safe";
                });

            }).fail(function () {
                console.error("Failed to load donation data.");
                loadingState.hide();
                emptyState.removeClass('hidden');
            });
        });
    </script>


<?php require_once 'layouts/footer.php'; ?>