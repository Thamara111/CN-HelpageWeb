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

    <section id="fundModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">

        <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity backdrop-blur-sm" id="modalBackdrop">
        </div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">

                <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all 
                        w-full sm:max-w-lg border border-gray-200 
                        max-h-[95dvh] overflow-y-auto">

                    <button type="button" id="closeModalBtn"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-full p-2 transition-colors z-20 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-6">

                        <h2 class="text-lg md:text-xl 2xl:text-2xl font-bold text-green-700 mb-2 text-center">
                            Confirm Funding
                        </h2>
                        <p class="text-gray-600 text-sm text-center mb-6 px-4">
                            Complete your details to proceed.
                        </p>

                        <form id="fundForm" action="#" method="POST">

                            <div
                                class="flex flex-col justify-center items-center mb-6 bg-green-50 border border-green-100 rounded-xl p-2 2xl:p-4">
                                <p id="modal-fund-title" class="text-gray-800 font-semibold text-center"></p>
                                <div class="h-px w-full bg-green-200 my-2"></div>
                                <p class="text-lg md:text-xl 2xl:text-2xl font-bold text-green-600 text-center">
                                    Total: <span id="modal-fund-total">Rs. 0</span>
                                </p>
                            </div>

                            <div class="space-y-4">
                                <h3 class="text-lg 2xl:text-2xl font-bold text-gray-900 flex items-center">
                                    <i class="fas fa-user-circle mr-2 text-green-500 text-xl"></i> Your Information
                                </h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                    <div>
                                        <label for="name"
                                            class="block text-xs 2xl:text-sm font-semibold text-gray-700 mb-1">Full Name
                                            *</label>
                                        <input type="text" id="name" name="name" required
                                            class="border border-gray-300 rounded-lg p-2 w-full focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all  text-xs 2xl:text-sm"
                                            placeholder="Enter full name" />
                                    </div>

                                    <div>
                                        <label for="email"
                                            class="block  text-xs 2xl:text-sm font-semibold text-gray-700 mb-1">Email
                                            *</label>
                                        <input type="email" id="email" name="email" required
                                            class="border border-gray-300 rounded-lg p-2 w-full focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all  text-xs 2xl:text-sm"
                                            placeholder="Enter email address" />
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="message"
                                            class="block  text-xs 2xl:text-sm font-semibold text-gray-700 mb-1">Message</label>
                                        <textarea id="message" name="message"
                                            class="border border-gray-300 rounded-lg p-2 w-full focus:border-green-500 focus:ring-2 focus:ring-green-200 outline-none transition-all resize-none  text-xs 2xl:text-sm"
                                            placeholder="Optional message..." rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <label
                                    class="flex items-center bg-gray-50 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-100 transition">
                                    <input type="checkbox" id="anonymous-yes" name="anonymous" value="yes"
                                        class="h-3 2xl:h-5 w-3 2xl:w-5 text-green-600 focus:ring-green-500 rounded border-gray-300" />
                                    <span class="ml-3  text-xs 2xl:text-sm font-medium text-gray-700 select-none">
                                        Keep my funding anonymous
                                    </span>
                                </label>
                            </div>

                            <div class="mt-6">
                                <button type="submit"
                                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold  text-xs 2xl:text-sm py-3 2xl:py-3.5 px-4 rounded-xl transition-all duration-300 transform active:scale-95 shadow-lg flex items-center justify-center space-x-2">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Proceed to Pay</span>
                                </button>
                                <div class="mt-3 flex items-center justify-center space-x-1 text-xs text-gray-500">
                                    <i class="fas fa-lock text-green-500"></i>
                                    <span>Secure and encrypted payment</span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // --- HELPER: Extract numeric amount from string ---
        function extractAmount(amountStr) {
            if (!amountStr) return 0;
            if (amountStr.includes('-')) amountStr = amountStr.split('-')[0].trim();
            const numeric = amountStr.match(/\d+(?:,\d{3})*(?:\.\d+)?/);
            return numeric ? parseFloat(numeric[0].replace(/,/g, "")) : 0;
        }

        // --- HELPER: Open the Modal ---
        function populateAndOpenFundModal() {
            // Load data from storage (set by the "Proceed" button)
            const storedTotal = localStorage.getItem("fundTotal") || 0;
            const storedTitle = localStorage.getItem("fundTitle") || "General Donation";

            // Update Modal UI
            $("#modal-fund-title").text(storedTitle);
            $("#modal-fund-total").text(`Rs. ${Number(storedTotal).toLocaleString()}`);

            // Show Modal
            $("#fundModal").removeClass("hidden");
            $("body").addClass("overflow-hidden"); // Stop background scrolling
        }

        // --- HELPER: Close the Modal ---
        function closeFundModal() {
            $("#fundModal").addClass("hidden");
            $("body").removeClass("overflow-hidden");
        }

        $(document).ready(function () {
            const container = $('#selected-donations-container');
            const emptyState = $('#empty-state');
            const totalSection = $('#total-section');
            const loadingState = $('#loading-state');
            let totalAmount = 0;

            // --- 1. LOAD DONATION DATA ---
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

                    // Build sub-donation HTML
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
                                    data-title="${sub.title}"
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
                            <h3 class="text-xl font-bold text-gray-900 mb-1 donation-title-text">${item.title}</h3>
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

                $("#total-amount").text(`Rs. ${totalAmount.toLocaleString()}`);

                // --- EVENTS ---
                // Recalculate on Main Qty Change
                container.on("input", ".donation-qty", function () {
                    const id = $(this).data("id");
                    const qty = parseInt($(this).val()) || 1;
                    const baseAmount = parseFloat($(this).data("amount"));
                    const newTotal = qty * baseAmount;
                    $(`.donation-amount[data-id="${id}"]`).text(`Rs. ${newTotal.toLocaleString()}`);
                    recalcTotal();
                });

                // Checkbox toggle logic
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

                // Sub-donation Qty Change
                container.on("input", ".subDonationQty", function () {
                    const qty = parseInt($(this).val()) || 1;
                    const amount = parseFloat($(this).data("amount"));
                    const parentId = $(this).data("parent");
                    const index = $(this).attr("id").split('-').pop();
                    const subtotal = qty * amount;
                    $(`.subDonationSubtotal[data-parent="${parentId}"][data-idx="${index}"]`).text(`Rs. ${subtotal.toLocaleString()}`);
                    recalcTotal();
                });

                function recalcTotal() {
                    let total = 0;
                    $(".donation-qty").each(function () {
                        const q = parseInt($(this).val()) || 1;
                        const a = parseFloat($(this).data("amount"));
                        total += q * a;
                    });
                    $(".subDonationCheck:checked").each(function () {
                        const parent = $(this).data("id");
                        const amount = parseFloat($(this).data("amount"));
                        const qty = parseInt($(`.subDonationQty[data-parent="${parent}"][data-amount="${amount}"]`).val()) || 1;
                        total += qty * amount;
                    });
                    $("#total-amount").text(`Rs. ${total.toLocaleString()}`);
                }

                // --- 2. UPDATED CLICK HANDLER (TRIGGERS MODAL, NOT REDIRECT) ---
                $('#proceed-to-payment').click(function () {
                    const totalText = $("#total-amount").text();
                    const totalNumeric = totalText.replace(/[^\d]/g, "");
                    const total = parseFloat(totalNumeric) || 0;

                    if (total <= 0) {
                        alert("Please select at least one donation.");
                        return;
                    }

                    // Gather Titles
                    const titles = [];
                    $(".donation-item").each(function () {
                        // Main Item
                        const mainTitle = $(this).find(".donation-title-text").text().trim();
                        const mainQty = $(this).find(".donation-qty").val() || 1;
                        if (mainQty > 1) {
                            titles.push(`${mainTitle} (x${mainQty})`);
                        } else {
                            titles.push(mainTitle);
                        }

                        // Sub Items
                        $(this).find(".subDonationCheck:checked").each(function () {
                            const subTitle = $(this).data("title");
                            const qty = $(this).closest("li").find(".subDonationQty").val() || 1;
                            titles.push(`${subTitle} (x${qty})`);
                        });
                    });

                    // Join titles into a string string for the API description
                    const descriptionStr = titles.join(", ");

                    // Save to LocalStorage using the keys the Modal expects
                    localStorage.setItem("fundTotal", total);
                    localStorage.setItem("fundTitle", descriptionStr);

                    // Open the Modal
                    populateAndOpenFundModal();
                });

            }).fail(function () {
                console.error("Failed to load donation data.");
                loadingState.hide();
                emptyState.removeClass('hidden');
            });

            // --- 3. MODAL LOGIC & DIRECT API SUBMISSION ---

            // Close buttons
            $("#closeModalBtn, #modalBackdrop").on("click", closeFundModal);

            // Form Submit -> Direct API Redirect
            $("#fundForm").on("submit", function (e) {
                e.preventDefault();

                const name = $("#name").val().trim() || "Anonymous";
                const email = $("#email").val().trim();

                // Retrieve final data
                const amount = Number(localStorage.getItem("fundTotal")) || 0;
                const title = localStorage.getItem("fundTitle") || "Donation";
                const currency = "LKR";

                if (amount <= 0) {
                    alert("Invalid amount");
                    return;
                }

                // Generate Order ID
                const now = new Date();
                const datePart = now.getFullYear().toString().slice(-2)
                    + String(now.getMonth() + 1).padStart(2, "0")
                    + String(now.getDate()).padStart(2, "0");
                const randomPart = Math.floor(Math.random() * 9000) + 1000;
                const cleanName = name.replace(/[^a-zA-Z0-9]/g, "").toUpperCase().slice(0, 6);
                const orderId = `HELP${datePart}${cleanName}${randomPart}`;

                // Build Payment URL
                const description = encodeURIComponent(title);
                const paymentUrl = `https://helpage.go.digitable.io/paysafe/sey?currency=${currency}&amount=${amount}&orderId=${orderId}&description=${description}&email=${encodeURIComponent(email)}`;

                // Show loading on button
                $(this).find("button[type='submit']").html('<i class="fas fa-spinner fa-spin animate-spin"></i> Processing...');

                // Redirect directly to API
                window.location.href = paymentUrl;
            });
        });
    </script>

    <?php require_once 'layouts/footer.php'; ?>