<?php
header("Content-Type: application/xml; charset=UTF-8");

$base = "https://www.helpage.lk";

$urls = [
    "/" => "daily",

    "/about" => "monthly",
    "/contact" => "monthly",
    "/donation" => "monthly",
    "/fundraising" => "monthly",
    "/blogs" => "weekly",
    "/volunteering" => "monthly",

    // Programs
    "/programs/community-elder-care" => "monthly",
    "/programs/education-awareness" => "monthly",
    "/programs/emergency-humanitarian" => "monthly",
    "/programs/health" => "monthly",
    "/programs/special-projects" => "monthly",

    // Services
    "/service-mobile-medical-unit" => "monthly",
    "/service-eye-hospital" => "monthly",
    "/service-ayurvedic-center" => "monthly",
    "/service-day-center" => "monthly",
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $path => $freq): ?>
    <url>
        <loc><?= $base . $path ?></loc>
        <changefreq><?= $freq ?></changefreq>
        <priority>0.8</priority>
    </url>
<?php endforeach; ?>
</urlset>
