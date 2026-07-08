# Shortenn — #1 Free Bulk URL Shortener 🚀

![Shortenn Banner](https://shortenn.org/logo.png)

Welcome to **Shortenn**, the premier, lightning-fast bulk URL shortening platform built for marketers, developers, and everyday users. Built on a robust Laravel 12 architecture, Shortenn allows you to instantly convert hundreds of long, clunky URLs into concise, trackable, and safe short links in a matter of seconds.

## ✨ Key Features

*   **⚡ Lightning Fast Bulk Processing:** Paste multiple URLs and shorten them all simultaneously.
*   **🛡️ E-E-A-T & SEO Optimized:** Implements advanced `WebApplication` and `Organization` JSON-LD schema, adhering to the latest 2026 Google Search ranking algorithms.
*   **🔗 Custom Aliases:** Create branded and memorable links tailored to your campaigns.
*   **⏱️ Expiration & Click Limits:** Set precise expiration dates or maximum click thresholds for temporary promotions.
*   **📱 QR Code Generation:** Automatically generate downloadable QR codes for every shortened link.
*   **📊 Comprehensive Analytics:** Track geographic data, referral sources, and device types (Requires Free Account).
*   **🔒 Built-In Security:** Safe Browsing integration with HTTPS encryption and malware validation.

## 🛠️ Technology Stack

*   **Backend:** [Laravel 12](https://laravel.com/) (PHP 8.2+)
*   **Frontend UI:** Modern Glassmorphism, Bootstrap 5.3, Vanilla CSS
*   **Database:** MySQL / MariaDB
*   **Authentication:** Laravel Sanctum / Breeze
*   **Server:** Nginx / Apache on Hostinger

## 🚀 Getting Started (Local Development)

Follow these instructions to get a copy of the project up and running on your local machine.

### Prerequisites
*   PHP >= 8.2
*   Composer
*   MySQL or equivalent
*   Node.js & NPM

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/kamaralamkhan/shortenn.org.git
   cd shortenn.org/shortenn_laravel
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install NPM dependencies:**
   ```bash
   npm install
   npm run build
   ```

4. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Configure your database credentials in the `.env` file.*

5. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

6. **Start the local server:**
   ```bash
   php artisan serve
   ```
   Visit `http://localhost:8000` in your browser.

## 📈 Monetization & AdSense Readiness

Shortenn is strictly built with compliance in mind. It fully satisfies Google AdSense program policies, including:
*   Pre-configured Cookie Consent and GDPR banners.
*   Clean, accessible UI with optimized ad placements.
*   Comprehensive Privacy Policy and Terms of Service.
*   Valid `ads.txt` placement and `robots.txt` optimized for `Mediapartners-Google` and major AI Crawlers (GPTBot, ClaudeBot, etc.).

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## ✉️ Contact

Kamar Alam Khan - [@Kamaralamkhan_](https://x.com/Kamaralamkhan_) - support@shortenn.org

Project Link: [https://shortenn.org](https://shortenn.org)
