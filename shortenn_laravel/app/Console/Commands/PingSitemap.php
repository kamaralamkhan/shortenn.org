<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PingSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ping Google and Bing to notify them of sitemap updates';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemapUrl = 'https://shortenn.org/sitemap.xml';
        
        $this->info("Pinging search engines with sitemap: {$sitemapUrl}");

        // Google Ping
        $googleUrl = "https://www.google.com/ping?sitemap=" . urlencode($sitemapUrl);
        $this->pingEngine('Google', $googleUrl);

        // Bing Ping
        $bingUrl = "https://www.bing.com/ping?sitemap=" . urlencode($sitemapUrl);
        $this->pingEngine('Bing', $bingUrl);

        $this->info("Pinging complete!");
    }

    private function pingEngine($name, $url)
    {
        try {
            $response = Http::timeout(10)->get($url);
            
            if ($response->successful()) {
                $this->info("✅ Successfully pinged {$name}");
                Log::info("SEO Sitemap Pinged: {$name} successfully.");
            } else {
                $this->error("❌ Failed to ping {$name}. HTTP Status: " . $response->status());
                Log::error("SEO Sitemap Ping Failed: {$name} returned status " . $response->status());
            }
        } catch (\Exception $e) {
            $this->error("❌ Error pinging {$name}: " . $e->getMessage());
            Log::error("SEO Sitemap Ping Error: {$name} - " . $e->getMessage());
        }
    }
}
