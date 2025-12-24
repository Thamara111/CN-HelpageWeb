<?php
/* =============================
   404 PAGE META
   ============================= */
http_response_code(404);

$meta_title = "404 Not Found - HelpAge Sri Lanka";
$meta_description = "The page you are looking for does not exist.";
$meta_keywords = "HelpAge Sri Lanka, 404, Page Not Found";
$meta_canonical = "https://helpagesl.org/404";
$og_image = "https://helpagesl.org/assets/images/og-404.webp"; // optional Open Graph image

/* =============================
   LAYOUT
   ============================= */
require_once 'layouts/head.php';
require_once 'layouts/header.php';
?>


<main class="container mx-auto py-20 text-center">
    <h1 class="text-6xl font-bold text-red-600">404</h1>
    <h2 class="text-2xl mt-4">Page Not Found</h2>
    <p class="mt-4 text-gray-600">
        Sorry, the page you’re looking for doesn’t exist or has been moved.
    </p>

    <a href="/" class="inline-block mt-6 px-6 py-3 bg-red-600 text-white rounded">
        Go back home
    </a>
</main>

<?php require_once 'layouts/footer.php'; ?>
