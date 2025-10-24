<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="HelpAge Sri Lanka is a non-profit organization dedicated to improving the quality of life for senior citizens across Sri Lanka." />
    <meta name="keywords" content="HelpAge, Sri Lanka, elderly care, senior citizens, donations, NGO" />
    <title>HelpAge Sri Lanka | Supporting Elderly Citizens</title>
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playwrite+CA:wght@100..400&family=TASA+Explorer:wght@400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="min-h-screen flex flex-col bg-gray-50">
    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-orange-700 to-red-800 text-white">
            <a href="/index.html" class="flex justify-center items-center">
                <img src="/assets/images/logo-sri-lanka.webp" alt="HelpAge Sri Lanka Logo" class="w-32 h-24 py-2">
            </a>
        </section>

        <!-- Donation Cards Section -->
        <section class="container mx-auto my-16 px-4 md:px-8">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div>
                    <button
                        class="inline-block bg-gray-100 text-gray-700 shadow-md px-6 py-4 rounded-lg hover:bg-gray-200 transition-colors duration-300 font-medium text-sm border border-gray-300">
                        Select All</button>
                </div>
                <div class="text-center">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Make a Difference Today</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Choose from our ongoing campaigns and help us provide essential care and support to elderly
                        citizens in need
                    </p>
                </div>
                <div>
                    <div class="relative mt-6 md:mt-0">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                        <input type="text" id="search-input" placeholder="Search campaigns..."
                            class="pl-10 pr-4 py-3 w-full md:w-64 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-200" />

                    </div>

                    <div class="fixed bottom-0 right-0 left-0 h-44 z-[888] bg-blur-lg backdrop-blur-md hidden">

                        <button
                            onclick="window.location.href='/multiple-donation.html?donation=don1&donation=don2&donation=don3'"
                            class="fixed bottom-12 left-1/2 -translate-x-1/2 inline-block bg-green-100 shadow-xl px-6 py-4 rounded-lg hover:bg-gray-200 transition-colors duration-300 font-medium text-sm border border-gray-300 z-[999]">
                            Donate Now
                        </button>
                    </div>

                </div>

            </div>

            <!-- Donation Cards Grid -->
            <div id="donation-container" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Cards will be dynamically inserted here -->
            </div>

            <!-- Loading State -->
            <div id="loading-state" class="text-center py-12">
                <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-red-600"></div>
                <p class="mt-4 text-gray-600">Loading donation campaigns...</p>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex justify-between items-center">
                <div>

                    <p class="text-gray-400">© 2024 HelpAge Sri Lanka. All rights reserved.</p>

                </div>
                <div>
                    <a href="/terms.html" class="text-gray-400 hover:text-gray-200">Terms & Conditions</a>

                </div>
            </div>
        </div>
    </footer>

    <script>
        $(function () {
            // Hide loading state after 5 seconds
            $('#loading-state').delay(3000).fadeOut(300, function () {
                $(this).remove();
            });
        });
    </script>

    <script src="/assets/js/main.js"></script>
    <script>
        $(document).ready(function () {
            const selectedItems = [];

            // Handle checkbox selection
            $(document).on('change', '.donation-checkbox', function () {
                const donationId = $(this).data('id');
                if (this.checked) {
                    selectedItems.push(donationId);
                } else {
                    const index = selectedItems.indexOf(donationId);
                    if (index > -1) selectedItems.splice(index, 1);
                }

                // Show bottom bar when at least one is selected
                if (selectedItems.length > 0) {
                    $('.fixed.bottom-0').removeClass('hidden');
                } else {
                    $('.fixed.bottom-0').addClass('hidden');
                }
            });

            // When user clicks "Donate Now"
            $(document).on('click', '.fixed.bottom-0 button', function () {
                if (selectedItems.length === 0) {
                    alert('Please select at least one donation.');
                    return;
                }

                // Create query string from selected IDs
                const queryString = selectedItems.map(id => `donation=${id}`).join('&');
                window.location.href = `/multiple-donation.html?${queryString}`;
            });
        });
    </script>

</body>

</html>