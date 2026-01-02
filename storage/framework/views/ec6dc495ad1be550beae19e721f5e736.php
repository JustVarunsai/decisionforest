<?php $__env->startSection('title', 'Contact Us - Decision Forest | Get in Touch'); ?>
<?php $__env->startSection('meta_description', 'Contact Decision Forest for partnerships, collaborations, or any queries. We\'re here to help students, colleges, and companies connect with our tech community.'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Get in <span class="gradient-text">Touch</span></h1>
        <p>We'd love to hear from you. Let's build something amazing together.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Let's <span class="gradient-text">Connect</span></h2>
                <p style="font-size: 1.1rem; margin-bottom: 40px;">Whether you're a student looking to join, a company interested in partnering, or a college wanting to collaborate - we're here to help.</p>

                <div class="contact-item">
                    <div class="contact-icon">&#128231;</div>
                    <div>
                        <h4>Email Us</h4>
                        <p>contact@decisionforest.in</p>
                        <p style="font-size: 0.875rem; color: var(--text-muted);">We typically respond within 24 hours</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">&#128101;</div>
                    <div>
                        <h4>LinkedIn</h4>
                        <p><a href="https://www.linkedin.com/company/decisionforest" target="_blank">linkedin.com/company/decisionforest</a></p>
                        <p style="font-size: 0.875rem; color: var(--text-muted);">1000+ followers</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">&#127760;</div>
                    <div>
                        <h4>Community</h4>
                        <p>Join our WhatsApp community</p>
                        <p style="font-size: 0.875rem; color: var(--text-muted);">1500+ active members</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">&#128205;</div>
                    <div>
                        <h4>Location</h4>
                        <p>India</p>
                        <p style="font-size: 0.875rem; color: var(--text-muted);">Remote-first community</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3 style="margin-bottom: 24px;">Send us a Message</h3>
                <form action="<?php echo e(route('contact.submit')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required placeholder="Your full name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required placeholder="your.email@example.com">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a topic</option>
                            <option value="join">Join Community</option>
                            <option value="partnership">Partnership / Sponsorship</option>
                            <option value="collaboration">College Collaboration</option>
                            <option value="event">Event / Workshop Request</option>
                            <option value="media">Media / Press Inquiry</option>
                            <option value="feedback">Feedback / Suggestion</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required placeholder="Tell us how we can help you..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        Send Message
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 2L11 13M22 2L15 22L11 13M22 2L2 9L11 13"/>
                        </svg>
                    </button>
                </form>

                <?php if(session('success')): ?>
                    <div style="margin-top: 20px; padding: 16px; background: rgba(0, 217, 165, 0.1); border: 1px solid var(--teal-primary); border-radius: 12px; color: var(--teal-primary);">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Types -->
<section class="section section-dark">
    <div class="container">
        <div class="section-title">
            <h2>Ways to <span class="gradient-text">Partner</span></h2>
            <p class="subtitle">Explore collaboration opportunities with Decision Forest</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">&#127979;</div>
                <h3>College Partnerships</h3>
                <p>Partner with us to bring hackathons, workshops, and tech events to your campus. Give your students access to our 1500+ member community.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#127970;</div>
                <h3>Company Collaborations</h3>
                <p>Looking for talented developers? Partner with us for hiring events, sponsored hackathons, or brand visibility among future tech professionals.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#128188;</div>
                <h3>Event Sponsorship</h3>
                <p>Sponsor our hackathons and events. Get your brand in front of engaged, tech-savvy students who could be your future employees.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#129309;</div>
                <h3>Community Partners</h3>
                <p>Are you another tech community? Let's collaborate! Cross-promote events, share resources, and grow together.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#127908;</div>
                <h3>Speaker Opportunities</h3>
                <p>Industry professionals can share their expertise with our community through tech talks, workshops, or mentorship sessions.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#128240;</div>
                <h3>Media & Press</h3>
                <p>Journalists and content creators interested in covering our community initiatives, events, or student success stories.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Common <span class="gradient-text">Questions</span></h2>
        </div>
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="margin-bottom: 12px;">How quickly do you respond?</h4>
                <p style="margin: 0;">We aim to respond to all queries within 24-48 hours. For urgent matters, reaching out via LinkedIn often gets faster responses.</p>
            </div>
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="margin-bottom: 12px;">Can my college host a DecFor event?</h4>
                <p style="margin: 0;">Absolutely! We love conducting events at colleges. Reach out with details about your institution and the type of event you're interested in.</p>
            </div>
            <div class="feature-card" style="margin-bottom: 20px;">
                <h4 style="margin-bottom: 12px;">Do you offer sponsorship packages?</h4>
                <p style="margin: 0;">Yes! We have various partnership tiers for our events. Contact us to discuss options that align with your goals and budget.</p>
            </div>
            <div class="feature-card">
                <h4 style="margin-bottom: 12px;">Can I volunteer or contribute?</h4>
                <p style="margin: 0;">We're always looking for passionate individuals! Whether it's organizing events, creating content, or mentoring - we'd love to have you on board.</p>
            </div>
        </div>
    </div>
</section>

<!-- Social Connect -->
<section class="section section-dark">
    <div class="container" style="text-align: center;">
        <h2>Stay <span class="gradient-text">Connected</span></h2>
        <p style="margin-bottom: 40px; font-size: 1.1rem;">Follow us on social media for updates, tips, and community highlights</p>
        <div style="display: flex; gap: 24px; justify-content: center; flex-wrap: wrap;">
            <a href="https://www.linkedin.com/company/decisionforest" target="_blank" class="btn btn-secondary" style="min-width: 180px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
                LinkedIn
            </a>
            <a href="https://www.instagram.com/decisionforest" target="_blank" class="btn btn-secondary" style="min-width: 180px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                Instagram
            </a>
            <a href="https://twitter.com/decisionforest" target="_blank" class="btn btn-secondary" style="min-width: 180px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                Twitter
            </a>
            <a href="https://github.com/decisionforest" target="_blank" class="btn btn-secondary" style="min-width: 180px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
                GitHub
            </a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section cta-section">
    <div class="container">
        <h2>Let's Build Something Great Together</h2>
        <p>Whether you're joining, partnering, or just saying hi - we're excited to connect!</p>
        <a href="<?php echo e(route('community')); ?>" class="btn">
            Join the Community
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/varun/Desktop/decisionforest/resources/views/pages/contact.blade.php ENDPATH**/ ?>