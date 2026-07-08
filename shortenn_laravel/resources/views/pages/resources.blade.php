@extends('layouts.app')

@section('meta_title', 'Resources & Knowledge Base | Shortenn.org')
@section('meta_description', 'Access guides, tutorials, and best practices for using Shortenn.org. content for marketers, developers, and businesses.')
@section('canonical_url', 'https://shortenn.org/resources')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-bold text-primary mb-3">Resources & Knowledge Base</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Guides, tutorials, and insights to help you get the most out of your links.
            </p>
        </div>

        <div class="row g-4">
            <!-- Featured Guide -->
            <div class="col-12 mb-4">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-8 p-4 p-lg-5">
                            <span class="badge bg-primary mb-3">Featured Guide</span>
                            <h2 class="h3 fw-bold mb-3">The Complete Guide to Short Link Safety</h2>
                            <p class="text-secondary mb-4">
                                In an era of digital mistrust, understanding how to use short links safely is crucial. Learn
                                about link hygiene, identifying malicious redirects, and how Shortenn protects your data.
                            </p>
                            <a href="{{ route('guide-shortlink-safety') }}"
                                class="btn btn-outline-primary stretched-link">Read the Guide <i
                                    class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                        <div class="col-md-4 bg-light d-flex align-items-center justify-content-center">
                            <i class="bi bi-shield-check text-primary opacity-25" style="font-size: 8rem;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documentation Categories -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-info bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-book-half text-info fs-4"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-0">Platform Guides</h3>
                        </div>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-2"><a href="{{ route('how-it-works') }}" class="text-decoration-none link-dark"><i
                                        class="bi bi-chevron-right small me-2"></i>How Shortenn Works</a></li>
                            <li class="mb-2"><a href="{{ route('features') }}" class="text-decoration-none link-dark"><i
                                        class="bi bi-chevron-right small me-2"></i>Feature Breakdown</a></li>
                            <li class="mb-2"><a href="{{ route('faq') }}" class="text-decoration-none link-dark"><i
                                        class="bi bi-chevron-right small me-2"></i>Frequently Asked Questions</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-code-slash text-success fs-4"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-0">For Developers</h3>
                        </div>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-2"><a href="#" class="text-decoration-none link-dark text-muted"><i
                                        class="bi bi-lock small me-2"></i>API Documentation (Coming Soon)</a></li>
                            <li class="mb-2"><a href="{{ route('how-it-works') }}" class="text-decoration-none link-dark"><i
                                        class="bi bi-chevron-right small me-2"></i>Redirect Mechanics</a></li>
                            <li class="mb-2"><a href="{{ route('contact') }}" class="text-decoration-none link-dark"><i
                                        class="bi bi-chevron-right small me-2"></i>Request API Access</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-warning bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-scale text-warning fs-4"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-0">Legal & Policy</h3>
                        </div>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-2"><a href="{{ route('terms') }}" class="text-decoration-none link-dark"><i
                                        class="bi bi-chevron-right small me-2"></i>Terms of Service</a></li>
                            <li class="mb-2"><a href="{{ route('privacy') }}" class="text-decoration-none link-dark"><i
                                        class="bi bi-chevron-right small me-2"></i>Privacy Policy</a></li>
                            <li class="mb-2"><a href="{{ route('contact') }}" class="text-decoration-none link-dark"><i
                                        class="bi bi-chevron-right small me-2"></i>Report Abuse</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter/Update Placeholder -->
        <div class="mt-5 p-5 bg-light rounded-3 text-center border">
            <h3 class="h4 fw-bold">Stay Updated</h3>
            <p class="text-muted mb-4">We are constantly adding new features and guides. Check back often.</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Start Shortening Now</a>
        </div>
    </div>
@endsection