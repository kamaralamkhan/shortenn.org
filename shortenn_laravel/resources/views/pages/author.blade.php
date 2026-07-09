@extends('layouts.app')

@section('meta_title', 'Kamar Alam Khan - Founder & Developer of Shortenn.org')
@section('meta_description', 'Meet Kamar Alam Khan, the creator of Shortenn.org. Learn about his mission to provide the world\'s fastest, free bulk URL shortener.')
@section('canonical_url', 'https://shortenn.org/author/kamar')
@section('meta_keywords', 'Kamar Alam Khan, Shortenn founder, URL shortener developer')

@section('content')
<!-- Author Hero -->
<section class="py-5" style="background: linear-gradient(135deg, var(--bg-body) 0%, #eef2ff 100%); padding-top: 6rem !important;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center animate-fade-up">
                <img src="{{ asset('logo.png') }}" alt="Kamar Alam Khan" class="rounded-circle shadow-lg mb-4" style="width: 120px; height: 120px; object-fit: cover; border: 4px solid white;">
                <h1 class="display-5 fw-bold mb-3">Kamar Alam Khan</h1>
                <p class="lead text-muted mb-4">Founder & Lead Developer of Shortenn.org</p>
                
                <div class="d-flex justify-content-center gap-3 mb-5">
                    <a href="https://github.com/kamaralamkhan" target="_blank" rel="noopener noreferrer" class="btn btn-dark rounded-pill px-4">
                        <i class="bi bi-github me-2"></i> GitHub
                    </a>
                    <a href="https://in.linkedin.com/in/kamaralamkhan" target="_blank" rel="noopener noreferrer" class="btn btn-primary rounded-pill px-4" style="background-color: #0a66c2; border-color: #0a66c2;">
                        <i class="bi bi-linkedin me-2"></i> LinkedIn
                    </a>
                    <a href="https://x.com/Kamaralamkhan_" target="_blank" rel="noopener noreferrer" class="btn btn-dark rounded-pill px-4" style="background-color: #000; border-color: #000;">
                        <i class="bi bi-twitter-x me-2"></i> Twitter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Author Bio & Philosophy -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: var(--radius-lg);">
                    <h2 class="fw-bold mb-4">Why I Built Shortenn</h2>
                    <p class="text-muted" style="line-height: 1.8;">
                        As a developer and marketer, I was constantly frustrated by the state of URL shorteners. Every tool I tried either had severe limitations on their free tier, blocked bulk shortening behind an expensive paywall, or bombarded me with ads.
                    </p>
                    <p class="text-muted" style="line-height: 1.8;">
                        I realized the community needed a better solution. I built <strong>Shortenn.org</strong> with a singular mission: to provide the fastest, most powerful bulk URL shortening utility on the web, completely free. No mandatory sign-ups, no hidden fees, and no aggressive tracking.
                    </p>

                    <h3 class="fw-bold mt-5 mb-4">My Expertise</h3>
                    <p class="text-muted" style="line-height: 1.8;">
                        With years of experience in full-stack web development and software architecture, I focus on building tools that solve real productivity bottlenecks. Shortenn's engine is designed to handle massive spreadsheets of data instantly, ensuring marketers and data analysts never have to shorten links one by one ever again.
                    </p>

                    <h3 class="fw-bold mt-5 mb-4">Recent Articles by Kamar</h3>
                    <div class="list-group list-group-flush mt-3">
                        <a href="{{ route('blog.excel-batch') }}" class="list-group-item list-group-item-action py-3 px-0 border-0 border-bottom">
                            <h5 class="fw-bold mb-1 text-primary">How to Shorten Multiple Links from Excel at Once</h5>
                            <small class="text-muted">A deep dive into batch shortening workflows.</small>
                        </a>
                        <a href="{{ route('blog.alias-shortener') }}" class="list-group-item list-group-item-action py-3 px-0 border-0 border-bottom">
                            <h5 class="fw-bold mb-1 text-primary">Increase CTR by 34% with an Alias URL Shortener</h5>
                            <small class="text-muted">Understanding the psychology of branded links.</small>
                        </a>
                        <a href="{{ route('blog.bulk-vs-single') }}" class="list-group-item list-group-item-action py-3 px-0 border-0">
                            <h5 class="fw-bold mb-1 text-primary">Mass URL Shortener Guide</h5>
                            <small class="text-muted">Why marketers need bulk tools over single link tools.</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JSON-LD Profile Schema for E-E-A-T -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "ProfilePage",
  "mainEntity": {
    "@@type": "Person",
    "name": "Kamar Alam Khan",
    "jobTitle": "Founder & Developer",
    "url": "https://shortenn.org/author/kamar",
    "worksFor": {
      "@@type": "Organization",
      "name": "Shortenn"
    },
    "sameAs": [
      "https://github.com/kamaralamkhan",
      "https://x.com/Kamaralamkhan_",
      "https://in.linkedin.com/in/kamaralamkhan"
    ]
  }
}
</script>
@endsection
