@extends('layouts.app')

@section('title', 'Decision Forest - Where Code Meets Community | India\'s Premier Tech Community')
@section('meta_description', 'Decision Forest is India\'s fastest-growing coding community. Join 1500+ students building their future through hackathons, workshops, and placement support. Code. Connect. Conquer.')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <span>Official Community Partner - SkillClimax v1.0</span>
            </div>
            <h1>Where <span class="gradient-text">Code</span> Meets <span class="gradient-text">Community</span></h1>
            <p class="hero-description">
                Join India's fastest-growing tech community. We're not just teaching code - we're building the ecosystem that transforms students into industry-ready developers through real-world experience.
            </p>
            <div class="hero-buttons">
                <a href="{{ route('community') }}" class="btn btn-primary">
                    Join 1500+ Developers
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="{{ route('events') }}" class="btn btn-secondary">
                    Explore Events
                </a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-glow"></div>
            <svg class="hero-image" viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Abstract code/community visualization -->
                <rect x="50" y="50" width="400" height="300" rx="20" fill="#111827" stroke="#1F2937" stroke-width="2"/>
                <!-- Connection nodes -->
                <circle cx="150" cy="150" r="30" fill="url(#node1)" opacity="0.8"/>
                <circle cx="350" cy="150" r="30" fill="url(#node2)" opacity="0.8"/>
                <circle cx="250" cy="250" r="40" fill="url(#node3)" opacity="0.9"/>
                <circle cx="120" cy="280" r="20" fill="url(#node1)" opacity="0.6"/>
                <circle cx="380" cy="280" r="20" fill="url(#node2)" opacity="0.6"/>
                <!-- Connection lines -->
                <line x1="150" y1="150" x2="250" y2="250" stroke="#00D9A5" stroke-width="2" opacity="0.5"/>
                <line x1="350" y1="150" x2="250" y2="250" stroke="#00D9A5" stroke-width="2" opacity="0.5"/>
                <line x1="150" y1="150" x2="350" y2="150" stroke="#6B4FBB" stroke-width="2" opacity="0.3"/>
                <line x1="120" y1="280" x2="250" y2="250" stroke="#00D9A5" stroke-width="2" opacity="0.4"/>
                <line x1="380" y1="280" x2="250" y2="250" stroke="#00D9A5" stroke-width="2" opacity="0.4"/>
                <!-- Code brackets -->
                <text x="220" y="260" fill="white" font-family="monospace" font-size="24" font-weight="bold">&lt;/&gt;</text>
                <defs>
                    <linearGradient id="node1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#0D4F3C"/>
                        <stop offset="100%" stop-color="#00D9A5"/>
                    </linearGradient>
                    <linearGradient id="node2" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#6B4FBB"/>
                        <stop offset="100%" stop-color="#00D9A5"/>
                    </linearGradient>
                    <linearGradient id="node3" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#0D4F3C"/>
                        <stop offset="100%" stop-color="#6B4FBB"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">1500+</div>
                <div class="stat-label">Community Members</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">1000+</div>
                <div class="stat-label">LinkedIn Followers</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Events Organized</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">1</div>
                <div class="stat-label">Year of Impact</div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Why <span class="gradient-text">Decision Forest</span>?</h2>
            <p class="subtitle">We're building more than a community - we're creating a launchpad for your tech career</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">&#128187;</div>
                <h3>Hackathon Culture</h3>
                <p>Participate in national-level hackathons, build real projects, and showcase your skills to top companies. Learn by doing, not just watching.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#127891;</div>
                <h3>Placement Support</h3>
                <p>Get industry-ready with our placement preparation resources, mock interviews, resume reviews, and direct connections to hiring companies.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#129309;</div>
                <h3>Peer Learning</h3>
                <p>Connect with 1500+ like-minded developers. Share knowledge, collaborate on projects, and grow together in a supportive environment.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#128640;</div>
                <h3>Skill Workshops</h3>
                <p>Hands-on workshops on trending technologies - from Web3 to AI/ML, Cloud to DevOps. Stay ahead of the curve with practical skills.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#127942;</div>
                <h3>Recognition System</h3>
                <p>Earn badges, certificates, and recognition for your contributions. Build a portfolio that stands out to recruiters.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#128101;</div>
                <h3>Industry Network</h3>
                <p>Access our growing network of tech professionals, mentors, and partner companies. Your next opportunity could be one connection away.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section section-dark">
    <div class="container">
        <div class="about-preview">
            <div class="about-image">
                <svg viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="460" height="360" rx="20" fill="#0A0F1C" stroke="#1F2937" stroke-width="2"/>
                    <!-- Tree visualization representing growth -->
                    <path d="M250 350 L250 200" stroke="#0D4F3C" stroke-width="8" stroke-linecap="round"/>
                    <circle cx="250" cy="150" r="80" fill="url(#tree-gradient)" opacity="0.8"/>
                    <circle cx="180" cy="180" r="40" fill="url(#tree-gradient)" opacity="0.6"/>
                    <circle cx="320" cy="180" r="40" fill="url(#tree-gradient)" opacity="0.6"/>
                    <circle cx="150" cy="130" r="25" fill="url(#tree-gradient)" opacity="0.4"/>
                    <circle cx="350" cy="130" r="25" fill="url(#tree-gradient)" opacity="0.4"/>
                    <circle cx="250" cy="80" r="30" fill="url(#tree-gradient)" opacity="0.5"/>
                    <!-- Decorative elements -->
                    <circle cx="100" cy="300" r="5" fill="#00D9A5" opacity="0.5"/>
                    <circle cx="400" cy="100" r="5" fill="#6B4FBB" opacity="0.5"/>
                    <circle cx="420" cy="320" r="5" fill="#00D9A5" opacity="0.5"/>
                    <defs>
                        <linearGradient id="tree-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0D4F3C"/>
                            <stop offset="100%" stop-color="#00D9A5"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="about-content">
                <h2>Building the <span class="gradient-text">Future of Tech</span> in India</h2>
                <p>Decision Forest started with a simple belief: every student deserves access to the resources, connections, and opportunities that can transform their career. In just one year, we've grown from an idea to a thriving community of 1500+ passionate developers.</p>
                <ul class="about-list">
                    <li>Community-driven learning ecosystem</li>
                    <li>Real hackathon experience with industry exposure</li>
                    <li>Placement preparation and career guidance</li>
                    <li>Direct pathway from student to professional</li>
                </ul>
                <a href="{{ route('about') }}" class="btn btn-primary">Learn Our Story</a>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Upcoming <span class="gradient-text">Events</span></h2>
            <p class="subtitle">Join our hackathons, workshops, and community events</p>
        </div>
        <div class="events-grid">
            <div class="event-card">
                <div class="event-image">
                    <span class="event-badge">Partner Event</span>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none">
                        <circle cx="50" cy="50" r="40" stroke="white" stroke-width="2" fill="none"/>
                        <path d="M35 50 L45 60 L65 40" stroke="white" stroke-width="3" fill="none"/>
                    </svg>
                </div>
                <div class="event-content">
                    <div class="event-date">Community Partnership</div>
                    <h3>SkillClimax v1.0</h3>
                    <p>Decision Forest is the official community partner for SkillClimax v1.0. Join us in decoding innovation and building the future together.</p>
                    <a href="{{ route('events') }}" class="btn btn-outline">Learn More</a>
                </div>
            </div>
            <div class="event-card">
                <div class="event-image" style="background: linear-gradient(135deg, #6B4FBB 0%, #00D9A5 100%);">
                    <span class="event-badge">Coming Soon</span>
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none">
                        <rect x="25" y="25" width="50" height="50" rx="5" stroke="white" stroke-width="2" fill="none"/>
                        <path d="M40 50 H60 M50 40 V60" stroke="white" stroke-width="3"/>
                    </svg>
                </div>
                <div class="event-content">
                    <div class="event-date">Stay Tuned</div>
                    <h3>DecFor Hackathon 2025</h3>
                    <p>Our flagship hackathon is in the works. Get ready to build, innovate, and compete with the best developers across India.</p>
                    <a href="{{ route('community') }}" class="btn btn-outline">Join Waitlist</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section section-dark">
    <div class="container">
        <div class="section-title">
            <h2>What Our <span class="gradient-text">Community</span> Says</h2>
            <p class="subtitle">Hear from the developers who are part of Decision Forest</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Decision Forest helped me land my first internship. The mock interviews and resume review sessions were incredibly valuable."</p>
                </div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">A</div>
                    <div class="testimonial-info">
                        <h4>Aditya K.</h4>
                        <span>B.Tech CSE, 3rd Year</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"The hackathon culture here is unmatched. I've participated in 5 hackathons through DecFor and won 2 of them!"</p>
                </div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">P</div>
                    <div class="testimonial-info">
                        <h4>Priya S.</h4>
                        <span>B.Tech IT, Final Year</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Being part of this community has accelerated my learning 10x. The peer support and mentorship is exactly what students need."</p>
                </div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">R</div>
                    <div class="testimonial-info">
                        <h4>Rahul M.</h4>
                        <span>B.Tech CSE, 2nd Year</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Our <span class="gradient-text">Partners</span></h2>
            <p class="subtitle">Collaborating with organizations that share our vision</p>
        </div>
        <div class="partners-grid">
            <div class="partner-logo">
                <svg width="150" height="50" viewBox="0 0 150 50" fill="none">
                    <rect width="150" height="50" rx="8" fill="#1F2937"/>
                    <text x="75" y="30" text-anchor="middle" fill="#9CA3AF" font-family="Inter" font-weight="600" font-size="14">SkillClimax</text>
                </svg>
            </div>
            <div class="partner-logo">
                <svg width="150" height="50" viewBox="0 0 150 50" fill="none">
                    <rect width="150" height="50" rx="8" fill="#1F2937"/>
                    <text x="75" y="30" text-anchor="middle" fill="#9CA3AF" font-family="Inter" font-weight="600" font-size="14">Partner 2</text>
                </svg>
            </div>
            <div class="partner-logo">
                <svg width="150" height="50" viewBox="0 0 150 50" fill="none">
                    <rect width="150" height="50" rx="8" fill="#1F2937"/>
                    <text x="75" y="30" text-anchor="middle" fill="#9CA3AF" font-family="Inter" font-weight="600" font-size="14">Partner 3</text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <h2>Ready to Level Up Your Tech Journey?</h2>
        <p>Join 1500+ developers who are building their future with Decision Forest</p>
        <a href="{{ route('community') }}" class="btn">
            Join the Community
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</section>
@endsection
