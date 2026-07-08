@extends('layouts.app')

@section('title', 'Use Cases')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">Use Cases</h1>
        <p class="lead text-muted">Discover how Shortenn can help you in various scenarios</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h3 class="text-primary mb-3">Marketing Campaigns</h3>
                    <p>Track the performance of your marketing campaigns with detailed click analytics. Set expiry dates for time-limited promotions and create branded short links for better recognition.</p>
                    <ul>
                        <li>Campaign tracking</li>
                        <li>A/B testing</li>
                        <li>Social media marketing</li>
                        <li>Email campaigns</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h3 class="text-primary mb-3">Content Creators</h3>
                    <p>Share your content across multiple platforms with clean, memorable links. Perfect for YouTubers, bloggers, and influencers who need to share links frequently.</p>
                    <ul>
                        <li>Video descriptions</li>
                        <li>Social media posts</li>
                        <li>Bio links</li>
                        <li>Resource sharing</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h3 class="text-primary mb-3">Event Management</h3>
                    <p>Create short links for event registrations, venue maps, and schedules. Set click limits for limited-capacity events and expiry dates for time-sensitive information.</p>
                    <ul>
                        <li>Event registration</li>
                        <li>Ticket sales</li>
                        <li>Conference materials</li>
                        <li>Venue information</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h3 class="text-primary mb-3">Business & Teams</h3>
                    <p>Share internal resources, client portals, and project links with your team. Export analytics for reporting and track engagement across your organization.</p>
                    <ul>
                        <li>Internal documentation</li>
                        <li>Client portals</li>
                        <li>Team resources</li>
                        <li>Report tracking</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h3 class="text-primary mb-3">Print Materials</h3>
                    <p>Add QR codes to business cards, flyers, posters, and brochures. Short URLs are easier to type and remember when printed on physical materials.</p>
                    <ul>
                        <li>Business cards</li>
                        <li>Brochures & flyers</li>
                        <li>Product packaging</li>
                        <li>Print advertisements</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h3 class="text-primary mb-3">Education</h3>
                    <p>Teachers and students can share course materials, assignments, and resources with clean, easy-to-remember links. Track engagement with learning materials.</p>
                    <ul>
                        <li>Course materials</li>
                        <li>Assignment submissions</li>
                        <li>Research resources</li>
                        <li>Online learning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
