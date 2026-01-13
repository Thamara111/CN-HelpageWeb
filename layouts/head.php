<?php
/* =====================================================
    GLOBAL SEO DEFAULTS (CAN BE OVERRIDDEN PER PAGE)
   ===================================================== */

$meta_title = $meta_title ?? "HelpAge Sri Lanka";
$meta_description = $meta_description ?? "HelpAge Sri Lanka is a non-profit organization dedicated to improving the quality of life of senior citizens across Sri Lanka.";
$meta_keywords = $meta_keywords ?? "HelpAge Sri Lanka, elderly care, senior citizens, donations";
$meta_canonical = $meta_canonical ?? "https://helpagesl.org/";
$og_image = $og_image ?? "https://helpagesl.org/assets/images/og-default.webp";

/* =====================================================
    BREADCRUMBS (OPTIONAL)
   ===================================================== */

$breadcrumbs = $breadcrumbs ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F871ZCTMQ2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-F871ZCTMQ2');
    </script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===================== SEO ===================== -->
    <title><?= htmlspecialchars($meta_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">

    <?php if (!empty($meta_canonical)): ?>
        <link rel="canonical" href="<?= htmlspecialchars($meta_canonical) ?>">
    <?php endif; ?>

    <!-- Open Graph OG -->
    <meta property="og:title" content="<?= htmlspecialchars($meta_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($meta_canonical) ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="HelpAge Sri Lanka">
    <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Prevents Google from indexing the error page -->
    <meta name="robots" content="noindex, follow">

    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/lite-youtube-embed@0.3.2/src/lite-yt-embed.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lite-youtube-embed@0.3.2/src/lite-yt-embed.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "NonprofitOrganization",
        "name": "HelpAge Sri Lanka",
        "url": "https://helpagesl.org/",
        "logo": "https://helpagesl.org/assets/images/logo-sri-lanka.webp",
        "description": "HelpAge Sri Lanka is a non-profit organization dedicated to improving the quality of life for senior citizens across Sri Lanka.",
        "foundingDate": "1984",
        "sameAs": [
        "https://www.facebook.com/HelpAgeSriLanka",
        "https://www.linkedin.com/company/helpage-sri-lanka"
        ],
        "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer support",
        "url": "https://helpagesl.org/contact"
        }
    }
    </script>

    <script type="application/ld+json">
    {
     "@context": "https://schema.org",
     "@type": "WebSite",
     "name": "HelpAge Sri Lanka",
     "url": "https://helpagesl.org/",
     "potentialAction": {
         "@type": "SearchAction",
         "target": "https://helpagesl.org/search?q={search_term_string}",
         "query-input": "required name=search_term_string"
     }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "<?= htmlspecialchars($meta_title) ?>",
      "description": "<?= htmlspecialchars($meta_description) ?>",
      "author": {
        "@type": "Organization",
        "name": "HelpAge Sri Lanka"
      },
      "publisher": {
        "@type": "Organization",
        "name": "HelpAge Sri Lanka",
        "logo": {
          "@type": "ImageObject",
          "url": "https://helpagesl.org/assets/images/logo-sri-lanka.webp"
        }
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= htmlspecialchars($meta_canonical) ?>"
      }
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "Health Program for Elderly",
      "eventStatus": "https://schema.org/EventScheduled",
      "eventAttendanceMode": "https://schema.org/OnlineEventAttendanceMode",
      "organizer": {
        "@type": "Organization",
        "name": "HelpAge Sri Lanka",
        "url": "https://helpagesl.org/"
      }
    }
    </script>


    <style>
        /* Custom Scrollbar Styling */
        /* Works on Chrome, Edge, and Safari */
        ::-webkit-scrollbar {
            width: 10px;
            /* Width of the vertical scrollbar */
            height: 10px;
            /* Height of the horizontal scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: #e7e5e4;
            /* Background of the track (Tailwind stone-200) */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #78716c;
            /* Color of the handle (Tailwind stone-500) */
            border-radius: 20px;
            /* Makes the handle round */
            border: 2px solid #e7e5e4;
            /* Creates a padding effect around the handle */
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #44403c;
            /* Darker color on hover (Tailwind stone-700) */
        }

        /* Works on Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #78716c #e7e5e4;
            /* thumb color / track color */
        }

        /* Custom keyframes (exactly like your original) */
        @keyframes square1 {
            0% {
                left: 0px;
                top: 0px;
            }

            8.333% {
                left: 0px;
                top: 30px;
            }

            100% {
                left: 0px;
                top: 30px;
            }
        }

        @keyframes square2 {
            0% {
                left: 0px;
                top: 30px;
            }

            8.333% {
                left: 0px;
                top: 60px;
            }

            16.67% {
                left: 30px;
                top: 60px;
            }

            25% {
                left: 30px;
                top: 30px;
            }

            83.33% {
                left: 30px;
                top: 30px;
            }

            91.67% {
                left: 30px;
                top: 0px;
            }

            100% {
                left: 0px;
                top: 0px;
            }
        }

        @keyframes square3 {

            0%,
            100% {
                left: 30px;
                top: 30px;
            }

            25% {
                left: 30px;
                top: 0px;
            }

            33.33% {
                left: 60px;
                top: 0px;
            }

            41.67% {
                left: 60px;
                top: 30px;
            }

            75% {
                left: 60px;
                top: 60px;
            }

            83.33% {
                left: 30px;
                top: 60px;
            }

            91.67% {
                left: 30px;
                top: 30px;
            }
        }

        @keyframes square4 {
            0% {
                left: 60px;
                top: 30px;
            }

            41.67% {
                left: 60px;
                top: 60px;
            }

            50% {
                left: 90px;
                top: 60px;
            }

            58.33% {
                left: 90px;
                top: 30px;
            }

            100% {
                left: 90px;
                top: 30px;
            }
        }

        @keyframes square5 {
            0% {
                left: 90px;
                top: 30px;
            }

            58.33% {
                left: 90px;
                top: 0px;
            }

            66.67% {
                left: 60px;
                top: 0px;
            }

            75% {
                left: 60px;
                top: 30px;
            }

            100% {
                left: 60px;
                top: 30px;
            }
        }

        /* Assign the animation to classes */
        .animate-square1 {
            animation: square1 2.4s ease-in-out infinite;
        }

        .animate-square2 {
            animation: square2 2.4s ease-in-out infinite;
        }

        .animate-square3 {
            animation: square3 2.4s ease-in-out infinite;
        }

        .animate-square4 {
            animation: square4 2.4s ease-in-out infinite;
        }

        .animate-square5 {
            animation: square5 2.4s ease-in-out infinite;
        }
    </style>
</head>

<body class="font-['Lexend']">
    <div id="preloader" class="fixed inset-0 bg-white flex items-center justify-center z-[9999]">
        <div class="relative w-[158px] h-[92px]">
            <div class="absolute w-[26px] h-[26px] bg-orange-600 rounded-sm animate-square1"></div>
            <div class="absolute w-[26px] h-[26px] bg-orange-600 rounded-sm animate-square2"></div>
            <div class="absolute w-[26px] h-[26px] bg-orange-600 rounded-sm animate-square3"></div>
            <div class="absolute w-[26px] h-[26px] bg-orange-600 rounded-sm animate-square4"></div>
            <div class="absolute w-[26px] h-[26px] bg-orange-600 rounded-sm animate-square5"></div>
        </div>
    </div>
    <!-- <script>
        $(window).on("load", function () {
            $("#preloader").fadeOut(600, function () {
                $("#main-content").fadeIn(600);
            });
        });
    </script> -->
    <script>
        $(document).ready(function () {
            $("#preloader").fadeOut(600);
            $("#main-content").fadeIn(600);
        });
    </script>