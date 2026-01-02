# Decision Forest - Project Documentation

## Project Overview

**Decision Forest** is a professional website for India's fastest-growing coding community focused on empowering CSE students through hackathons, workshops, and placement support.

- **Live Domain:** https://www.decisionforest.in
- **Tech Stack:** Laravel 12, PHP 8.5, SQLite, Blade Templates, Custom CSS
- **Community Stats:** 1500+ WhatsApp members, 1000+ LinkedIn followers

---

## Quick Start

```bash
# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Start development server
php artisan serve
```

Open: http://127.0.0.1:8000

---

## Project Structure

```
decisionforest/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php    # Main controller for all pages
├── public/
│   ├── css/
│   │   └── app.css                   # Complete CSS framework (2000+ lines)
│   └── images/
│       ├── favicon.svg               # Site favicon
│       ├── logo.svg                  # Brand logo
│       └── og-image.svg              # Social sharing image
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php         # Main layout template
│       └── pages/
│           ├── home.blade.php        # Homepage
│           ├── about.blade.php       # About Us
│           ├── events.blade.php      # Events & Hackathons
│           ├── community.blade.php   # Join Community
│           ├── contact.blade.php     # Contact Us
│           ├── privacy.blade.php     # Privacy Policy
│           └── terms.blade.php       # Terms of Service
├── routes/
│   └── web.php                       # All routes + sitemap + robots.txt
└── .env                              # Environment configuration
```

---

## Pages & Routes

| Route | Page | Description |
|-------|------|-------------|
| `/` | Home | Hero, stats, features, events, testimonials, CTA |
| `/about` | About Us | Mission, vision, story, values, team philosophy |
| `/events` | Events | SkillClimax partnership, upcoming hackathons |
| `/community` | Community | Join options, benefits, guidelines, FAQ |
| `/contact` | Contact | Contact form, partnership opportunities |
| `/privacy` | Privacy Policy | GDPR-compliant privacy policy |
| `/terms` | Terms of Service | Legal terms and conditions |
| `/sitemap.xml` | Sitemap | SEO sitemap |
| `/robots.txt` | Robots | SEO robots file |

---

## Design System

### Color Palette

```css
/* Primary Colors */
--forest-dark: #0A1F1C;      /* Deep forest */
--forest-primary: #0D4F3C;   /* Forest green - Trust, Growth */
--teal-primary: #00D9A5;     /* Electric teal - Innovation */
--purple-primary: #6B4FBB;   /* Purple - Wisdom, Creativity */
--orange-primary: #FF6B35;   /* Orange - Energy, Action */

/* Background */
--bg-dark: #0A0F1C;          /* Main background */
--bg-card: #111827;          /* Card background */

/* Text */
--text-primary: #FFFFFF;
--text-secondary: #9CA3AF;
```

### Typography

- **Font Family:** Inter (Google Fonts)
- **Weights:** 300, 400, 500, 600, 700, 800

### Components

- Gradient buttons with hover effects
- Feature cards with top-border animation
- Stats counters with gradient numbers
- Testimonial cards
- Event cards with badges
- Responsive navigation with mobile menu
- Footer with social links

---

## Key Features

### SEO Optimization
- Meta tags (title, description, keywords)
- Open Graph tags for social sharing
- Twitter Card support
- Schema.org JSON-LD structured data
- Dynamic sitemap.xml
- robots.txt configuration
- Canonical URLs

### Responsive Design
- Mobile-first approach
- Breakpoints: 480px, 768px, 1024px
- Collapsible mobile navigation
- Flexible grid layouts

### Contact Form
- CSRF protection
- Server-side validation
- Success message feedback
- Logged to Laravel logs (can be extended to email/database)

---

## Environment Variables

```env
APP_NAME="Decision Forest"
APP_ENV=local
APP_URL=https://www.decisionforest.in

# For production
APP_ENV=production
APP_DEBUG=false
```

---

## Deployment Notes

### For Production:

1. Update `.env`:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://www.decisionforest.in
   ```

2. Optimize for production:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   composer install --optimize-autoloader --no-dev
   ```

3. Set up proper web server (Nginx/Apache) pointing to `/public`

4. Configure SSL certificate for HTTPS

---

## Brand Guidelines

### Taglines
- "Where Code Meets Community"
- "Empowering Future Tech Leaders"
- "Code. Connect. Conquer."

### Voice & Tone
- Professional yet approachable
- Student-focused
- Action-oriented
- Community-driven

### Logo
- Hexagonal shape representing decision trees
- Gradient from forest green to teal
- White inner hexagon symbolizing clarity

---

## Community Highlights

- **Partnership:** Official Community Partner - SkillClimax v1.0
- **Members:** 1500+ active developers
- **LinkedIn:** 1000+ followers
- **Focus Areas:** Hackathons, Placements, Skill Development, Networking

---

## File Descriptions

### Controllers
- `PageController.php` - Handles all page rendering and contact form submission

### CSS
- `app.css` - Complete design system including:
  - CSS variables for theming
  - Reset styles
  - Typography
  - Layout utilities
  - Component styles
  - Responsive breakpoints
  - Animations and transitions

### Blade Templates
- `layouts/app.blade.php` - Master layout with nav, footer, SEO, scripts
- `pages/*.blade.php` - Individual page content

---

## Contributing

1. Fork the repository
2. Create feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

---

## Support

- **Email:** contact@decisionforest.in
- **LinkedIn:** [Decision Forest](https://www.linkedin.com/company/decisionforest)
- **Website:** https://www.decisionforest.in

---

## License

This project is proprietary to Decision Forest.

---

*Built with Laravel by Decision Forest Team*
