<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Generate sitemap every 6 hours
Schedule::command('sitemap:generate')->everySixHours();

// Ping search engines daily
Schedule::command('seo:ping')->dailyAt('02:00');
