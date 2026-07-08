@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold text-primary mb-4">Privacy Policy</h1>
            <p class="text-muted mb-4">Last updated: {{ date('F d, Y') }}</p>
            
            <p class="lead mb-4">At Shortenn.org, we are committed to protecting your privacy and ensuring transparency about how we collect, use, and safeguard your information. This Privacy Policy explains our data practices for our URL shortening service.</p>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">1. Information We Collect</h3>
                    
                    <h4 class="h6 mt-3">1.1 Information You Provide</h4>
                    <p>When you use Shortenn, we may collect:</p>
                    <ul>
                        <li><strong>URLs you shorten:</strong> The original long URLs and any custom aliases you create</li>
                        <li><strong>Account information (optional):</strong> Username, email address, and encrypted password if you choose to register for an account</li>
                        <li><strong>Optional notes:</strong> Any descriptive notes you add to your shortened links</li>
                        <li><strong>Link settings:</strong> Expiration dates, click limits, and active/inactive status you configure</li>
                    </ul>

                    <h4 class="h6 mt-3">1.2 Automatically Collected Information</h4>
                    <p>When someone clicks a shortened link, we automatically collect:</p>
                    <ul>
                        <li><strong>IP addresses:</strong> The IP address of visitors for analytics and abuse prevention</li>
                        <li><strong>User agent information:</strong> Browser type, version, operating system, and device type</li>
                        <li><strong>Referrer information:</strong> The webpage or source that directed the user to the short link</li>
                        <li><strong>Timestamp:</strong> Date and time of each click</li>
                        <li><strong>Geographic data:</strong> Approximate location based on IP address (country/region level)</li>
                    </ul>

                    <h4 class="h6 mt-3">1.3 Cookies and Similar Technologies</h4>
                    <p>We use cookies and similar tracking technologies to:</p>
                    <ul>
                        <li><strong>Session cookies:</strong> Maintain your logged-in state and user preferences</li>
                        <li><strong>Authentication cookies:</strong> Verify your identity when accessing your dashboard</li>
                        <li><strong>Security cookies:</strong> Detect and prevent fraudulent activity and abuse</li>
                        <li><strong>Analytics cookies:</strong> Understand how visitors use our service to improve functionality</li>
                    </ul>
                    <p>You can control cookie preferences through your browser settings, though some features may not function properly if cookies are disabled.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">2. How We Use Your Information</h3>
                    <p>We use collected information for the following purposes:</p>
                    
                    <h4 class="h6 mt-3">2.1 Service Delivery</h4>
                    <ul>
                        <li>Create and manage shortened URLs</li>
                        <li>Redirect users from short links to destination URLs</li>
                        <li>Process and honor link expiration dates and click limits</li>
                        <li>Provide access to your dashboard and link management tools</li>
                    </ul>

                    <h4 class="h6 mt-3">2.2 Analytics and Insights</h4>
                    <ul>
                        <li>Track click statistics and generate analytics reports for link creators</li>
                        <li>Provide insights on geographic distribution, device types, and referral sources</li>
                        <li>Help you measure campaign effectiveness and user engagement</li>
                        <li>Identify usage patterns to improve our service</li>
                    </ul>

                    <h4 class="h6 mt-3">2.3 Security and Fraud Prevention</h4>
                    <ul>
                        <li>Detect and prevent abuse, spam, and malicious activity</li>
                        <li>Identify and block automated bot traffic</li>
                        <li>Protect against unauthorized access to accounts</li>
                        <li>Maintain the integrity and security of our platform</li>
                    </ul>

                    <h4 class="h6 mt-3">2.4 Service Improvement</h4>
                    <ul>
                        <li>Analyze aggregate usage data to enhance features and performance</li>
                        <li>Troubleshoot technical issues and optimize redirect speeds</li>
                        <li>Develop new features based on user needs and feedback</li>
                    </ul>

                    <h4 class="h6 mt-3">2.5 Communication</h4>
                    <ul>
                        <li>Send important service updates and security notifications</li>
                        <li>Respond to your inquiries and support requests</li>
                        <li>Notify you of terms or policy changes</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">3. Data Sharing and Disclosure</h3>
                    
                    <p><strong>We do not sell your personal information to third parties.</strong> We may share information only in the following limited circumstances:</p>

                    <h4 class="h6 mt-3">3.1 Service Providers</h4>
                    <p>We work with trusted service providers who assist in operating our platform, such as:</p>
                    <ul>
                        <li>Hosting services (servers and infrastructure)</li>
                        <li>Database management</li>
                        <li>Security and monitoring services</li>
                    </ul>
                    <p>These providers access information only as necessary to perform their functions and are contractually obligated to protect your data.</p>

                    <h4 class="h6 mt-3">3.2 Legal Requirements</h4>
                    <p>We may disclose information if required by law, court order, or government regulation, or if we believe disclosure is necessary to:</p>
                    <ul>
                        <li>Comply with legal obligations</li>
                        <li>Protect our rights, property, or safety</li>
                        <li>Prevent fraud or abuse</li>
                        <li>Protect the safety of our users or the public</li>
                    </ul>

                    <h4 class="h6 mt-3">3.3 Business Transfers</h4>
                    <p>If Shortenn.org is involved in a merger, acquisition, or sale of assets, your information may be transferred as part of that transaction. We will notify you of any such change via prominent notice on our website.</p>

                    <h4 class="h6 mt-3">3.4 Analytics and Advertising</h4>
                    <p>We use Google AdSense to display advertisements on our website. Google may use cookies and similar technologies to:</p>
                    <ul>
                        <li>Serve personalized advertisements based on your interests</li>
                        <li>Measure ad performance and engagement</li>
                        <li>Understand visitor behavior across websites</li>
                    </ul>
                    <p>You can opt out of personalized advertising by visiting <a href="https://www.google.com/settings/ads" target="_blank" rel="noopener">Google's Ads Settings</a> or <a href="http://www.aboutads.info/choices/" target="_blank" rel="noopener">aboutads.info</a>.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">4. Click Tracking and Redirect Safety</h3>
                    
                    <p>When users click on shortened links created with Shortenn:</p>
                    
                    <h4 class="h6 mt-3">4.1 What We Track</h4>
                    <ul>
                        <li>Each click is logged with timestamp, IP address, user agent, and referrer</li>
                        <li>This data is used to generate analytics for the link creator</li>
                        <li>Click logs help detect bot traffic and fraudulent activity</li>
                    </ul>

                    <h4 class="h6 mt-3">4.2 Redirect Process</h4>
                    <ul>
                        <li>All redirects use HTTPS encryption for secure data transmission</li>
                        <li>We verify link status (active, not expired, within click limits) before redirecting</li>
                        <li>Redirects are instantaneous—we do not insert interstitial pages or delays</li>
                        <li>We do not modify or alter the destination URL</li>
                    </ul>

                    <h4 class="h6 mt-3">4.3 User Privacy</h4>
                    <ul>
                        <li>Click analytics are only visible to the link creator (account holder)</li>
                        <li>We do not share individual click data with third parties</li>
                        <li>Aggregate statistics may be used internally for service improvement</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">5. Data Security</h3>
                    
                    <p>We implement industry-standard security measures to protect your data:</p>
                    <ul>
                        <li><strong>Encryption:</strong> All data transmission uses HTTPS/SSL encryption</li>
                        <li><strong>Password Protection:</strong> Account passwords are hashed using bcrypt with strong salting</li>
                        <li><strong>Access Controls:</strong> Strict access controls limit who can view user data</li>
                        <li><strong>Regular Monitoring:</strong> Continuous monitoring for suspicious activity and security threats</li>
                        <li><strong>Secure Infrastructure:</strong> Hosting on secure, professionally managed servers</li>
                        <li><strong>Data Backups:</strong> Regular backups to prevent data loss</li>
                    </ul>
                    
                    <p>While we strive to protect your information, no method of transmission over the internet or electronic storage is 100% secure. We cannot guarantee absolute security but continuously work to improve our safeguards.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">6. Data Retention</h3>
                    
                    <h4 class="h6 mt-3">6.1 Link Data</h4>
                    <ul>
                        <li>Shortened URLs and associated data are retained indefinitely unless you delete them</li>
                        <li>You can delete links at any time through your dashboard</li>
                        <li>Expired or disabled links remain in our database but cannot be accessed publicly</li>
                    </ul>

                    <h4 class="h6 mt-3">6.2 Click Analytics</h4>
                    <ul>
                        <li>Click logs are retained for analytics and security purposes</li>
                        <li>Aggregate statistics may be kept indefinitely</li>
                        <li>Individual IP addresses may be anonymized after a retention period</li>
                    </ul>

                    <h4 class="h6 mt-3">6.3 Account Data</h4>
                    <ul>
                        <li>Account information is retained as long as your account is active</li>
                        <li>You may request account deletion by contacting us</li>
                        <li>Upon account deletion, personal information is removed but anonymized usage statistics may remain</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">7. Your Rights and Choices</h3>
                    
                    <p>You have the following rights regarding your data:</p>
                    
                    <h4 class="h6 mt-3">7.1 Access and Portability</h4>
                    <ul>
                        <li>Access your shortened links and click analytics through your dashboard</li>
                        <li>Export your link data in CSV format</li>
                        <li>Request a copy of your personal information by contacting us</li>
                    </ul>

                    <h4 class="h6 mt-3">7.2 Modification and Deletion</h4>
                    <ul>
                        <li>Update your account information at any time</li>
                        <li>Delete individual shortened links through your dashboard</li>
                        <li>Request complete account deletion by contacting us</li>
                    </ul>

                    <h4 class="h6 mt-3">7.3 Opt-Out Options</h4>
                    <ul>
                        <li>Disable cookies through browser settings (may affect functionality)</li>
                        <li>Opt out of personalized ads via Google Ads Settings</li>
                        <li>Use our service without creating an account to minimize data collection</li>
                    </ul>

                    <h4 class="h6 mt-3">7.4 International Users</h4>
                    <p>If you are located outside the United States, please note that your information may be transferred to, stored, and processed in the United States. By using our service, you consent to this transfer.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">8. Children's Privacy</h3>
                    
                    <p>Shortenn.org is not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe your child has provided us with personal information, please contact us immediately, and we will delete such information from our systems.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">9. Third-Party Links</h3>
                    
                    <p>Our service enables you to create links to third-party websites. This Privacy Policy does not apply to those external sites. We are not responsible for the privacy practices or content of websites you access through shortened links. We encourage you to review the privacy policies of any third-party sites you visit.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">10. Changes to This Privacy Policy</h3>
                    
                    <p>We may update this Privacy Policy from time to time to reflect changes in our practices, technology, legal requirements, or other factors. When we make changes:</p>
                    <ul>
                        <li>We will update the "Last updated" date at the top of this page</li>
                        <li>Significant changes will be prominently announced on our website</li>
                        <li>Continued use of our service after changes constitutes acceptance of the updated policy</li>
                    </ul>
                    <p>We encourage you to review this Privacy Policy periodically to stay informed about how we protect your information.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="text-primary">11. Google AdSense and Cookies</h3>
                    
                    <p>Shortenn.org uses Google AdSense to display advertisements. Here's what you should know:</p>
                    
                    <h4 class="h6 mt-3">11.1 How AdSense Works</h4>
                    <ul>
                        <li>Google uses cookies to serve ads based on your prior visits to our website or other websites</li>
                        <li>Google's use of advertising cookies enables it and its partners to serve ads based on your interests</li>
                        <li>Ad serving is based on your browsing history across multiple sites</li>
                    </ul>

                    <h4 class="h6 mt-3">11.2 Opting Out</h4>
                    <p>You can opt out of personalized advertising by:</p>
                    <ul>
                        <li>Visiting <a href="https://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads Settings</a></li>
                        <li>Using the <a href="http://www.aboutads.info/choices/" target="_blank" rel="noopener">Digital Advertising Alliance's opt-out page</a></li>
                        <li>Installing browser extensions that block advertising trackers</li>
                    </ul>

                    <h4 class="h6 mt-3">11.3 Third-Party Vendors</h4>
                    <p>Google and other third-party vendors may use cookies to serve ads based on your visits to this and other websites. For more information, visit <a href="https://policies.google.com/technologies/ads" target="_blank" rel="noopener">Google's Advertising Policies</a>.</p>
                </div>
            </div>

            <div class="card shadow-sm border-primary">
                <div class="card-body">
                    <h3 class="text-primary">12. Contact Us</h3>
                    
                    <p>If you have questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us:</p>
                    
                    <ul class="list-unstyled">
                        <li><strong>Website:</strong> <a href="{{ route('contact') }}">{{ route('contact') }}</a></li>
                        <li><strong>Email:</strong> Contact form on our website</li>
                    </ul>
                    
                    <p class="mb-0 mt-3"><small class="text-muted">We will respond to your inquiry within a reasonable timeframe and make every effort to address your concerns promptly.</small></p>
                </div>
            </div>

            <div class="alert alert-info mt-4">
                <p class="mb-0"><strong>Summary:</strong> We collect URL data and click analytics to provide our shortening service. We use cookies for authentication and Google AdSense for advertisements. We do not sell your personal information. You can manage your links, export data, and delete your account at any time.</p>
            </div>
        </div>
    </div>
</div>
@endsection
