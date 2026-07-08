@extends('layouts.app')

@section('meta_title', 'Shortenn.org — #1 Free Bulk URL Shortener | Shorten Multiple Links Instantly')
@section('meta_description', 'Shortenn.org is the fastest free bulk URL shortener. Shorten multiple links at once with custom aliases, expiry dates, click limits, and real-time analytics. No registration required.')
@section('canonical_url', 'https://shortenn.org/')
@section('meta_keywords', 'bulk URL shortener, free link shortener, shorten multiple URLs, custom short links, URL analytics, link tracker, best URL shortener USA')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient py-5 text-white" style="padding-top: 5rem !important; padding-bottom: 4rem !important;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center animate-fade-up">
                <span class="badge bg-white bg-opacity-25 text-white px-3 py-2 mb-3 rounded-pill" style="font-size: 0.85rem;">
                    <i class="bi bi-star-fill me-1" style="color: #fbbf24;"></i> Trusted by 10,000+ Users
                </span>
                <h1 class="display-4 fw-bold mb-3" style="letter-spacing: -0.03em;">
                    Shorten Multiple Links <br class="d-none d-md-block">Instantly — 100% Free
                </h1>
                <p class="lead mb-4" style="color: rgba(255,255,255,0.85); max-width: 600px; margin: 0 auto;">
                    Create short, memorable links with custom aliases, expiry dates, and click analytics. No registration required. The fastest bulk URL shortener online.
                </p>
                <div class="d-flex justify-content-center gap-3 mb-4">
                    <a href="#shorten-form" class="btn btn-light btn-lg fw-semibold px-4 shadow" style="color: var(--primary);">
                        <i class="bi bi-lightning-fill me-1"></i>Start Shortening
                    </a>
                    <a href="{{ route('features') }}" class="btn btn-outline-light btn-lg px-4">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Bar -->
<div class="container" style="margin-top: -2rem; position: relative; z-index: 10;">
    <div class="trust-bar">
        <div class="row align-items-center justify-content-center g-3">
            <div class="col-auto">
                <div class="trust-item"><i class="bi bi-shield-check"></i><span>HTTPS Encrypted</span></div>
            </div>
            <div class="col-auto">
                <div class="trust-item"><i class="bi bi-lightning-charge"></i><span>Instant Redirects</span></div>
            </div>
            <div class="col-auto">
                <div class="trust-item"><i class="bi bi-graph-up"></i><span>Real-Time Analytics</span></div>
            </div>
            <div class="col-auto">
                <div class="trust-item"><i class="bi bi-infinity"></i><span>Unlimited Links</span></div>
            </div>
            <div class="col-auto">
                <div class="trust-item"><i class="bi bi-person-x"></i><span>No Sign-Up Needed</span></div>
            </div>
        </div>
    </div>
</div>

<!-- URL Shortener Form -->
<section class="py-5" id="shorten-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0" style="border-radius: var(--radius-xl);">
                    <div class="card-body p-4 p-md-5">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert" id="alert-success">
                                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert" id="alert-error">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if(session('errors') && count(session('errors')) > 0)
                            <div class="alert alert-warning alert-dismissible fade show rounded-3" role="alert" id="alert-warnings">
                                <strong><i class="bi bi-exclamation-circle me-1"></i>Some URLs had issues:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach(session('errors') as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if(session('created_links'))
                            <div class="alert alert-info rounded-3" role="alert" id="alert-results">
                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3 gap-2">
                                    <h5 class="alert-heading mb-0"><i class="bi bi-link-45deg me-2"></i>Your Shortened URLs</h5>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-primary btn-sm" onclick="copyAllLinks()" id="btn-copy-all">
                                            <i class="bi bi-clipboard-check me-1"></i>Copy All
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" onclick="copyAllWithDetails()" id="btn-copy-details">
                                            <i class="bi bi-list-ul me-1"></i>With Details
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Short URL</th>
                                                <th>Original URL</th>
                                                <th>Expires</th>
                                                <th>Max Clicks</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(session('created_links') as $link)
                                                <tr>
                                                    <td>
                                                        <a href="{{ url($link->code) }}" target="_blank" class="text-primary fw-bold short-url" data-url="{{ url($link->code) }}">
                                                            {{ url($link->code) }}
                                                        </a>
                                                    </td>
                                                    <td class="text-truncate" style="max-width: 300px;">{{ $link->url }}</td>
                                                    <td>{{ $link->expires_at ? $link->expires_at->format('Y-m-d') : 'Never' }}</td>
                                                    <td>{{ $link->max_clicks ?? 'Unlimited' }}</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary" onclick="copyToClipboard('{{ url($link->code) }}')" aria-label="Copy link">
                                                            <i class="bi bi-clipboard"></i>
                                                        </button>
                                                        <a href="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data={{ urlencode(url($link->code)) }}" target="_blank" class="btn btn-sm btn-outline-success" aria-label="QR Code">
                                                            <i class="bi bi-qr-code"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- Feedback Form -->
                            <div class="mt-4 p-3 bg-light rounded border">
                                <h6 class="mb-2"><i class="bi bi-chat-text-fill me-1 text-primary"></i> Have suggestions or improvements? Let us know!</h6>
                                <form id="feedbackForm" onsubmit="submitFeedback(event)">
                                    <div class="input-group">
                                        <input type="text" id="feedbackMessage" class="form-control" placeholder="Type your feedback here..." required>
                                        <button class="btn btn-primary" type="submit">Send</button>
                                    </div>
                                    <div id="feedbackResponse" class="small mt-1 text-success" style="display:none;"></div>
                                </form>
                            </div>
                        @endif

                        <form action="{{ route('shorten') }}" method="POST" id="form-shorten">
                            @csrf
                            <div class="mb-4">
                                <label for="urls" class="form-label fw-bold d-flex align-items-center gap-2">
                                    <div class="feature-icon blue" style="width:36px;height:36px;font-size:1rem;margin-bottom:0;">
                                        <i class="bi bi-link-45deg"></i>
                                    </div>
                                    Enter Your URLs <span class="text-muted fw-normal small">(one per line)</span>
                                </label>
                                <textarea name="urls" id="urls" class="form-control" rows="8" required
                                    placeholder="Paste your URLs here, one per line...&#10;&#10;Format: URL | alias | expiry | max_clicks&#10;&#10;Examples:&#10;https://example.com&#10;https://google.com | google | 2026-12-31 | 100&#10;facebook.com | fb&#10;https://youtube.com | | 2026-06-01"
                                    style="font-family: 'JetBrains Mono', 'Fira Code', monospace; font-size: 0.9rem;"></textarea>
                                <div class="form-text mt-2">
                                    <div class="row g-2 mt-1">
                                        <div class="col-md-3"><span class="badge bg-primary bg-opacity-10 text-primary">URL</span> Required</div>
                                        <div class="col-md-3"><span class="badge bg-success bg-opacity-10 text-success">alias</span> Optional, 3-30 chars</div>
                                        <div class="col-md-3"><span class="badge bg-warning bg-opacity-10 text-warning">expiry</span> YYYY-MM-DD</div>
                                        <div class="col-md-3"><span class="badge bg-danger bg-opacity-10 text-danger">max_clicks</span> Number</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg" id="btn-shorten">
                                    <i class="bi bi-lightning-fill me-2"></i>Shorten URLs
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold">Why Choose Shortenn?</h2>
            <p class="lead mx-auto" style="max-width: 560px;">Powerful features that make Shortenn the smartest URL shortener for professionals.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 animate-fade-up">
                <div class="feature-card">
                    <div class="feature-icon blue"><i class="bi bi-lightning-charge-fill"></i></div>
                    <h3 class="h5 fw-bold">Lightning Fast</h3>
                    <p class="text-muted small mb-0">Create short URLs in milliseconds with our optimized infrastructure. Bulk-shorten hundreds of links in a single click.</p>
                </div>
            </div>
            <div class="col-md-4 animate-fade-up">
                <div class="feature-card">
                    <div class="feature-icon green"><i class="bi bi-shield-check"></i></div>
                    <h3 class="h5 fw-bold">Secure & Reliable</h3>
                    <p class="text-muted small mb-0">HTTPS encryption, URL validation, and 99.9% uptime. Your links are always safe and verified against <a href="https://safebrowsing.google.com/" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Google Safe Browsing</a>. Read our <a href="{{ route('privacy') }}" class="text-decoration-none">Privacy Policy</a>.</p>
                </div>
            </div>
            <div class="col-md-4 animate-fade-up">
                <div class="feature-card">
                    <div class="feature-icon cyan"><i class="bi bi-graph-up-arrow"></i></div>
                    <h3 class="h5 fw-bold">Click Analytics</h3>
                    <p class="text-muted small mb-0">Track clicks, geographic data, devices, and referral sources in real-time. Make data-driven decisions.</p>
                </div>
            </div>
            <div class="col-md-4 animate-fade-up">
                <div class="feature-card">
                    <div class="feature-icon amber"><i class="bi bi-tag-fill"></i></div>
                    <h3 class="h5 fw-bold">Custom Aliases</h3>
                    <p class="text-muted small mb-0">Create branded short links with memorable custom aliases. Perfect for marketing campaigns and social media.</p>
                </div>
            </div>
            <div class="col-md-4 animate-fade-up">
                <div class="feature-card">
                    <div class="feature-icon red"><i class="bi bi-clock-history"></i></div>
                    <h3 class="h5 fw-bold">Expiring Links</h3>
                    <p class="text-muted small mb-0">Set expiration dates and click limits on any link. Perfect for time-limited offers and exclusive content.</p>
                </div>
            </div>
            <div class="col-md-4 animate-fade-up">
                <div class="feature-card">
                    <div class="feature-icon blue"><i class="bi bi-qr-code"></i></div>
                    <h3 class="h5 fw-bold">QR Codes</h3>
                    <p class="text-muted small mb-0">Generate QR codes for every shortened link. Ideal for print materials, business cards, and offline marketing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-5" style="background: linear-gradient(180deg, var(--bg-body) 0%, #eef2ff 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold">How It Works</h2>
            <p class="lead">Three simple steps to shorten your links</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 text-center animate-fade-up">
                <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 72px; height: 72px; background: linear-gradient(135deg, var(--primary), #3b82f6); color: white; font-size: 1.5rem; font-weight: 800;">1</div>
                <h4 class="h5 fw-bold">Paste Your URLs</h4>
                <p class="text-muted small">Enter one or multiple URLs in the text area. Add optional custom aliases, expiry dates, or click limits.</p>
            </div>
            <div class="col-md-4 text-center animate-fade-up">
                <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 72px; height: 72px; background: linear-gradient(135deg, var(--accent), #22d3ee); color: white; font-size: 1.5rem; font-weight: 800;">2</div>
                <h4 class="h5 fw-bold">Click Shorten</h4>
                <p class="text-muted small">Our system instantly generates unique short URLs for each link. Copy them individually or all at once.</p>
            </div>
            <div class="col-md-4 text-center animate-fade-up">
                <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 72px; height: 72px; background: linear-gradient(135deg, var(--success), #34d399); color: white; font-size: 1.5rem; font-weight: 800;">3</div>
                <h4 class="h5 fw-bold">Share & Track</h4>
                <p class="text-muted small">Share your short links anywhere. Track clicks, locations, and engagement through your free dashboard.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section (SEO & LLM Optimized) -->
<section class="py-5" id="faq-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold">Frequently Asked Questions</h2>
            <p class="lead text-muted">Everything you need to know about our bulk URL shortening service.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm" style="border-radius: var(--radius-md); overflow: hidden;">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-semibold bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is a bulk URL shortener?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                A bulk URL shortener allows you to paste multiple long links at once and instantly convert them into concise, easily shareable short links. Shortenn.org can process hundreds of links in seconds, making it ideal for marketers, affiliates, and developers.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm" style="border-radius: var(--radius-md); overflow: hidden;">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button fw-semibold bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is Shortenn.org completely free to use?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes! Shortenn.org is a 100% free URL shortener. You can generate unlimited short links without creating an account. We also offer a free dashboard if you want to track analytics and manage your links.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm" style="border-radius: var(--radius-md); overflow: hidden;">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button fw-semibold bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do shortened links expire?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                By default, your short links will never expire. However, Shortenn.org gives you the advanced option to set a specific expiration date or a maximum click limit if you are running temporary promotions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 shadow-sm" style="border-radius: var(--radius-md); overflow: hidden;">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button fw-semibold bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Do you provide analytics and click tracking?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Absolutely. If you create a free account, you can access our comprehensive dashboard that tracks click-through rates, geographic locations, referral sources, and device types for all your generated URLs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 text-white text-center" style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #0891b2 100%); border-radius: var(--radius-xl);">
                    <div class="card-body p-5">
                        <h2 class="h3 fw-bold mb-3">Ready to Simplify Your Links?</h2>
                        <p class="mb-4" style="color: rgba(255,255,255,0.85); max-width: 460px; margin: 0 auto;">
                            Join thousands of professionals who trust Shortenn for their link management. Sign up for free and unlock analytics.
                        </p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ route('register') }}" class="btn btn-light btn-lg fw-semibold px-4" style="color: var(--primary);">
                                Create Free Account
                            </a>
                            <a href="#shorten-form" class="btn btn-outline-light btn-lg px-4">
                                Try Without Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        const btn = event.target.closest('button');
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<i class="bi bi-check-circle-fill text-success"></i>';
        setTimeout(() => { btn.innerHTML = originalHTML; }, 1500);
    });
}
function copyAllLinks() {
    const shortUrls = document.querySelectorAll('.short-url');
    const urls = Array.from(shortUrls).map(el => el.getAttribute('data-url')).join('\n');
    navigator.clipboard.writeText(urls).then(() => {
        showToast('All ' + shortUrls.length + ' URLs copied!');
    }).catch(() => { alert('Failed to copy URLs.'); });
}
function copyAllWithDetails() {
    const rows = document.querySelectorAll('.table tbody tr');
    let text = 'SHORTENED URLS — Generated on ' + new Date().toLocaleString() + '\n' + '='.repeat(70) + '\n\n';
    rows.forEach((row, index) => {
        const shortUrl = row.querySelector('.short-url').getAttribute('data-url');
        const originalUrl = row.cells[1].textContent.trim();
        const expires = row.cells[2].textContent.trim();
        const maxClicks = row.cells[3].textContent.trim();
        text += (index+1) + '. Short URL: ' + shortUrl + '\n   Original: ' + originalUrl + '\n   Expires: ' + expires + ' | Max Clicks: ' + maxClicks + '\n\n';
    });
    navigator.clipboard.writeText(text).then(() => {
        showToast('All URLs with details copied!');
    }).catch(() => { alert('Failed to copy.'); });
}
function showToast(message) {
    const toast = document.createElement('div');
    toast.className = 'alert alert-success position-fixed top-0 start-50 translate-middle-x mt-4 shadow-lg d-flex align-items-center gap-2';
    toast.style.zIndex = '10001';
    toast.style.borderRadius = 'var(--radius-md)';
    toast.innerHTML = '<i class="bi bi-check-circle-fill"></i> ' + message;
    document.body.appendChild(toast);
    setTimeout(() => { toast.style.opacity = '0'; toast.style.transition = '0.3s'; setTimeout(() => toast.remove(), 300); }, 2500);
}

function submitFeedback(e) {
    e.preventDefault();
    const btn = e.target.querySelector('button');
    const msg = document.getElementById('feedbackMessage').value;
    const res = document.getElementById('feedbackResponse');
    
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
    
    fetch('{{ route("feedback") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message: msg })
    })
    .then(response => response.json())
    .then(data => {
        res.style.display = 'block';
        if(data.success) {
            res.innerHTML = '<i class="bi bi-check-circle-fill"></i> ' + data.message;
            res.className = 'small mt-1 text-success';
            document.getElementById('feedbackMessage').value = '';
        } else {
            res.innerHTML = '<i class="bi bi-exclamation-triangle-fill"></i> ' + data.message;
            res.className = 'small mt-1 text-danger';
        }
        btn.disabled = false;
        btn.innerText = 'Send';
        setTimeout(() => { res.style.display = 'none'; }, 5000);
    })
    .catch(err => {
        res.style.display = 'block';
        res.innerHTML = '<i class="bi bi-exclamation-triangle-fill"></i> An error occurred.';
        res.className = 'small mt-1 text-danger';
        btn.disabled = false;
        btn.innerText = 'Send';
    });
}
</script>
@endpush
@endsection
