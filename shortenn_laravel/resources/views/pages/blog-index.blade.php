@extends('layouts.app')

@section('title', 'Shortenn Blog - Tips, Tricks & Tutorials for URL Shortening')
@section('meta_description', 'Read the latest articles on URL shortening, marketing, SEO, and how to get the most out of Shortenn.org.')

@push('styles')
<style>
    .blog-header {
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
        padding: 80px 0 40px;
        color: white;
    }
    .blog-card {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        background: #fff;
    }
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .blog-card-body {
        padding: 24px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .blog-tag {
        font-size: 0.8rem;
        font-weight: 600;
        color: #2563eb;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 12px;
        display: block;
    }
    .blog-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
        text-decoration: none;
    }
    .blog-title:hover {
        color: #2563eb;
    }
    .blog-excerpt {
        color: #64748b;
        font-size: 0.95rem;
        margin-bottom: 20px;
        flex: 1;
    }
    .blog-meta {
        font-size: 0.85rem;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 10px;
    }
</style>
@endpush

@section('content')
<!-- Blog Header -->
<header class="blog-header text-center mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">The Shortenn Blog</h1>
        <p class="lead text-white-50">Insights, guides, and updates on maximizing your links.</p>
    </div>
</header>

<!-- Blog Grid -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-card-body">
                        <span class="blog-tag">Marketing</span>
                        <a href="{{ route('blog.bulk-vs-single') }}" class="blog-title">Mass URL Shortener Guide: Why Bulk Shortening Saves Hours of Work</a>
                        <p class="blog-excerpt">If you are still shortening links one by one, you're losing time. Learn how a multi URL shortener works and how to automate your campaigns.</p>
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Jul 9, 2026</span>
                            <span>&bull; 5 min read</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-card-body">
                        <span class="blog-tag">SEO & Branding</span>
                        <a href="{{ route('blog.alias-shortener') }}" class="blog-title">How to Use an Alias URL Shortener to Increase CTR by 34%</a>
                        <p class="blog-excerpt">Don't share ugly random strings. Discover how custom alias URLs build trust, avoid spam filters, and drastically improve your click-through rates.</p>
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Jul 9, 2026</span>
                            <span>&bull; 6 min read</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-card-body">
                        <span class="blog-tag">Productivity</span>
                        <a href="{{ route('blog.excel-batch') }}" class="blog-title">How to Shorten Multiple Links from Excel at Once</a>
                        <p class="blog-excerpt">Stop wasting money on expensive Excel plugins. Discover the fastest way to use a batch link shortener to transform massive spreadsheets of URLs into clean short links.</p>
                        <div class="blog-meta">
                            <span><i class="bi bi-calendar3"></i> Jul 9, 2026</span>
                            <span>&bull; 4 min read</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
