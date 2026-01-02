@extends('layouts.app')

@section('title', 'Terms of Service - Decision Forest')
@section('meta_description', 'Decision Forest Terms of Service. Read our terms and conditions for using our website and community services.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Terms of <span class="gradient-text">Service</span></h1>
        <p>Last updated: {{ date('F d, Y') }}</p>
    </div>
</section>

<!-- Terms Content -->
<section class="section">
    <div class="container">
        <div class="legal-content">
            <p>Welcome to Decision Forest. These Terms of Service ("Terms") govern your access to and use of our website, community platforms, events, and services. By accessing or using our services, you agree to be bound by these Terms.</p>

            <h2>1. Acceptance of Terms</h2>
            <p>By accessing our website at decisionforest.in, joining our community, or participating in our events, you acknowledge that you have read, understood, and agree to be bound by these Terms. If you do not agree, please do not use our services.</p>

            <h2>2. Description of Services</h2>
            <p>Decision Forest provides:</p>
            <ul>
                <li>A community platform for CSE students and developers</li>
                <li>Hackathons and coding events</li>
                <li>Workshops and educational content</li>
                <li>Networking and career development opportunities</li>
                <li>Placement support and resources</li>
            </ul>

            <h2>3. Eligibility</h2>
            <p>To use our services, you must:</p>
            <ul>
                <li>Be at least 16 years of age</li>
                <li>Be a student, professional, or enthusiast in the technology field</li>
                <li>Provide accurate and complete information during registration</li>
                <li>Agree to comply with these Terms and our Community Guidelines</li>
            </ul>

            <h2>4. Community Guidelines</h2>
            <p>As a member of Decision Forest, you agree to:</p>
            <ul>
                <li><strong>Be Respectful:</strong> Treat all members with respect and professionalism</li>
                <li><strong>No Harassment:</strong> Do not engage in bullying, discrimination, or harassment of any kind</li>
                <li><strong>No Spam:</strong> Do not post irrelevant content, advertisements, or promotional material without permission</li>
                <li><strong>Intellectual Property:</strong> Respect copyrights, trademarks, and intellectual property rights</li>
                <li><strong>Honest Representation:</strong> Do not misrepresent yourself, your qualifications, or your affiliations</li>
                <li><strong>Legal Compliance:</strong> Do not engage in any illegal activities or encourage others to do so</li>
            </ul>

            <h2>5. User Content</h2>
            <p>When you post, share, or submit content through our platforms:</p>
            <ul>
                <li>You retain ownership of your content</li>
                <li>You grant Decision Forest a non-exclusive, royalty-free license to use, display, and distribute your content in connection with our services</li>
                <li>You represent that you have the right to share such content</li>
                <li>You agree not to post content that is illegal, harmful, defamatory, or violates others' rights</li>
            </ul>

            <h2>6. Intellectual Property</h2>
            <p>The Decision Forest name, logo, website design, and original content are owned by Decision Forest and protected by intellectual property laws. You may not:</p>
            <ul>
                <li>Use our branding without written permission</li>
                <li>Copy, modify, or distribute our proprietary content</li>
                <li>Create derivative works from our materials without authorization</li>
            </ul>

            <h2>7. Events and Hackathons</h2>
            <p>Participation in Decision Forest events is subject to:</p>
            <ul>
                <li>Specific event rules and guidelines provided at registration</li>
                <li>Code of conduct requirements</li>
                <li>Intellectual property terms for projects created during events</li>
                <li>Our right to use photos, videos, and testimonials from events for promotional purposes</li>
            </ul>

            <h2>8. Partnerships and Third Parties</h2>
            <p>We may partner with companies, colleges, and other organizations. When participating in partner events:</p>
            <ul>
                <li>Additional terms from partners may apply</li>
                <li>Your information may be shared with relevant partners as disclosed</li>
                <li>We are not responsible for third-party services or websites</li>
            </ul>

            <h2>9. Disclaimers</h2>
            <p>Our services are provided "as is" without warranties of any kind. We do not guarantee:</p>
            <ul>
                <li>Placement or job opportunities</li>
                <li>Specific learning outcomes</li>
                <li>Uninterrupted access to our services</li>
                <li>Accuracy of all information shared by community members</li>
            </ul>

            <h2>10. Limitation of Liability</h2>
            <p>To the maximum extent permitted by law, Decision Forest and its team members shall not be liable for:</p>
            <ul>
                <li>Indirect, incidental, or consequential damages</li>
                <li>Loss of data, profits, or business opportunities</li>
                <li>Actions of other community members</li>
                <li>Third-party content or services</li>
            </ul>

            <h2>11. Termination</h2>
            <p>We reserve the right to:</p>
            <ul>
                <li>Suspend or terminate your access for violations of these Terms</li>
                <li>Remove content that violates our guidelines</li>
                <li>Modify or discontinue services at any time</li>
            </ul>
            <p>You may leave our community at any time by unsubscribing from our platforms.</p>

            <h2>12. Indemnification</h2>
            <p>You agree to indemnify and hold harmless Decision Forest, its team members, and partners from any claims, damages, or expenses arising from your violation of these Terms or your use of our services.</p>

            <h2>13. Governing Law</h2>
            <p>These Terms shall be governed by and construed in accordance with the laws of India. Any disputes shall be subject to the exclusive jurisdiction of courts in India.</p>

            <h2>14. Changes to Terms</h2>
            <p>We may update these Terms from time to time. We will notify members of material changes through our community channels or website. Continued use of our services after changes constitutes acceptance of the updated Terms.</p>

            <h2>15. Severability</h2>
            <p>If any provision of these Terms is found to be unenforceable, the remaining provisions will continue in full force and effect.</p>

            <h2>16. Contact Information</h2>
            <p>For questions about these Terms, please contact us:</p>
            <ul>
                <li>Email: contact@decisionforest.in</li>
                <li>Website: www.decisionforest.in/contact</li>
            </ul>

            <div style="margin-top: 40px; padding: 24px; background: var(--bg-card); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
                <p style="margin: 0;"><strong>By using Decision Forest's services, you acknowledge that you have read, understood, and agree to these Terms of Service.</strong> We're building this community together, and these guidelines help ensure a positive experience for everyone.</p>
            </div>
        </div>
    </div>
</section>
@endsection
