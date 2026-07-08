# SHORTENN.ORG - PROJECT STRUCTURE DOCUMENTATION

**Project:** Shortenn - Bulk URL Shortener  
**Framework:** Laravel 12.40.2  
**PHP Version:** 8.4.11  
**Database:** MySQL  
**Frontend:** Bootstrap 5.3.3 + Blade Templates  
**Created:** November 28, 2025  
**Domain:** https://shortenn.org

---

## 📁 PROJECT DIRECTORY STRUCTURE

```
shortenn_laravel/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php          # Homepage & bulk URL shortening
│   │   │   ├── AuthController.php          # Login, Register, Logout
│   │   │   ├── DashboardController.php     # User dashboard, link management
│   │   │   ├── RedirectController.php      # Short URL redirect handler
│   │   │   └── PublicController.php        # Public pages (about, features, etc.)
│   │   │
│   │   └── Middleware/
│   │       └── (Laravel default middleware)
│   │
│   ├── Models/
│   │   ├── User.php                        # User model (admin/user/guest roles)
│   │   ├── Link.php                        # Link model (shortened URLs)
│   │   └── ClickLog.php                    # Click tracking model
│   │
│   └── Providers/
│       └── (Laravel default providers)
│
├── bootstrap/
│   ├── app.php                             # Application bootstrap
│   └── cache/                              # Bootstrap cache (755 permissions)
│
├── config/
│   ├── app.php                             # Application configuration
│   ├── database.php                        # Database configuration
│   └── (other config files)
│
├── database/
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   ├── 0001_01_01_000002_create_jobs_table.php
│   │   ├── 2024_01_01_000003_create_links_table.php
│   │   └── 2024_01_01_000004_create_click_logs_table.php
│   │
│   ├── seeders/
│   │   └── DatabaseSeeder.php              # Seeds admin & guest users
│   │
│   └── database_export.sql                 # Complete database export
│
├── public/
│   ├── index.php                           # Application entry point
│   ├── favicon.ico                         # Website favicon
│   ├── logo.png                            # Company logo (64x64)
│   ├── ads.txt                             # Google AdSense verification
│   ├── robots.txt                          # SEO robots file
│   ├── sitemap.xml                         # SEO sitemap
│   │
│   └── css/
│       └── style.css                       # Custom styles (blue theme)
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php               # Main layout template
│       │
│       ├── auth/
│       │   ├── login.blade.php             # Login page
│       │   └── register.blade.php          # Register page
│       │
│       ├── pages/
│       │   ├── about.blade.php             # About us page
│       │   ├── features.blade.php          # Features page
│       │   ├── faq.blade.php               # FAQ page
│       │   ├── how-it-works.blade.php      # How it works page
│       │   ├── use-cases.blade.php         # Use cases page
│       │   ├── resources.blade.php         # Resources page
│       │   ├── contact.blade.php           # Contact page
│       │   ├── privacy.blade.php           # Privacy policy
│       │   └── terms.blade.php             # Terms of service
│       │
│       ├── errors/
│       │   ├── link-expired.blade.php      # Link expired error
│       │   ├── link-limit-reached.blade.php # Click limit reached
│       │   └── link-disabled.blade.php     # Link disabled error
│       │
│       ├── home.blade.php                  # Homepage (bulk shortener)
│       └── dashboard.blade.php             # User dashboard
│
├── routes/
│   └── web.php                             # All application routes
│
├── storage/
│   ├── app/                                # Application storage
│   ├── framework/                          # Framework cache/sessions
│   └── logs/                               # Application logs (755 permissions)
│
├── vendor/                                 # Composer dependencies
│
├── .env                                    # Environment configuration
├── .env.example                            # Environment template
├── composer.json                           # PHP dependencies
├── composer.lock                           # Dependency lock file
├── artisan                                 # Laravel CLI
│
├── DEPLOYMENT_GUIDE.md                     # Hostinger deployment guide
├── HOSTINGER_QUICK_SETUP.txt               # Quick setup instructions
├── PROJECT_STRUCTURE.md                    # This file
└── shortenn_laravel_progress.md            # Development progress tracker
```

---

## 🗄️ DATABASE SCHEMA

### **Tables Overview**

#### 1. **users**
```sql
- id (bigint, primary key)
- username (varchar, unique)
- email (varchar, unique)
- password (varchar, hashed)
- role (enum: admin, user, guest)
- email_verified_at (timestamp, nullable)
- remember_token (varchar, nullable)
- created_at, updated_at (timestamps)
```

#### 2. **links**
```sql
- id (bigint, primary key)
- user_id (bigint, foreign key → users.id)
- code (varchar, unique) - Short URL code
- url (text) - Original long URL
- clicks (int, default: 0)
- expires_at (timestamp, nullable)
- max_clicks (int, nullable)
- is_active (boolean, default: 1)
- note (text, nullable)
- created_at, updated_at (timestamps)
```

#### 3. **click_logs**
```sql
- id (bigint, primary key)
- link_id (bigint, foreign key → links.id)
- clicked_at (timestamp)
- ip_address (varchar, 45)
- user_agent (text)
- referer (text, nullable)
```

#### 4. **Supporting Tables**
- cache, cache_locks
- jobs, job_batches, failed_jobs
- password_reset_tokens
- sessions
- migrations

---

## 🎨 FRONTEND STRUCTURE

### **Layout System**

**Main Layout:** `resources/views/layouts/app.blade.php`
- Bootstrap 5.3.3 (CDN)
- Bootstrap Icons 1.11.3 (CDN)
- Custom CSS: `public/css/style.css`
- Responsive navbar with mobile menu
- Complete footer with 4 columns
- AdSense integration

### **Page Categories**

#### **Public Pages** (No Authentication Required)
```
/ (home)                    → HomeController@index
/about                      → HomeController@about
/features                   → HomeController@features
/how-it-works              → HomeController@howItWorks
/use-cases                 → HomeController@useCases
/faq                       → HomeController@faq
/resources                 → HomeController@resources
/contact                   → HomeController@contact
/privacy                   → HomeController@privacy
/terms                     → HomeController@terms
```

#### **Authentication Pages**
```
/login                     → AuthController@showLogin
/register                  → AuthController@showRegister
/logout                    → AuthController@logout (POST)
```

#### **Protected Pages** (Authentication Required)
```
/dashboard                 → DashboardController@index
/links/{id}/toggle         → DashboardController@toggle (POST)
/links/{id}                → DashboardController@destroy (DELETE)
/export                    → DashboardController@export (GET)
```

#### **Redirect Handler**
```
/{code}                    → RedirectController@redirect
```

### **Blade Components & Sections**

**Layout Sections:**
```blade
@yield('meta_title')         # Page title
@yield('meta_description')   # Meta description
@yield('canonical_url')      # Canonical URL
@yield('content')            # Main content
@stack('styles')             # Additional CSS
@stack('scripts')            # Additional JavaScript
```

**Blade Directives Used:**
```blade
@guest / @endguest          # Show for guests
@auth / @endauth            # Show for authenticated users
@csrf                       # CSRF token
@if / @endif                # Conditional
@foreach / @endforeach      # Loops
@extends('layout')          # Extend layout
@section / @endsection      # Define section
@yield                      # Output section
@push / @endpush            # Push to stack
```

---

## ⚙️ BACKEND STRUCTURE

### **Controllers**

#### **1. HomeController.php**
**Purpose:** Homepage and bulk URL shortening

**Methods:**
```php
index()                    # Display homepage
store(Request)             # Process bulk URL shortening
about()                    # About page
features()                 # Features page
howItWorks()              # How it works page
useCases()                # Use cases page
faq()                     # FAQ page
resources()               # Resources page
contact()                 # Contact page
privacy()                 # Privacy policy
terms()                   # Terms of service
generateUniqueCode()      # Generate 6-char unique code
```

**Features:**
- Bulk URL processing (multi-line input)
- Custom alias support (3-30 chars)
- Expiry date handling (YYYY-MM-DD)
- Max clicks limit
- Auto-prepend http:// if missing
- Guest user support
- Error collection & success messages

#### **2. AuthController.php**
**Purpose:** User authentication

**Methods:**
```php
showLogin()               # Display login form
login(Request)            # Process login
showRegister()            # Display register form
register(Request)         # Process registration
logout(Request)           # Process logout
```

**Features:**
- Email/password authentication
- Session management
- Role assignment (admin/user)
- Password hashing (bcrypt)
- Remember me token

#### **3. DashboardController.php**
**Purpose:** Link management dashboard

**Methods:**
```php
index()                   # Display user's links
toggle(Link)              # Enable/disable link
destroy(Link)             # Delete link
export()                  # Export links to CSV
```

**Features:**
- Admin sees all links
- Users see only their links
- Link toggle (active/inactive)
- Link deletion
- CSV export with headers
- Click count display

#### **4. RedirectController.php**
**Purpose:** Handle short URL redirects

**Methods:**
```php
redirect($code)           # Redirect to original URL
```

**Features:**
- Find link by code
- Check if active
- Check expiry date
- Check click limits
- Log click (IP, user agent, referer)
- Increment click counter
- Error pages for expired/disabled/limited links

---

## 🔌 ROUTES STRUCTURE

**File:** `routes/web.php`

### **Public Routes**
```php
GET  /                     → HomeController@index (name: home)
POST /shorten              → HomeController@store (name: shorten)
GET  /about                → HomeController@about (name: about)
GET  /features             → HomeController@features (name: features)
GET  /how-it-works         → HomeController@howItWorks (name: how-it-works)
GET  /use-cases            → HomeController@useCases (name: use-cases)
GET  /faq                  → HomeController@faq (name: faq)
GET  /resources            → HomeController@resources (name: resources)
GET  /contact              → HomeController@contact (name: contact)
GET  /privacy              → HomeController@privacy (name: privacy)
GET  /terms                → HomeController@terms (name: terms)
```

### **Authentication Routes**
```php
GET  /login                → AuthController@showLogin (name: login)
POST /login                → AuthController@login
GET  /register             → AuthController@showRegister (name: register)
POST /register             → AuthController@register
POST /logout               → AuthController@logout (name: logout)
```

### **Protected Routes** (middleware: auth)
```php
GET    /dashboard          → DashboardController@index (name: dashboard)
POST   /links/{link}/toggle → DashboardController@toggle (name: links.toggle)
DELETE /links/{link}       → DashboardController@destroy (name: links.destroy)
GET    /export             → DashboardController@export (name: export)
```

### **Redirect Route**
```php
GET  /{code}               → RedirectController@redirect
```

---

## 🎯 KEY FEATURES IMPLEMENTATION

### **1. Bulk URL Shortening**

**Input Format:**
```
URL | alias | expiry | max_clicks

Examples:
https://example.com
https://example.com | myalias
https://example.com | myalias | 2025-12-31
https://example.com | myalias | 2025-12-31 | 1000
```

**Processing:**
1. Split by newlines
2. Parse each line by pipe separator
3. Validate URL
4. Generate or validate alias
5. Parse expiry date
6. Parse max clicks
7. Create link record
8. Return success/error messages

### **2. Click Tracking**

**Logged Data:**
- IP Address
- User Agent (browser info)
- Referer (where they came from)
- Timestamp

**Storage:** `click_logs` table

### **3. Copy All URLs Feature**

**Functionality:**
- Copy All URLs: Plain list (one per line)
- Copy with Details: Formatted with expiry, clicks
- Individual Copy: Single URL copy
- Success animations & notifications

**Implementation:**
```javascript
copyAllLinks()            # Copy all URLs
copyAllWithDetails()      # Copy with formatting
copyToClipboard(text)     # Copy single URL
```

### **4. QR Code Generation**

**Service:** QR Server API (https://api.qrserver.com)
**Format:** 300x300 pixels
**Data:** Shortened URL

### **5. CSV Export**

**Columns:**
- Short URL
- Original URL
- Clicks
- Created At
- Expires At
- Max Clicks
- Status (Active/Inactive)

**Format:** CSV with headers
**Download:** Direct download via browser

---

## 🔐 AUTHENTICATION & ROLES

### **User Roles**

#### **Guest**
- Can shorten URLs without login
- All links assigned to "guest" user account
- No dashboard access
- Limited features

#### **User**
- Can register and login
- See only their own links
- Full dashboard access
- Can manage their links

#### **Admin**
- See all links from all users
- Full system access
- Can manage all links
- Default account: admin@shortenn.org / admin123

### **Middleware**

**auth:** Protects dashboard and management routes
**guest:** Redirects logged-in users from login/register

---

## 🎨 STYLING & ASSETS

### **CSS Framework**
- Bootstrap 5.3.3 (via CDN)
- Bootstrap Icons 1.11.3 (via CDN)
- Custom CSS: `public/css/style.css`

### **Color Scheme**
```css
Primary:   #0d6efd (Blue)
Hover:     #0b5ed7 (Dark Blue)
Success:   #198754 (Green)
Danger:    #dc3545 (Red)
Warning:   #ffc107 (Yellow)
Dark:      #212529 (Dark Gray)
```

### **Custom Styles**
- Card animations (fadeIn)
- Button hover effects
- Footer link hover
- Responsive adjustments
- Mobile-friendly tables

### **Icons**
All icons from Bootstrap Icons (bi-*)

---

## 📊 SEO & ANALYTICS

### **SEO Implementation**

**Meta Tags:**
- Title (dynamic per page)
- Description (dynamic per page)
- Keywords
- Author
- Robots (index, follow)
- Canonical URLs

**Open Graph:**
- og:title
- og:description
- og:url
- og:site_name
- og:type

**Twitter Cards:**
- twitter:card
- twitter:title
- twitter:description

**Schema.org:**
- JSON-LD markup
- SoftwareApplication type

### **Files:**
- `robots.txt` - Search engine directives
- `sitemap.xml` - All pages listed
- `ads.txt` - AdSense verification

---

## 💰 MONETIZATION

### **Google AdSense**

**Publisher ID:** `ca-pub-2154039585231057`

**Integration:**
```html
<!-- In <head> -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2154039585231057" crossorigin="anonymous"></script>

<!-- After <body> -->
<amp-auto-ads type="adsense" data-ad-client="ca-pub-2154039585231057"></amp-auto-ads>
```

**Files:**
- `/public/ads.txt` - Verification file
- Contains: `google.com, pub-2154039585231057, DIRECT, f08c47fec0942fa0`

---

## 🚀 DEPLOYMENT

### **Environment Configuration**

**Production .env:**
```env
APP_NAME=Shortenn
APP_ENV=production
APP_DEBUG=false
APP_URL=https://shortenn.org

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=u123456789_shortenn
DB_USERNAME=u123456789_shortenn_user
DB_PASSWORD=your_password

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### **File Permissions**
```
storage/           → 755 (recursive)
bootstrap/cache/   → 755
public/            → 755
```

### **Deployment Steps**
1. Upload all files to server
2. Create MySQL database
3. Import `database_export.sql`
4. Configure `.env` file
5. Generate APP_KEY
6. Point domain to `/public`
7. Set permissions
8. Test application

**Full Guide:** See `DEPLOYMENT_GUIDE.md`

---

## 🔧 MAINTENANCE

### **Regular Tasks**

**Clear Caches:**
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear
```

**Optimize:**
```bash
php artisan optimize
php artisan config:cache
php artisan route:cache
```

**Database Backup:**
```bash
php artisan schema:dump
# or export via phpMyAdmin
```

### **Logs Location**
```
storage/logs/laravel.log
```

### **Common Issues**

**Issue:** View not found
**Fix:** `php artisan view:clear`

**Issue:** Config cached
**Fix:** `php artisan config:clear`

**Issue:** 500 Error
**Fix:** Check storage permissions (755)

**Issue:** Database connection error
**Fix:** Verify .env credentials

---

## 📞 SUPPORT & RESOURCES

### **Documentation**
- Laravel: https://laravel.com/docs
- Bootstrap: https://getbootstrap.com/docs
- MySQL: https://dev.mysql.com/doc

### **Project Files**
- `DEPLOYMENT_GUIDE.md` - Deployment instructions
- `HOSTINGER_QUICK_SETUP.txt` - Quick setup
- `shortenn_laravel_progress.md` - Progress tracker
- `database_export.sql` - Database backup

### **Default Credentials**
```
Admin: admin@shortenn.org / admin123
Guest: guest@shortenn.org / guest123
```

**⚠️ Change passwords after first login!**

---

## 📝 VERSION HISTORY

**Version 1.0** (November 28, 2025)
- Initial release
- Bulk URL shortening
- Click tracking & analytics
- Dashboard management
- Guest user support
- SEO optimization
- AdSense integration
- Responsive design
- Complete documentation

---

## 📄 LICENSE

This project is proprietary software created for Shortenn.org.

---

**Last Updated:** November 28, 2025  
**Maintained By:** Shortenn.org Development Team  
**Contact:** support@shortenn.org

---

## 🎯 QUICK REFERENCE

### **Start Server**
```bash
php artisan serve
```

### **Run Migrations**
```bash
php artisan migrate
```

### **Seed Database**
```bash
php artisan db:seed
```

### **Clear All Caches**
```bash
php artisan optimize:clear
```

### **Test Routes**
```bash
php artisan route:list
```

---

**END OF DOCUMENTATION**
