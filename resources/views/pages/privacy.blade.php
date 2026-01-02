@extends('layouts.app')

@section('title', 'Privacy Policy - Decision Forest')
@section('meta_description', 'Decision Forest Privacy Policy. Learn how we collect, use, and protect your personal information.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Privacy <span class="gradient-text">Policy</span></h1>
        <p>Last updated: {{ date('F d, Y') }}</p>
    </div>
</section>

<!-- Privacy Content -->
<section class="section">
    <div class="container">
        <div class="legal-content">
            <p>Decision Forest ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website decisionforest.in and participate in our community.</p>

            <h2>1. Information We Collect</h2>
            <p>We may collect information about you in various ways:</p>

            <h3>Personal Information</h3>
            <p>When you register for our community, contact us, or participate in our events, we may collect:</p>
            <ul>
                <li>Name and email address</li>
                <li>Educational institution and course details</li>
                <li>Contact information (phone number, if provided)</li>
                <li>Social media profiles (LinkedIn, GitHub, etc.)</li>
                <li>Any other information you voluntarily provide</li>
            </ul>

            <h3>Automatically Collected Information</h3>
            <p>When you access our website, we may automatically collect:</p>
            <ul>
                <li>Device information (browser type, operating system)</li>
                <li>IP address and location data</li>
                <li>Pages visited and time spent on our website</li>
                <li>Referring website addresses</li>
            </ul>

            <h2>2. How We Use Your Information</h2>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide and maintain our community services</li>
                <li>Send you updates about events, hackathons, and opportunities</li>
                <li>Respond to your inquiries and provide support</li>
                <li>Improve our website and community experience</li>
                <li>Connect you with relevant opportunities (internships, jobs, partnerships)</li>
                <li>Send promotional communications (with your consent)</li>
                <li>Analyze usage patterns to enhance our services</li>
            </ul>

            <h2>3. Information Sharing</h2>
            <p>We do not sell, trade, or rent your personal information to third parties. We may share your information in the following circumstances:</p>
            <ul>
                <li><strong>Event Partners:</strong> When you register for events co-hosted with partner organizations, relevant information may be shared with them.</li>
                <li><strong>Service Providers:</strong> We may share information with third-party vendors who assist us in operating our website and services.</li>
                <li><strong>Legal Requirements:</strong> We may disclose information if required by law or to protect our rights and safety.</li>
                <li><strong>With Your Consent:</strong> We may share information with your explicit consent for specific purposes.</li>
            </ul>

            <h2>4. Data Security</h2>
            <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet is 100% secure, and we cannot guarantee absolute security.</p>

            <h2>5. Your Rights</h2>
            <p>You have the right to:</p>
            <ul>
                <li>Access the personal information we hold about you</li>
                <li>Request correction of inaccurate information</li>
                <li>Request deletion of your personal information</li>
                <li>Opt-out of marketing communications</li>
                <li>Withdraw consent for data processing</li>
            </ul>
            <p>To exercise these rights, please contact us at contact@decisionforest.in.</p>

            <h2>6. Cookies and Tracking</h2>
            <p>Our website may use cookies and similar tracking technologies to enhance your experience. Cookies are small data files stored on your device. You can control cookie settings through your browser preferences.</p>

            <h2>7. Third-Party Links</h2>
            <p>Our website may contain links to third-party websites (LinkedIn, WhatsApp, GitHub, etc.). We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.</p>

            <h2>8. Children's Privacy</h2>
            <p>Our services are primarily intended for individuals 16 years of age or older. We do not knowingly collect personal information from children under 16. If we become aware of such collection, we will take steps to delete the information.</p>

            <h2>9. Data Retention</h2>
            <p>We retain your personal information for as long as necessary to fulfill the purposes outlined in this policy, unless a longer retention period is required by law. When information is no longer needed, we will securely delete or anonymize it.</p>

            <h2>10. International Data Transfers</h2>
            <p>Your information may be transferred to and processed in countries other than your country of residence. We ensure appropriate safeguards are in place for such transfers.</p>

            <h2>11. Changes to This Policy</h2>
            <p>We may update this Privacy Policy from time to time. We will notify you of any material changes by posting the new policy on this page and updating the "Last updated" date. Your continued use of our services after changes constitutes acceptance of the updated policy.</p>

            <h2>12. Contact Us</h2>
            <p>If you have any questions about this Privacy Policy or our data practices, please contact us:</p>
            <ul>
                <li>Email: contact@decisionforest.in</li>
                <li>Website: www.decisionforest.in/contact</li>
                <li>LinkedIn: linkedin.com/company/decisionforest</li>
            </ul>

            <div style="margin-top: 40px; padding: 24px; background: var(--bg-card); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
                <p style="margin: 0;"><strong>Your privacy matters to us.</strong> We are committed to being transparent about our data practices and giving you control over your information. If you have any concerns, please don't hesitate to reach out.</p>
            </div>
        </div>
    </div>
</section>
@endsection
