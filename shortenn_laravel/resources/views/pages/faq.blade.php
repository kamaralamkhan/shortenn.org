@extends('layouts.app')

@section('meta_title', 'FAQ | Help Center & Common Questions - Shortenn.org')
@section('meta_description', 'Find answers to all your questions about Shortenn.org. From how to shorten links to account management, API usage, and troubleshooting guide.')
@section('canonical_url', 'https://shortenn.org/faq')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-bold text-primary mb-3">Help Center</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Everything you need to know about using Shortenn to manage your links.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- General Questions -->
                <div class="mb-5">
                    <h2 class="h4 text-primary fw-bold border-bottom pb-2 mb-4"><i
                            class="bi bi-info-circle-fill me-2"></i>General Information</h2>
                    <div class="accordion shadow-sm" id="faqGeneral">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gen1">
                                    What is Shortenn.org?
                                </button>
                            </h2>
                            <div id="gen1" class="accordion-collapse collapse show" data-bs-parent="#faqGeneral">
                                <div class="accordion-body text-secondary">
                                    Shortenn.org is a free, high-performance URL shortening service that allows you to
                                    transform long, complex URLs into short, manageable links. We offer both guest access
                                    for quick tasks and account-based management for tracking analytics and editing links.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gen2">
                                    Is Shortenn really free?
                                </button>
                            </h2>
                            <div id="gen2" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                <div class="accordion-body text-secondary">
                                    Yes! Shortenn is completely free to use. We do not charge for creating links, custom
                                    aliases, or accessing analytics. We serve advertisements to cover our server costs,
                                    ensuring the service remains free for everyone.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gen3">
                                    Do I need to register to use the service?
                                </button>
                            </h2>
                            <div id="gen3" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                <div class="accordion-body text-secondary">
                                    No registration is required to shorten links. However, creating a free account is highly
                                    recommended if you want to track click analytics, edit your links later, or manage a
                                    large volume of URLs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gen4">
                                    How long do the links last?
                                </button>
                            </h2>
                            <div id="gen4" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                <div class="accordion-body text-secondary">
                                    By default, links created on Shortenn do not expire and will remain active indefinitely.
                                    You can optionally set an expiration date if you want a link to stop working after a
                                    specific time.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gen5">
                                    Can I shorten affiliate links?
                                </button>
                            </h2>
                            <div id="gen5" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                                <div class="accordion-body text-secondary">
                                    Yes, you can shorten affiliate links. However, please ensure you comply with the terms
                                    of your affiliate program, as some networks have specific rules about link masking. We
                                    strictly prohibit using our service for spam or malicious redirections.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features & Usage -->
                <div class="mb-5">
                    <h2 class="h4 text-primary fw-bold border-bottom pb-2 mb-4"><i class="bi bi-tools me-2"></i>Features &
                        Usage</h2>
                    <div class="accordion shadow-sm" id="faqFeatures">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#feat1">
                                    How does the bulk shortening feature work?
                                </button>
                            </h2>
                            <div id="feat1" class="accordion-collapse collapse" data-bs-parent="#faqFeatures">
                                <div class="accordion-body text-secondary">
                                    Our bulk tool accepts a list of URLs, one per line. You can simply paste a list from a
                                    spreadsheet or text file. The system processes them in a batch and returns a list of
                                    shortened links. You can also specify aliases and expiry dates using the pipe `|`
                                    separator format (e.g., `https://google.com | my-alias`).
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#feat2">
                                    What are "Custom Aliases"?
                                </button>
                            </h2>
                            <div id="feat2" class="accordion-collapse collapse" data-bs-parent="#faqFeatures">
                                <div class="accordion-body text-secondary">
                                    A custom alias allows you to choose the text that appears after `shortenn.org/`. Instead
                                    of a random string like `a7x92`, you can create `shortenn.org/my-newsletter`. This
                                    improves brand recognition and trust. Aliases must be unique, 3-30 characters long, and
                                    contain only letters, numbers, dashes, or underscores.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#feat3">
                                    How do Click Limits work?
                                </button>
                            </h2>
                            <div id="feat3" class="accordion-collapse collapse" data-bs-parent="#faqFeatures">
                                <div class="accordion-body text-secondary">
                                    You can set a maximum number of clicks for a link. Once that number is reached, the link
                                    will automatically deactivate and show a "Limit Reached" page to subsequent visitors.
                                    This is useful for limited-time offers or restricted access campaigns.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#feat4">
                                    Can I change the destination URL later?
                                </button>
                            </h2>
                            <div id="feat4" class="accordion-collapse collapse" data-bs-parent="#faqFeatures">
                                <div class="accordion-body text-secondary">
                                    While registered users can delete links, we currently do not support editing the
                                    destination URL of an existing short link to prevent abuse (e.g., bait-and-switch
                                    tactics). You would need to create a new short link for the new destination.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#feat5">
                                    Where can I find my QR codes?
                                </button>
                            </h2>
                            <div id="feat5" class="accordion-collapse collapse" data-bs-parent="#faqFeatures">
                                <div class="accordion-body text-secondary">
                                    Every time you create a link, a QR code icon appears next to it in the results list.
                                    Clicking this icon allows you to view and download a high-resolution QR code that
                                    redirects to your short link.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Technical & Security -->
                <div class="mb-5">
                    <h2 class="h4 text-primary fw-bold border-bottom pb-2 mb-4"><i
                            class="bi bi-shield-check me-2"></i>Technical & Security</h2>
                    <div class="accordion shadow-sm" id="faqTech">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#tech1">
                                    Are the links SEO friendly?
                                </button>
                            </h2>
                            <div id="tech1" class="accordion-collapse collapse" data-bs-parent="#faqTech">
                                <div class="accordion-body text-secondary">
                                    Yes. We use 302 redirects by default, but for permanent links, the behavior acts
                                    similarly to a standard redirect. Search engines generally treat the destination URL as
                                    the canonical version, so your SEO "juice" is largely preserved for the target site.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#tech2">
                                    What data do you track?
                                </button>
                            </h2>
                            <div id="tech2" class="accordion-collapse collapse" data-bs-parent="#faqTech">
                                <div class="accordion-body text-secondary">
                                    For analytics purposes, we record the timestamp, visitor's IP address (for geolocation),
                                    User Agent (browser/device type), and the Referring URL. This data is aggregated and
                                    displayed in your dashboard. We do not track personal PII beyond what is necessary for
                                    these metrics.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#tech3">
                                    Why is my link marked as "suspicious"?
                                </button>
                            </h2>
                            <div id="tech3" class="accordion-collapse collapse" data-bs-parent="#faqTech">
                                <div class="accordion-body text-secondary">
                                    We use automated systems and third-party databases (like Google Safe Browsing) to scan
                                    for malware, phishing, and spam. If a destination URL is flagged, we disable the short
                                    link immediately to protect users. If you believe this is an error, please contact
                                    support.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#tech4">
                                    Do you have an API?
                                </button>
                            </h2>
                            <div id="tech4" class="accordion-collapse collapse" data-bs-parent="#faqTech">
                                <div class="accordion-body text-secondary">
                                    We are currently developing a public API for developers. If you have a specific
                                    high-volume use case, please contact us directly, and we may be able to provide early
                                    access or a custom solution.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Troubleshooting -->
                <div class="mb-5">
                    <h2 class="h4 text-primary fw-bold border-bottom pb-2 mb-4"><i
                            class="bi bi-question-circle me-2"></i>Troubleshooting</h2>
                    <div class="accordion shadow-sm" id="faqTrouble">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#trb1">
                                    My short link isn't working/redirecting.
                                </button>
                            </h2>
                            <div id="trb1" class="accordion-collapse collapse" data-bs-parent="#faqTrouble">
                                <div class="accordion-body text-secondary">
                                    Please check if:
                                    <ul>
                                        <li>The destination URL is valid and online.</li>
                                        <li>The link has expired (set expiry date).</li>
                                        <li>The click limit has been reached.</li>
                                        <li>You accidentally added an extra space when copying the link.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#trb2">
                                    I forgot my password.
                                </button>
                            </h2>
                            <div id="trb2" class="accordion-collapse collapse" data-bs-parent="#faqTrouble">
                                <div class="accordion-body text-secondary">
                                    If you cannot access your account, please use the "Forgot Password" link on the login
                                    page to initiate a password reset via your registered email address.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#trb3">
                                    How do I report a malicious link?
                                </button>
                            </h2>
                            <div id="trb3" class="accordion-collapse collapse" data-bs-parent="#faqTrouble">
                                <div class="accordion-body text-secondary">
                                    Use our Contact form and select "Report Abuse" as the subject. Please include the short
                                    URL in question. We investigate all abuse reports within 24 hours.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center py-4">
                    <p class="text-muted">Can't find what you're looking for?</p>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
@endsection