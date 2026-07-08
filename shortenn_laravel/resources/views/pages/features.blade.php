@extends('layouts.app')

@section('meta_title', 'Powerful URL Shortener Features | Analytics, Bulk Tools & API')
@section('meta_description', 'Explore the complete feature set of Shortenn.org. From bulk link processing and custom aliases to real-time analytics and QR code generation, see why professionals choose us.')
@section('canonical_url', 'https://shortenn.org/features')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-bold text-primary mb-3">Features & Capabilities</h1>
            <p class="lead text-muted mx-auto" style="max-width: 800px;">
                Shortenn is more than just a link shortener. It's a comprehensive link management toolkit designed for
                efficiency, reliability, and insight.
            </p>
        </div>

        <!-- Feature Deep Dives -->
        <div class="row g-5 mb-5">
            <!-- Bulk Processing -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                                <i class="bi bi-lightning-fill text-primary fs-2"></i>
                            </div>
                            <h3 class="h4 fw-bold mb-0">Bulk URL Processing</h3>
                        </div>
                        <p class="text-secondary mb-3">
                            Manual link shortening is a thing of the past. Our bulk processing engine allows you to paste
                            hundreds of URLs at once and generate short links instantly.
                        </p>
                        <h5 class="h6 fw-bold text-dark mt-3">Key Benefits:</h5>
                        <ul class="text-muted small ps-3 mb-0">
                            <li class="mb-2">Process up to 100 links in a single batch</li>
                            <li class="mb-2">Line-by-line input format for easy copy-pasting from Excel or CSV</li>
                            <li class="mb-2">Real-time validation to catch malformed URLs before processing</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Custom Aliases -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                                <i class="bi bi-pencil-square text-success fs-2"></i>
                            </div>
                            <h3 class="h4 fw-bold mb-0">Custom Branded Aliases</h3>
                        </div>
                        <p class="text-secondary mb-3">
                            Generic links like `shortenn.org/x7z9p2` are functional, but `shortenn.org/summer-sale` drives
                            action. Customize the tail of your links to match your brand or campaign.
                        </p>
                        <h5 class="h6 fw-bold text-dark mt-3">Why it matters:</h5>
                        <ul class="text-muted small ps-3 mb-0">
                            <li class="mb-2">Increases click-through rates (CTR) by up to 34%</li>
                            <li class="mb-2">Builds link trust by indicating the destination content</li>
                            <li class="mb-2">Makes links memorable for podcasts, radio, and print media</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Real-Time Analytics -->
            <div class="col-lg-12">
                <div class="card shadow-sm border-0 bg-light">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0 text-center">
                                <!-- Visual representation of analytics -->
                                <i class="bi bi-graph-up-arrow text-primary opacity-50 display-1"></i>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-info bg-opacity-10 p-3 rounded-3 me-3">
                                        <i class="bi bi-bar-chart-fill text-info fs-2"></i>
                                    </div>
                                    <h3 class="h4 fw-bold mb-0">Granular Click Analytics</h3>
                                </div>
                                <p class="text-secondary mb-4">
                                    Data is the lifeblood of digital marketing. Our analytics dashboard gives you a
                                    comprehensive view of how your links are performing in real-time.
                                </p>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="bg-white p-3 rounded border">
                                            <div class="fw-bold text-dark">Geographic Data</div>
                                            <div class="small text-muted">See which countries and cities your clicks
                                                generate from.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="bg-white p-3 rounded border">
                                            <div class="fw-bold text-dark">Referrers</div>
                                            <div class="small text-muted">Track traffic sources: Facebook, Twitter, Email,
                                                or Direct.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="bg-white p-3 rounded border">
                                            <div class="fw-bold text-dark">Device Metrics</div>
                                            <div class="small text-muted">Analyze mobile vs. desktop vs. tablet usage.</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="bg-white p-3 rounded border">
                                            <div class="fw-bold text-dark">One-Click Export</div>
                                            <div class="small text-muted">Download complete datasets to CSV for offline
                                                analysis.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expiry & Limits -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-warning bg-opacity-10 p-3 rounded-3 me-3">
                                <i class="bi bi-hourglass-split text-warning fs-2"></i>
                            </div>
                            <h3 class="h4 fw-bold mb-0">Link Expiration Control</h3>
                        </div>
                        <p class="text-secondary mb-3">
                            Perfect for limited-time offers or sensitive content. Set your links to self-destruct after a
                            specific date.
                        </p>
                        <h5 class="h6 fw-bold text-dark mt-3">Use Cases:</h5>
                        <ul class="text-muted small ps-3 mb-0">
                            <li class="mb-2">Flash sales ending at midnight</li>
                            <li class="mb-2">Temporary access to shared documents</li>
                            <li class="mb-2">Event registration links that close automatically</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Click Limits -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-danger bg-opacity-10 p-3 rounded-3 me-3">
                                <i class="bi bi-shield-lock text-danger fs-2"></i>
                            </div>
                            <h3 class="h4 fw-bold mb-0">Click Limiting</h3>
                        </div>
                        <p class="text-secondary mb-3">
                            Need to restrict access to the first 100 users? Our click limit feature automatically disables
                            the link once the threshold is reached.
                        </p>
                        <h5 class="h6 fw-bold text-dark mt-3">Perfect for:</h5>
                        <ul class="text-muted small ps-3 mb-0">
                            <li class="mb-2">Exclusive "First 50 people" giveaways</li>
                            <li class="mb-2">Beta testing with limited seats</li>
                            <li class="mb-2">Controlling bandwidth to destination servers</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- QR Codes -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-dark bg-opacity-10 p-3 rounded-3 me-3">
                                <i class="bi bi-qr-code text-dark fs-2"></i>
                            </div>
                            <h3 class="h4 fw-bold mb-0">Instant QR Codes</h3>
                        </div>
                        <p class="text-secondary mb-3">
                            Bridge the gap between offline and online. Every short link comes with an auto-generated,
                            high-resolution QR code.
                        </p>
                        <p class="text-muted small mb-0">
                            Ideal for print marketing: business cards, flyers, product packaging, and restaurant menus.
                        </p>
                    </div>
                </div>
            </div>

            <!-- No Registration -->
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                                <i class="bi bi-person-check-fill text-primary fs-2"></i>
                            </div>
                            <h3 class="h4 fw-bold mb-0">Frictionless Experience</h3>
                        </div>
                        <p class="text-secondary mb-3">
                            We value your time. You can start creating short links immediately as a guest. No email
                            verification loops, no "credit card required" trials.
                        </p>
                        <p class="text-muted small mb-0">
                            <em>Note: Creating a free account unlocks dashboard management features like editing and
                                deleting links.</em>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center py-5 bg-white rounded-3 shadow-sm border">
            <h2 class="h3 fw-bold mb-3">Experience the Power of Shortenn</h2>
            <p class="text-muted mb-4">Join thousands of marketers and developers optimizing their workflow.</p>
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-5">Get Started for Free</a>
        </div>
    </div>
@endsection