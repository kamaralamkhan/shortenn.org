<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RedirectController;

use App\Http\Controllers\FeedbackController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/shorten', [HomeController::class, 'store'])->name('shorten');
Route::post('/feedback', [FeedbackController::class, 'submit'])->name('feedback');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/features', [HomeController::class, 'features'])->name('features');
Route::get('/how-it-works', [HomeController::class, 'howItWorks'])->name('how-it-works');
Route::get('/use-cases', [HomeController::class, 'useCases'])->name('use-cases');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/resources', [HomeController::class, 'resources'])->name('resources');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/guide-shortlink-safety', [HomeController::class, 'guideShortlinkSafety'])->name('guide-shortlink-safety');
Route::get('/blog', function () {
    return view('pages.blog-index');
})->name('blog.index');

Route::get('/blog/best-free-bitly-alternative-bulk-url-shortener', function () {
    return view('pages.blog-best-alternative');
})->name('blog.best-alternative');

Route::get('/blog/mass-multi-bulk-url-shortener-guide', function () {
    return view('pages.blog-bulk');
})->name('blog.bulk-vs-single');

Route::get('/blog/how-to-use-alias-url-shortener', function () {
    return view('pages.blog-alias');
})->name('blog.alias-shortener');

Route::get('/blog/batch-url-shortener-excel', function () {
    return view('pages.blog-excel-batch');
})->name('blog.excel-batch');

Route::get('/author/kamar', function () {
    return view('pages.author');
})->name('author.kamar');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/links/{link}/toggle', [DashboardController::class, 'toggle'])->name('links.toggle');
    Route::delete('/links/{link}', [DashboardController::class, 'destroy'])->name('links.destroy');
    Route::get('/export', [DashboardController::class, 'export'])->name('export');
});

Route::get('/{code}', [RedirectController::class, 'redirect'])->where('code', '[A-Za-z0-9_-]+');
