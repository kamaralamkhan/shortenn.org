<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("meta_title", "Shortenn.org — Free Bulk URL Shortener")</title>
    <meta name="description" content="@yield("meta_description", "Shortenn.org is a fast, free bulk URL shortener. Shorten multiple links at once with custom aliases, analytics, and click tracking.")">
    <meta name="keywords" content="@yield("meta_keywords", "URL shortener, bulk link shortener, free URL shortener USA, shorten links, custom short links, link analytics")">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Shortenn.org">
    @if(View::hasSection('canonical_url'))
    <link rel="canonical" href="@yield('canonical_url')">
    @endif

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Shortenn.org">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield("meta_title", "Shortenn.org — Free Bulk URL Shortener")">
    <meta property="og:description" content="@yield("meta_description", "Shortenn.org is a fast, free bulk URL shortener.")">
    <meta property="og:image" content="{{ asset("logo.png") }}">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield("meta_title", "Shortenn.org — Free Bulk URL Shortener")">
    <meta name="twitter:description" content="@yield("meta_description", "Shortenn.org is a fast, free bulk URL shortener.")">
    <meta name="twitter:image" content="{{ asset("logo.png") }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset("logo.png") }}">

    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset("css/style.css") }}?v=2.1" rel="stylesheet">

    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2154039585231057" crossorigin="anonymous"></script>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    [
        {
            "@@context": "https://schema.org",
            "@@type": "Organization",
            "@@id": "https://shortenn.org/#organization",
            "name": "Shortenn",
            "url": "https://shortenn.org",
            "logo": "https://shortenn.org/logo.png",
            "contactPoint": {
                "@@type": "ContactPoint",
                "email": "support@shortenn.org",
                "contactType": "customer support"
            },
            "sameAs": [
                "https://x.com/Kamaralamkhan_",
                "https://github.com/kamaralamkhan",
                "https://in.linkedin.com/in/kamaralamkhan"
            ]
        },
        {
            "@@context": "https://schema.org",
            "@@type": "WebApplication",
            "name": "Shortenn",
            "url": "https://shortenn.org",
            "description": "Free bulk URL shortener tool that lets you shorten multiple links at once with custom aliases, analytics, and click tracking.",
            "applicationCategory": "UtilityApplication",
            "operatingSystem": "Web",
            "offers": {
                "@@type": "Offer",
                "price": "0",
                "priceCurrency": "USD"
            },
            "creator": {
                "@@id": "https://shortenn.org/#organization"
            }
        }
    ]
    </script>

    @stack("styles")
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark hero-gradient sticky-top" id="main-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ route("home") }}" aria-label="Shortenn Home">
            <img src="{{ asset("logo.png") }}" alt="Shortenn Logo" height="28">
            Shortenn
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
                <li class="nav-item"><a class="nav-link" href="{{ route("home") }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("about") }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("features") }}">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("faq") }}">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("contact") }}">Contact</a></li>
                @guest
                <li class="nav-item"><a class="nav-link" href="{{ route("login") }}">Login</a></li>
                <li class="nav-item">
                    <a class="btn btn-light btn-sm fw-semibold px-3 ms-1" href="{{ route("register") }}" style="color: var(--primary);">
                        Sign Up Free
                    </a>
                </li>
                @else
                <li class="nav-item"><a class="nav-link" href="{{ route("dashboard") }}"><i class="bi bi-speedometer2 me-1"></i>Dashboard</a></li>
                <li class="nav-item">
                    <form action="{{ route("logout") }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-white p-0 ms-2">Logout</button>
                    </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main>
    @yield("content")
</main>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-3">
                    <img src="{{ asset("logo.png") }}" alt="Shortenn" height="24" style="filter: brightness(0) invert(1); margin-right: 8px;">Shortenn
                </div>
                <p class="small mb-3" style="color: #94a3b8; max-width: 280px;">
                    The fastest free bulk URL shortener trusted by marketers, developers, and content creators across the USA. Shorten, track, and manage links effortlessly.
                </p>
                <div class="d-flex gap-3">
                    <a href="https://x.com/Kamaralamkhan_" target="_blank" aria-label="Twitter/X"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://github.com/kamaralamkhan" target="_blank" aria-label="GitHub"><i class="bi bi-github"></i></a>
                    <a href="https://in.linkedin.com/in/kamaralamkhan" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Product</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route("home") }}">URL Shortener</a></li>
                    <li class="mb-2"><a href="{{ route("features") }}">Features</a></li>
                    <li class="mb-2"><a href="{{ route("how-it-works") }}">How It Works</a></li>
                    <li class="mb-2"><a href="{{ route("use-cases") }}">Use Cases</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Resources</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route("faq") }}">FAQ</a></li>
                    <li class="mb-2"><a href="{{ route("blog.index") }}">Blog</a></li>
                    <li class="mb-2"><a href="{{ route("guide-shortlink-safety") }}">Safety Guide</a></li>
                    <li class="mb-2"><a href="{{ route("about") }}">About Us</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Legal</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route("privacy") }}">Privacy Policy</a></li>
                    <li class="mb-2"><a href="{{ route("terms") }}">Terms of Service</a></li>
                    <li class="mb-2"><a href="{{ route("contact") }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5>Account</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route("login") }}">Login</a></li>
                    <li class="mb-2"><a href="{{ route("register") }}">Register</a></li>
                    @auth
                    <li class="mb-2"><a href="{{ route("dashboard") }}">Dashboard</a></li>
                    @endauth
                </ul>
            </div>
        </div>
        <div class="footer-divider"></div>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center footer-bottom">
            <p class="mb-2 mb-md-0">&copy; {{ date("Y") }} Shortenn.org — All rights reserved.</p>
            <p class="mb-0">Made with <i class="bi bi-heart-fill text-danger"></i> for the web</p>
        </div>
    </div>
</footer>

<!-- Cookie Consent Banner (Required for AdSense) -->
<div class="cookie-consent" id="cookieConsent">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3" style="flex: 1;">
                <i class="bi bi-shield-lock-fill fs-4 text-info d-none d-md-block"></i>
                <p class="mb-0 small">
                    We use cookies to enhance your experience and serve personalized ads via Google AdSense. By clicking "Accept All", you consent to cookies as described in our <a href="{{ route('privacy') }}">Privacy Policy</a>.
                </p>
            </div>
            <div class="d-flex gap-2 flex-shrink-0">
                <button class="btn-reject" onclick="rejectCookies()" id="btn-cookie-reject">Reject</button>
                <button class="btn-accept" onclick="acceptCookies()" id="btn-cookie-accept">Accept All</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Cookie Consent
(function() {
    const consent = localStorage.getItem('cookie_consent');
    if (!consent) {
        setTimeout(function() {
            document.getElementById('cookieConsent').classList.add('show');
        }, 1500);
    }
})();
function acceptCookies() {
    localStorage.setItem('cookie_consent', 'accepted');
    document.getElementById('cookieConsent').classList.remove('show');
}
function rejectCookies() {
    localStorage.setItem('cookie_consent', 'rejected');
    document.getElementById('cookieConsent').classList.remove('show');
}
</script>
@stack("scripts")
</body>
</html>
