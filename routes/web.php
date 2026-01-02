<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Decision Forest Website Routes
| https://www.decisionforest.in
|
*/

// Main Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/events', [PageController::class, 'events'])->name('events');
Route::get('/community', [PageController::class, 'community'])->name('community');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');

// Legal Pages
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

// SEO Routes - Redirects for common URL patterns
Route::redirect('/about-us', '/about');
Route::redirect('/aboutus', '/about');
Route::redirect('/hackathons', '/events');
Route::redirect('/join', '/community');
Route::redirect('/privacy-policy', '/privacy');
Route::redirect('/terms-of-service', '/terms');
Route::redirect('/tos', '/terms');

// Sitemap for SEO
Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => url('/'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => url('/about'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => url('/events'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => url('/community'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => url('/contact'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['loc' => url('/privacy'), 'priority' => '0.3', 'changefreq' => 'yearly'],
        ['loc' => url('/terms'), 'priority' => '0.3', 'changefreq' => 'yearly'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . $url['loc'] . '</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $url['priority'] . '</priority>';
        $xml .= '</url>';
    }

    $xml .= '</urlset>';

    return response($xml, 200, [
        'Content-Type' => 'application/xml'
    ]);
});

// Robots.txt for SEO
Route::get('/robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Allow: /\n";
    $content .= "Disallow: /admin\n";
    $content .= "\n";
    $content .= "Sitemap: " . url('/sitemap.xml');

    return response($content, 200, [
        'Content-Type' => 'text/plain'
    ]);
});
