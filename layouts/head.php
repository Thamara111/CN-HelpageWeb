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
    <meta name="description"
        content="HelpAge Sri Lanka is a non-profit organization dedicated to improving the quality of life for senior citizens across Sri Lanka." />
    <meta name="keywords" content="HelpAge, Sri Lanka, elderly care, senior citizens, donations, NGO" />
    <title>HelpAge Sri Lanka | Supporting Elderly Citizens</title>
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/lite-youtube-embed@0.3.2/src/lite-yt-embed.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lite-youtube-embed@0.3.2/src/lite-yt-embed.css">

    <style>
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
    <script>
        $(window).on("load", function () {
            $("#preloader").fadeOut(600, function () {
                $("#main-content").fadeIn(600);
            });
        });
    </script>