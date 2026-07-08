@extends('layouts.app')

@section('meta_title', 'About Shortenn.org | Our Mission, Technology & Vision')
@section('meta_description', 'Learn about Shortenn.org\'s mission to simplify link management. Discover our modern technology stack, commitment to privacy, and why thousands of users trust us for bulk URL shortening.')
@section('canonical_url', 'https://shortenn.org/about')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10 text-center">
            <h1 class="display-3 fw-bold text-primary mb-4">About Shortenn</h1>
            <p class="lead text-muted mb-0 mx-auto" style="max-width: 700px;">
                We are on a mission to make the web more accessible, organized, and trackable through valid, secure, and lightning-fast link management solutions.
            </p>
        </div>
    </div>

    <!-- Our Story & Mission Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card shadow-sm border-0">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <h2 class="h3 fw-bold text-primary mb-4">Our Story</h2>
                            <p class="text-secondary mb-3">
                                Shortenn.org began with a simple observation: sharing links on the internet was becoming increasingly complex. Long, tracking-heavy URLs were not only unsightly but difficult to manage, share, and track effectively across different platforms.
                            </p>
                            <p class="text-secondary mb-3">
                                What started as a simple internal tool for developers to manage project links quickly evolved into a robust public platform. We realized that marketers, educators, content creators, and businesses all faced the same challenge: they needed a reliable way to shorten URLs without dealing with complex registrations, paywalls for basic features, or questionable reliability.
                            </p>
                            <p class="text-secondary mb-0">
                                Today, Shortenn serves users from around the globe, processing thousands of requests daily with a commitment to uptime, speed, and user privacy that rivals paid enterprise solutions.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-light p-4 rounded-3 h-100 border">
                                <h3 class="h4 fw-bold text-dark mb-4">Our Core Values</h3>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-check-circle-fill text-success fs-4"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="h6 fw-bold mb-1">Simplicity First</h5>
                                        <p class="small text-muted mb-0">We believe powerful tools shouldn't be complicated. Our "no-registration-required" philosophy for basic features is a testament to this belief.</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-shield-lock-fill text-primary fs-4"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="h6 fw-bold mb-1">Uncompromising Security</h5>
                                        <p class="small text-muted mb-0">Your data privacy and the safety of the links we host are paramount. We employ rigorous checks to ensure our platform is never a vehicle for abuse.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-lightning-charge-fill text-warning fs-4"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="h6 fw-bold mb-1">Speed & Reliability</h5>
                                        <p class="small text-muted mb-0">In the digital age, every millisecond counts. Our infrastructure is optimized to ensure your redirects happen instantly, every time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Technology Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <h2 class="h3 fw-bold text-center text-primary mb-2">Powered by Modern Technology</h2>
            <p class="text-center text-muted mb-5">We leverage cutting-edge tech to deliver a seamless experience.</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-server text-primary display-4"></i>
                        </div>
                        <h4 class="h5 fw-bold">Robust Infrastructure</h4>
                        <p class="text-muted small mb-0">
                            Built on the powerful Laravel framework, our backend is designed for scalability. We utilize modern caching strategies and optimized database queries to handle high traffic volumes without breaking a sweat.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-shield-check text-success display-4"></i>
                        </div>
                        <h4 class="h5 fw-bold">Secure Redirects</h4>
                        <p class="text-muted small mb-0">
                            Security is baked into our core. All connections are encrypted via SSL/TLS. We actively validate URLs to prevent XSS attacks and filter out known malicious domains to keep our ecosystem clean.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-graph-up text-info display-4"></i>
                        </div>
                        <h4 class="h5 fw-bold">Real-Time Analytics</h4>
                        <p class="text-muted small mb-0">
                            Our tracking engine processes clicks in real-time, parsing user agents and IP locations instantly to provide you with up-to-the-second data on who is engaging with your content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="bg-white rounded-3 shadow-sm p-5 mb-5 border">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="h3 fw-bold text-primary">Why Content Creators & Businesses Trust Us</h2>
                <p class="text-secondary">We bridge the gap between simple utility and enterprise-grade features.</p>
            </div>
        </div>
        
        <div class="row g-5">
            <div class="col-lg-6">
                <h4 class="h5 fw-bold mb-3"><i class="bi bi-megaphone-fill text-primary me-2"></i>For Marketers</h4>
                <p class="text-muted mb-4">
                    Campaigns live and die by their data. Shortenn gives you granular insight into which channels are performing best. By tagging your URLs with custom aliases, you can A/B test different platforms effortlessly and make data-driven decisions to optimize ROI.
                </p>
                
                <h4 class="h5 fw-bold mb-3"><i class="bi bi-code-slash text-primary me-2"></i>For Developers</h4>
                <p class="text-muted mb-0">
                    We understand the need for efficiency. Our bulk shortening tool accepts line-separated lists, allowing you to generate hundreds of links for your projects, database entries, or client reports in a single click, saving you hours of manual work.
                </p>
            </div>
            
            <div class="col-lg-6">
                <h4 class="h5 fw-bold mb-3"><i class="bi bi-people-fill text-primary me-2"></i>For Educators</h4>
                <p class="text-muted mb-4">
                    Sharing complex resource links with students can be a headache. Shortenn allows you to create memorable, easy-to-type links for assignments, reading materials, and virtual classrooms, ensuring your students spend less time typing and more time learning.
                </p>
                
                <h4 class="h5 fw-bold mb-3"><i class="bi bi-shop text-primary me-2"></i>For Small Businesses</h4>
                <p class="text-muted mb-0">
                    Professionalism matters. Sending a clean `shortenn.org/your-brand` link to a customer looks significantly more trustworthy than a 50-character string of random parameters. Enhance your brand image on social media, invoices, and business cards.
                </p>
            </div>
        </div>
    </div>

    <!-- Commitment to Privacy -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card bg-primary text-white border-0 shadow">
                <div class="card-body p-5 text-center">
                    <h2 class="h3 fw-bold mb-3">Our Commitment to Privacy</h2>
                    <p class="lead mb-4" style="font-size: 1.1rem; opacity: 0.9;">
                        We believe that you shouldn't have to trade your privacy for utility.
                    </p>
                    <div class="row justify-content-center text-start">
                        <div class="col-md-8">
                            <p class="mb-3 opacity-90">
                                Unlike many free services, <strong>we do not sell user data or personal information to third-party data brokers</strong>. The analytics data we collect (IP address, device type) is strictly used to provide the analytics service to the link creator and to prevent platform abuse.
                            </p>
                            <p class="mb-0 opacity-90">
                                We are transparent about our data practices. You can read our full <a href="{{ route('privacy') }}" class="text-white text-decoration-underline fw-bold">Privacy Policy</a> to see exactly how we handle information. We build trust by being open, minimal in our data collection, and robust in our protection standards.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="text-center pb-4">
        <h2 class="h4 fw-bold text-dark mb-3">Ready to simplify your links?</h2>
        <p class="text-muted mb-4">Join thousands of users who trust Shortenn for their link management needs.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4 shadow-sm">Start Shortening</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-secondary btn-lg px-4 shadow-sm">Contact Us</a>
        </div>
    </div>
</div>
@endsection
