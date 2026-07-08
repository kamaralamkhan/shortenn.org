@extends('layouts.app')

@section('title', 'Contact Us - Shortenn.org Support')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <!-- Contact Form Column -->
            <div class="col-lg-7 mb-5 mb-lg-0">
                <h1 class="display-4 fw-bold text-primary mb-4">Get in Touch</h1>
                <p class="lead text-secondary mb-5">
                    Have a question, suggestion, or need assistance? We're here to help! Fill out the form below and our
                    team will get back to you.
                </p>

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-bold small text-uppercase text-muted">Your
                                        Name</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0" id="name"
                                        required placeholder="John Doe">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-bold small text-uppercase text-muted">Email
                                        Address</label>
                                    <input type="email" class="form-control form-control-lg bg-light border-0" id="email"
                                        required placeholder="name@example.com">
                                </div>
                                <div class="col-12">
                                    <label for="subject"
                                        class="form-label fw-bold small text-uppercase text-muted">Subject</label>
                                    <select class="form-select form-select-lg bg-light border-0" id="subject" required>
                                        <option value="" selected disabled>Choose a topic...</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="support">Technical Support</option>
                                        <option value="billing">Billing & Accounts</option>
                                        <option value="abuse">Report Abuse / Malicious Link</option>
                                        <option value="partnership">Partnership Opportunities</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message"
                                        class="form-label fw-bold small text-uppercase text-muted">Message</label>
                                    <textarea class="form-control form-control-lg bg-light border-0" id="message" rows="6"
                                        required placeholder="How can we help you?"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Info Column -->
            <div class="col-lg-4 offset-lg-1">
                <div class="mb-5">
                    <h3 class="h5 fw-bold text-dark mb-4">Contact Information</h3>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                <i class="bi bi-envelope-fill fs-5"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="fw-bold mb-1">Email Support</h6>
                            <p class="text-muted small mb-0">support@shortenn.org</p>
                            <p class="text-muted small">We aim to reply within 24 hours.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                <i class="bi bi-geo-alt-fill fs-5"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="fw-bold mb-1">Location</h6>
                            <p class="text-muted small mb-0">Digital Service Global</p>
                            <p class="text-muted small">Operating Globally</p>
                        </div>
                    </div>
                </div>

                <div class="card bg-light border-0 mb-5">
                    <div class="card-body p-4">
                        <h3 class="h6 fw-bold text-dark mb-3">Support Hours</h3>
                        <ul class="list-unstyled mb-0 small text-secondary">
                            <li class="d-flex justify-content-between mb-2">
                                <span>Monday - Friday</span>
                                <span class="fw-bold">9:00 AM - 6:00 PM EST</span>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Saturday</span>
                                <span class="fw-bold">10:00 AM - 2:00 PM EST</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Sunday</span>
                                <span class="fw-bold">Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mb-4">
                    <h3 class="h6 fw-bold text-dark mb-3">Report Abuse</h3>
                    <p class="text-muted small">
                        Found a suspicious link? Help us keep the internet safe.
                    </p>
                    <a href="#" class="btn btn-outline-danger btn-sm w-100"><i class="bi bi-flag-fill me-2"></i>Report
                        Violation</a>
                </div>
            </div>
        </div>
    </div>
@endsection