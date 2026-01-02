@extends('layouts.app')

@section('title', 'About Us - Decision Forest | Our Mission & Vision')
@section('meta_description', 'Learn about Decision Forest\'s mission to empower CSE students through community-driven learning, hackathons, and career development. Building India\'s strongest tech community.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>About <span class="gradient-text">Decision Forest</span></h1>
        <p>Our journey from an idea to India's fastest-growing coding community</p>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section">
    <div class="container">
        <div class="mission-vision">
            <div class="mission-card">
                <h3>Our Mission</h3>
                <p>To democratize access to quality tech education, real-world experience, and career opportunities for every CSE student in India. We believe that with the right community, mentorship, and resources, every student can become an exceptional developer.</p>
                <br>
                <p><strong>We exist to bridge the gap</strong> between academic learning and industry requirements, ensuring no talented student is left behind due to lack of guidance or opportunities.</p>
            </div>
            <div class="vision-card">
                <h3>Our Vision</h3>
                <p>To become India's most impactful tech community - a movement that transforms how students learn, collaborate, and launch their careers. We envision a future where every Decision Forest member is industry-ready from day one.</p>
                <br>
                <p><strong>By 2027</strong>, we aim to have 10,000+ active members, partnerships with 100+ companies, and a track record of helping thousands of students land their dream roles.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="section section-dark">
    <div class="container">
        <div class="about-preview">
            <div class="about-content">
                <h2>The <span class="gradient-text">Decision Forest</span> Story</h2>
                <p>It started with a simple observation: talented students were struggling not because they lacked potential, but because they lacked access - access to the right resources, the right connections, and the right opportunities.</p>
                <p>In 2024, we set out to change that. We started a WhatsApp community with just a handful of like-minded students who shared a passion for coding and a desire to grow together. Word spread. More students joined. The community grew.</p>
                <p>Today, Decision Forest is home to <strong>1500+ passionate developers</strong>, with over <strong>1000 LinkedIn followers</strong> watching our journey. We've organized workshops, participated in hackathons, and recently became the <strong>official community partner for SkillClimax v1.0</strong>.</p>
                <p>But this is just the beginning. We're building something bigger - a movement that will redefine how tech communities operate in India.</p>
            </div>
            <div class="about-image">
                <svg viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="460" height="360" rx="20" fill="#111827" stroke="#1F2937" stroke-width="2"/>
                    <!-- Timeline visualization -->
                    <line x1="100" y1="200" x2="400" y2="200" stroke="#1F2937" stroke-width="4"/>
                    <!-- 2024 Start -->
                    <circle cx="120" cy="200" r="15" fill="url(#timeline-grad)"/>
                    <text x="120" y="240" text-anchor="middle" fill="#9CA3AF" font-size="12">2024</text>
                    <text x="120" y="170" text-anchor="middle" fill="#fff" font-size="10">Started</text>
                    <!-- Growth -->
                    <circle cx="220" cy="200" r="15" fill="url(#timeline-grad)"/>
                    <text x="220" y="240" text-anchor="middle" fill="#9CA3AF" font-size="12">Growth</text>
                    <text x="220" y="170" text-anchor="middle" fill="#fff" font-size="10">1500+</text>
                    <!-- Partnership -->
                    <circle cx="320" cy="200" r="15" fill="url(#timeline-grad)"/>
                    <text x="320" y="240" text-anchor="middle" fill="#9CA3AF" font-size="12">Partner</text>
                    <text x="320" y="170" text-anchor="middle" fill="#fff" font-size="10">SkillClimax</text>
                    <!-- Future -->
                    <circle cx="400" cy="200" r="20" fill="url(#timeline-grad)" opacity="0.6"/>
                    <text x="400" y="245" text-anchor="middle" fill="#9CA3AF" font-size="12">Future</text>
                    <text x="400" y="170" text-anchor="middle" fill="#fff" font-size="10">10,000+</text>
                    <defs>
                        <linearGradient id="timeline-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0D4F3C"/>
                            <stop offset="100%" stop-color="#00D9A5"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Our <span class="gradient-text">Core Values</span></h2>
            <p class="subtitle">The principles that guide everything we do</p>
        </div>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">&#127793;</div>
                <h3>Growth Mindset</h3>
                <p>We believe in continuous learning and embrace challenges as opportunities to grow stronger.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">&#129309;</div>
                <h3>Community First</h3>
                <p>Individual success is celebrated, but collective growth is our true north. We rise by lifting others.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">&#128170;</div>
                <h3>Action Over Words</h3>
                <p>We don't just talk about building things - we build them. Hackathons, projects, careers.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">&#127775;</div>
                <h3>Excellence</h3>
                <p>We set high standards for ourselves and our community. Good enough is never enough.</p>
            </div>
        </div>
    </div>
</section>

<!-- What We Do -->
<section class="section section-dark">
    <div class="container">
        <div class="section-title">
            <h2>What We <span class="gradient-text">Do</span></h2>
            <p class="subtitle">Our pillars of community building</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">&#128187;</div>
                <h3>Hackathons & Events</h3>
                <p>We organize and participate in hackathons that give students real-world problem-solving experience. From ideation to deployment, we build together.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#127891;</div>
                <h3>Career Development</h3>
                <p>Resume building, mock interviews, placement preparation, and direct connections to hiring companies. We prepare you for the industry.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#128218;</div>
                <h3>Skill Workshops</h3>
                <p>Regular workshops on trending technologies - DSA, Web Development, AI/ML, Cloud Computing, and more. Learn from peers and experts.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#129337;</div>
                <h3>Mentorship</h3>
                <p>Connect with experienced developers and industry professionals who guide you through challenges and help you make the right decisions.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#127760;</div>
                <h3>Networking</h3>
                <p>Access to a network of 1500+ developers, tech enthusiasts, and professionals. Your next co-founder or teammate could be here.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">&#128640;</div>
                <h3>Project Collaboration</h3>
                <p>Find teammates for your projects, get feedback on your code, and build portfolio-worthy projects that stand out to recruiters.</p>
            </div>
        </div>
    </div>
</section>

<!-- The Name -->
<section class="section">
    <div class="container">
        <div class="about-preview" style="grid-template-columns: 1fr 1fr;">
            <div class="about-image">
                <svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="400" height="400" rx="20" fill="#111827"/>
                    <!-- Decision tree visualization -->
                    <circle cx="200" cy="80" r="25" fill="url(#dt-grad)"/>
                    <line x1="200" y1="105" x2="120" y2="160" stroke="#00D9A5" stroke-width="3"/>
                    <line x1="200" y1="105" x2="280" y2="160" stroke="#00D9A5" stroke-width="3"/>
                    <circle cx="120" cy="175" r="20" fill="url(#dt-grad)" opacity="0.8"/>
                    <circle cx="280" cy="175" r="20" fill="url(#dt-grad)" opacity="0.8"/>
                    <line x1="120" y1="195" x2="80" y2="250" stroke="#00D9A5" stroke-width="2"/>
                    <line x1="120" y1="195" x2="160" y2="250" stroke="#00D9A5" stroke-width="2"/>
                    <line x1="280" y1="195" x2="240" y2="250" stroke="#00D9A5" stroke-width="2"/>
                    <line x1="280" y1="195" x2="320" y2="250" stroke="#00D9A5" stroke-width="2"/>
                    <circle cx="80" cy="265" r="15" fill="url(#dt-grad)" opacity="0.6"/>
                    <circle cx="160" cy="265" r="15" fill="url(#dt-grad)" opacity="0.6"/>
                    <circle cx="240" cy="265" r="15" fill="url(#dt-grad)" opacity="0.6"/>
                    <circle cx="320" cy="265" r="15" fill="url(#dt-grad)" opacity="0.6"/>
                    <!-- Stars representing outcomes -->
                    <text x="80" y="320" text-anchor="middle" fill="#FFD700" font-size="20">&#9733;</text>
                    <text x="160" y="320" text-anchor="middle" fill="#FFD700" font-size="20">&#9733;</text>
                    <text x="240" y="320" text-anchor="middle" fill="#FFD700" font-size="20">&#9733;</text>
                    <text x="320" y="320" text-anchor="middle" fill="#FFD700" font-size="20">&#9733;</text>
                    <defs>
                        <linearGradient id="dt-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#0D4F3C"/>
                            <stop offset="100%" stop-color="#00D9A5"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="about-content">
                <h2>Why "<span class="gradient-text">Decision Forest</span>"?</h2>
                <p>In computer science, a <strong>Decision Tree</strong> is an algorithm that makes choices at each node to reach the best outcome. A <strong>Random Forest</strong> is a collection of decision trees working together - more powerful than any single tree.</p>
                <p>That's exactly what we are. Each member is a decision tree - making choices, learning, growing. Together, we form a <strong>Decision Forest</strong> - a collective intelligence that's stronger, smarter, and more capable than any individual.</p>
                <p>Every decision you make in your coding journey matters. We're here to ensure those decisions lead you to success.</p>
                <ul class="about-list">
                    <li>Each member contributes unique perspectives</li>
                    <li>Collective wisdom guides better decisions</li>
                    <li>Together, we're more powerful than alone</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section cta-section">
    <div class="container">
        <h2>Be Part of Our Journey</h2>
        <p>Join 1500+ developers who are building the future of tech together</p>
        <a href="{{ route('community') }}" class="btn">
            Join Decision Forest
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</section>
@endsection
