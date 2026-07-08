<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Link;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap.xml with all active short links';

    public function handle()
    {
        $this->info('Generating sitemap...');

        $staticPages = [
            ['loc' => 'https://shortenn.org/', 'priority' => '1.0', 'changefreq' => 'daily'],
            ['loc' => 'https://shortenn.org/about', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => 'https://shortenn.org/features', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => 'https://shortenn.org/how-it-works', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => 'https://shortenn.org/use-cases', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => 'https://shortenn.org/faq', 'priority' => '0.6', 'changefreq' => 'weekly'],
            ['loc' => 'https://shortenn.org/resources', 'priority' => '0.6', 'changefreq' => 'weekly'],
            ['loc' => 'https://shortenn.org/contact', 'priority' => '0.5', 'changefreq' => 'monthly'],
            ['loc' => 'https://shortenn.org/privacy', 'priority' => '0.4', 'changefreq' => 'yearly'],
            ['loc' => 'https://shortenn.org/terms', 'priority' => '0.4', 'changefreq' => 'yearly'],
            ['loc' => 'https://shortenn.org/guide-shortlink-safety', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => 'https://shortenn.org/login', 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://shortenn.org/register', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ];

        // Get all active, non-expired links with clicks (indicates they're being used)
        $activeLinks = Link::where('is_active', 1)
            ->where(function($query) {
                $query->whereNull('expires_at')
                      ->orWhere('expires_at', '>', Carbon::now());
            })
            ->where(function($query) {
                $query->whereNull('max_clicks')
                      ->orWhereRaw('clicks < max_clicks');
            })
            ->orderBy('clicks', 'desc')
            ->limit(10000) // Limit to 10,000 URLs (Google's recommended limit per sitemap)
            ->get(['code', 'clicks', 'updated_at']);

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // Add static pages
        foreach ($staticPages as $page) {
            $xml .= "    <url>\n";
            $xml .= "        <loc>{$page['loc']}</loc>\n";
            $xml .= "        <lastmod>" . date('Y-m-d') . "</lastmod>\n";
            $xml .= "        <changefreq>{$page['changefreq']}</changefreq>\n";
            $xml .= "        <priority>{$page['priority']}</priority>\n";
            $xml .= "    </url>\n";
        }

        // Add short links
        foreach ($activeLinks as $link) {
            // Priority based on popularity (more clicks = higher priority)
            $priority = $this->calculatePriority($link->clicks);
            $lastmod = $link->updated_at ? $link->updated_at->format('Y-m-d') : date('Y-m-d');
            
            $xml .= "    <url>\n";
            $xml .= "        <loc>https://shortenn.org/{$link->code}</loc>\n";
            $xml .= "        <lastmod>{$lastmod}</lastmod>\n";
            $xml .= "        <changefreq>weekly</changefreq>\n";
            $xml .= "        <priority>{$priority}</priority>\n";
            $xml .= "    </url>\n";
        }

        $xml .= '</urlset>';

        // Save to public_html directory (one level up from shortenn_laravel)
        $publicPath = base_path('../sitemap.xml');
        file_put_contents($publicPath, $xml);

        $this->info('Sitemap generated successfully!');
        $this->info('Total static pages: ' . count($staticPages));
        $this->info('Total short links: ' . $activeLinks->count());
        $this->info('Saved to: ' . $publicPath);

        return 0;
    }

    /**
     * Calculate priority based on click count
     * More popular links get higher priority for indexing
     */
    private function calculatePriority($clicks)
    {
        if ($clicks > 1000) return '0.7';
        if ($clicks > 500) return '0.6';
        if ($clicks > 100) return '0.5';
        if ($clicks > 50) return '0.4';
        return '0.3';
    }
}
