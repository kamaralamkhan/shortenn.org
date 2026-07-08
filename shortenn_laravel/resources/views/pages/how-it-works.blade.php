@extends('layouts.app')

@section('title', 'How Shortenn Works | Technical Process & User Guide')
@section('meta_description', 'Understand the technology behind Shortenn.org. Learn how we process URLs, manage 301/302 redirects, and ensure fast, secure link resolution.')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-5">
                    <h1 class="display-3 fw-bold text-primary mb-3">How It Works</h1>
                    <p class="lead text-muted">From a long URL to a short link and back again. The journey of a click.</p>
                </div>

                <!-- Visual Steps -->
                <div class="row g-4 mb-5">
                    <div class="col-md-3">
                        <div class="card h-100 shadow-sm border-0 text-center p-4">
                            <div class="mb-3 bg-primary bg-opacity-10 d-inline-block rounded-circle p-3">
                                <i class="bi bi-link-45deg text-primary fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold">1. Submission</h4>
                            <p class="small text-muted mb-0">You submit a long URL via our API or Dashboard.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100 shadow-sm border-0 text-center p-4">
                            <div class="mb-3 bg-success bg-opacity-10 d-inline-block rounded-circle p-3">
                                <i class="bi bi-database-check text-success fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold">2. Hashing</h4>
                            <p class="small text-muted mb-0">We generate a unique key (alias) and store it in our indexed
                                database.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100 shadow-sm border-0 text-center p-4">
                            <div class="mb-3 bg-warning bg-opacity-10 d-inline-block rounded-circle p-3">
                                <i class="bi bi-cursor-fill text-warning fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold">3. The Click</h4>
                            <p class="small text-muted mb-0">A user clicks your short link (shortenn.org/alias).</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card h-100 shadow-sm border-0 text-center p-4">
                            <div class="mb-3 bg-info bg-opacity-10 d-inline-block rounded-circle p-3">
                                <i class="bi bi-arrow-return-right text-info fs-2"></i>
                            </div>
                            <h4 class="h5 fw-bold">4. Redirection</h4>
                            <p class="small text-muted mb-0">We look up the key and instantly redirect the user to the
                                destination.</p>
                        </div>
                    </div>
                </div>

                <!-- Deep Dive Section -->
                <div class="card shadow-sm border-0 mb-5">
                    <div class="card-body p-5">
                        <h2 class="h3 fw-bold text-primary mb-4">Inside the Engine: Technical Details</h2>

                        <div class="mb-4">
                            <h3 class="h5 fw-bold text-dark"><i class="bi bi-cpu-fill text-secondary me-2"></i>Resolution
                                Process</h3>
                            <p class="text-secondary">
                                When our server receives a request for a short link, it doesn't just blindly redirect. It
                                performs a series of micro-checks in milliseconds:
                            </p>
                            <ul class="text-secondary small">
                                <li><strong>Existence Check:</strong> Does the alias exist in our database?</li>
                                <li><strong>Status Check:</strong> Is the link active or has it been disabled/deleted?</li>
                                <li><strong>Expiry Validation:</strong> Has the link passed its set expiration date?</li>
                                <li><strong>Cap Check:</strong> Has the link exceeded its maximum click allowance?</li>
                            </ul>
                            <p class="text-secondary">Only if all checks pass is the <code>302 Found</code> header sent to
                                the browser.</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="h5 fw-bold text-dark"><i
                                    class="bi bi-shield-lock-fill text-secondary me-2"></i>Security Filters</h3>
                            <p class="text-secondary">
                                We actively monitor links to prevent abuse. Our system checks destination URLs against known
                                blocklists of malware and phishing sites. If a destination becomes infected after the link
                                was created, we can remotely disable the short link to protect users.
                            </p>
                        </div>

                        <div class="mb-0">
                            <h3 class="h5 fw-bold text-dark"><i class="bi bi-hdd-network-fill text-secondary me-2"></i>Data
                                Storage</h3>
                            <p class="text-secondary mb-0">
                                We use high-performance relational databases with caching layers (Redis) to ensure that
                                popular links load instantly, even under heavy traffic loads. Your data is backed up daily
                                to ensure continuity.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Format Guide (Existing but styled better) -->
                <div class="card bg-light border-0">
                    <div class="card-body p-5">
                        <h2 class="h4 fw-bold text-primary mb-4">Bulk Shortening Syntax Guide</h2>
                        <p class="text-muted mb-4">For power users, our bulk tool is the fastest way to work. Here is the
                            structure:</p>

                        <div class="bg-dark text-white p-4 rounded-3 font-monospace small mb-4">
                            URL | Custom Alias | Expiry Date | Click Limit
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <h6 class="fw-bold">Standard</h6>
                                <code class="d-block bg-white p-2 rounded border mb-1">https://example.com</code>
                                <p class="small text-muted">Just the URL. We generate a random alias.</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fw-bold">With Custom Alias</h6>
                                <code
                                    class="d-block bg-white p-2 rounded border mb-1">https://example.com | my-campaign</code>
                                <p class="small text-muted">Sets the link to shortenn.org/my-campaign</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fw-bold">With Expiry</h6>
                                <code
                                    class="d-block bg-white p-2 rounded border mb-1">https://example.com | | 2025-12-31</code>
                                <p class="small text-muted">Skips alias (auto-generated) but expires on Dec 31st.</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="fw-bold">All Options</h6>
                                <code
                                    class="d-block bg-white p-2 rounded border mb-1">https://example.com | sale | 2025-01-01 | 500</code>
                                <p class="small text-muted">Alias 'sale', expires Jan 1st or after 500 clicks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection