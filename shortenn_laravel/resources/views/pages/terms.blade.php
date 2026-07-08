@extends('layouts.app')

@section('title', 'Terms of Service - Shortenn.org')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="display-4 fw-bold text-primary mb-4">Terms of Service</h1>
                <p class="text-muted mb-4">Last Updated: {{ date('F d, Y') }}</p>

                <div class="card shadow-sm mb-5">
                    <div class="card-body p-5">
                        <p class="lead mb-4">
                            Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the
                            Shortenn.org website (the "Service") operated by Shortenn ("us", "we", or "our").
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">1. Acceptance of Terms</h3>
                        <p class="text-secondary">
                            By accessing or using the Service, you agree to be bound by these Terms. If you disagree with
                            any part of the terms, then you may not access the Service. These Terms apply to all visitors,
                            users, and others who access or use the Service.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">2. Description of Service</h3>
                        <p class="text-secondary">
                            Shortenn.org provides users with tools to shorten lengthy Uniform Resource Locators (URLs) into
                            shorter, more manageable links. We also provide analytics services related to these links. We
                            reserve the right to modify, suspend, or discontinue the Service at any time, with or without
                            notice.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">3. Accounts</h3>
                        <p class="text-secondary">
                            When you create an account with us, you must provide information that is accurate, complete, and
                            current at all times. Failure to do so constitutes a breach of the Terms, which may result in
                            immediate termination of your account on our Service.
                        </p>
                        <p class="text-secondary">
                            You are responsible for safeguarding the password that you use to access the Service and for any
                            activities or actions under your password. You agree not to disclose your password to any third
                            party. You must notify us immediately upon becoming aware of any breach of security or
                            unauthorized use of your account.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">4. Acceptable Use Policy</h3>
                        <p class="text-secondary">
                            You agree not to use the Service to:
                        </p>
                        <ul class="text-secondary">
                            <li>Shorten URLs that redirect to websites containing illegal, harmful, threatening, abusive,
                                harassment, tortious, defamatory, vulgar, obscene, libelous, invasive of another's privacy,
                                hateful, or racially, ethnically, or otherwise objectionable content.</li>
                            <li>Distribute spam, unsolicited advertising, or promotional materials ("phishing").</li>
                            <li>Distribute malware, viruses, worms, Trojan horses, or any other harmful computer code.</li>
                            <li>Impersonate any person or entity or falsely state or otherwise misrepresent your affiliation
                                with a person or entity.</li>
                            <li>Violate any applicable local, state, national, or international law.</li>
                        </ul>
                        <p class="text-secondary">
                            We reserve the right to remove any link that violates these Terms without prior notice. We may
                            also disable or terminate the accounts of users who violate this Acceptable Use Policy.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">5. Intellectual Property</h3>
                        <p class="text-secondary">
                            The Service and its original content, features, and functionality are and will remain the
                            exclusive property of Shortenn and its licensors. The Service is protected by copyright,
                            trademark, and other laws of both the United States and foreign countries. Our trademarks and
                            trade dress may not be used in connection with any product or service without the prior written
                            consent of Shortenn.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">6. Links To Other Web Sites</h3>
                        <p class="text-secondary">
                            Our Service may contain links to third-party web sites or services that are not owned or
                            controlled by Shortenn. We have no control over, and assume no responsibility for, the content,
                            privacy policies, or practices of any third-party web sites or services. You further acknowledge
                            and agree that Shortenn shall not be responsible or liable, directly or indirectly, for any
                            damage or loss caused or alleged to be caused by or in connection with use of or reliance on any
                            such content, goods or services available on or through any such web sites or services.
                        </p>
                        <p class="text-secondary">
                            We strongly advise you to read the terms and conditions and privacy policies of any third-party
                            web sites or services that you visit.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">7. Termination</h3>
                        <p class="text-secondary">
                            We may terminate or suspend access to our Service immediately, without prior notice or
                            liability, for any reason whatsoever, including without limitation if you breach the Terms. All
                            provisions of the Terms which by their nature should survive termination shall survive
                            termination, including, without limitation, ownership provisions, warranty disclaimers,
                            indemnity and limitations of liability.
                        </p>
                        <p class="text-secondary">
                            Upon termination, your right to use the Service will immediately cease. If you wish to terminate
                            your account, you may simply discontinue using the Service.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">8. Limitation of Liability</h3>
                        <p class="text-secondary">
                            In no event shall Shortenn, nor its directors, employees, partners, agents, suppliers, or
                            affiliates, be liable for any indirect, incidental, special, consequential or punitive damages,
                            including without limitation, loss of profits, data, use, goodwill, or other intangible losses,
                            resulting from (i) your access to or use of or inability to access or use the Service; (ii) any
                            conduct or content of any third party on the Service; (iii) any content obtained from the
                            Service; and (iv) unauthorized access, use or alteration of your transmissions or content,
                            whether based on warranty, contract, tort (including negligence) or any other legal theory,
                            whether or not we have been informed of the possibility of such damage, and even if a remedy set
                            forth herein is found to have failed of its essential purpose.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">9. Disclaimer</h3>
                        <p class="text-secondary">
                            Your use of the Service is at your sole risk. The Service is provided on an "AS IS" and "AS
                            AVAILABLE" basis. The Service is provided without warranties of any kind, whether express or
                            implied, including, but not limited to, implied warranties of merchantability, fitness for a
                            particular purpose, non-infringement or course of performance.
                        </p>
                        <p class="text-secondary">
                            Shortenn its subsidiaries, affiliates, and its licensors do not warrant that a) the Service will
                            function uninterrupted, secure or available at any particular time or location; b) any errors or
                            defects will be corrected; c) the Service is free of viruses or other harmful components; or d)
                            the results of using the Service will meet your requirements.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">10. Governing Law</h3>
                        <p class="text-secondary">
                            These Terms shall be governed and construed in accordance with the laws of California, United
                            States, without regard to its conflict of law provisions.
                        </p>
                        <p class="text-secondary">
                            Our failure to enforce any right or provision of these Terms will not be considered a waiver of
                            those rights. If any provision of these Terms is held to be invalid or unenforceable by a court,
                            the remaining provisions of these Terms will remain in effect. These Terms constitute the entire
                            agreement between us regarding our Service, and supersede and replace any prior agreements we
                            might have between us regarding the Service.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">11. Changes</h3>
                        <p class="text-secondary">
                            We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a
                            revision is material we will try to provide at least 30 days notice prior to any new terms
                            taking effect. What constitutes a material change will be determined at our sole discretion.
                        </p>
                        <p class="text-secondary">
                            By continuing to access or use our Service after those revisions become effective, you agree to
                            be bound by the revised terms. If you do not agree to the new terms, please stop using the
                            Service.
                        </p>

                        <h3 class="h5 fw-bold text-primary mt-4">12. Contact Us</h3>
                        <p class="text-secondary">
                            If you have any questions about these Terms, please contact us at via our <a
                                href="{{ route('contact') }}">Contact Page</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection