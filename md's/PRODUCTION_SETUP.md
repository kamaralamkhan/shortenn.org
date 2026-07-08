# SHORTENN.ORG - PRODUCTION DEPLOYMENT GUIDE

**IMPORTANT:** Follow these steps EXACTLY after uploading to Hostinger!

---

## 📦 WHAT'S IN THE ZIP FILE

This ZIP contains your COMPLETE production-ready application:

✅ All Laravel files  
✅ Database export (database_export.sql)  
✅ Pre-configured .env file  
✅ Logo & Favicon  
✅ All documentation  
✅ SEO files (robots.txt, sitemap.xml, ads.txt)  

---

## 🚀 DEPLOYMENT STEPS (10 Minutes)

### **STEP 1: UPLOAD & EXTRACT**

1. **Login to Hostinger hPanel**
2. Go to **File Manager**
3. Navigate to `/public_html/`
4. **Upload** `shortenn_laravel.zip`
5. Right-click → **Extract**
6. Wait for extraction to complete
7. You should now have: `/public_html/shortenn_laravel/`

---

### **STEP 2: CREATE DATABASE**

1. In hPanel, go to **Databases** → **MySQL Databases**
2. Click **Create New Database**
3. **IMPORTANT:** Note down these credentials:
   ```
   Database Name: u123456789_shortenn (example)
   Username: u123456789_user (example)
   Password: [the password you set]
   Host: localhost
   ```

---

### **STEP 3: IMPORT DATABASE**

1. In hPanel, go to **phpMyAdmin**
2. Select your database from left sidebar
3. Click **Import** tab
4. Click **Choose File**
5. Select: `shortenn_laravel/database_export.sql`
6. Scroll down, click **Import** button
7. Wait for success message ✅

---

### **STEP 4: CONFIGURE .ENV FILE**

1. In **File Manager**, navigate to `/public_html/shortenn_laravel/`
2. Find `.env` file
3. Right-click → **Edit**
4. **UPDATE THESE LINES:**

```env
DB_DATABASE=YOUR_DATABASE_NAME_HERE
DB_USERNAME=YOUR_DATABASE_USERNAME_HERE
DB_PASSWORD=YOUR_DATABASE_PASSWORD_HERE
```

Replace with YOUR actual database credentials from Step 2.

5. **Save** the file

---

### **STEP 5: POINT DOMAIN TO PUBLIC FOLDER**

**Option A: Using Domain Settings (Recommended)**

1. In hPanel, go to **Domains**
2. Click on `shortenn.org`
3. Find **Document Root** or **Website Root**
4. Change to: `/public_html/shortenn_laravel/public`
5. **Save changes**

**Option B: If you can't change document root**

1. Move all files from `/public_html/shortenn_laravel/public/*` to `/public_html/`
2. Edit `/public_html/index.php`:

**Find these lines:**
```php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
```

**Replace with:**
```php
require __DIR__.'/shortenn_laravel/vendor/autoload.php';
$app = require_once __DIR__.'/shortenn_laravel/bootstrap/app.php';
```

---

### **STEP 6: SET FILE PERMISSIONS**

In **File Manager**:

1. Navigate to `/public_html/shortenn_laravel/storage/`
   - Right-click → **Permissions**
   - Set to: **755**
   - Check: ✅ **Apply to subdirectories**
   - Click **Change**

2. Navigate to `/public_html/shortenn_laravel/bootstrap/cache/`
   - Right-click → **Permissions**
   - Set to: **755**
   - Click **Change**

---

### **STEP 7: VERIFY FILES**

Check these files exist in `/public_html/shortenn_laravel/public/`:

✅ `favicon.ico`  
✅ `logo.png`  
✅ `ads.txt`  
✅ `robots.txt`  
✅ `sitemap.xml`  
✅ `css/style.css`  

---

### **STEP 8: TEST YOUR WEBSITE**

Visit: **https://shortenn.org**

**Test these pages:**
- ✅ Homepage loads correctly
- ✅ Click "Features" - page loads
- ✅ Click "FAQ" - page loads
- ✅ Try shortening a URL
- ✅ Click Login - login page loads
- ✅ Check footer links work

---

## ✅ DEFAULT LOGIN CREDENTIALS

**Admin Account:**
```
Email: admin@shortenn.org
Password: admin123
```

**⚠️ IMPORTANT: Change this password immediately after first login!**

**Guest Account:**
```
Email: guest@shortenn.org
Password: guest123
```
(Used for non-logged-in users who shorten URLs)

---

## 🔧 TROUBLESHOOTING

### **Problem: 500 Internal Server Error**

**Solution 1:** Check .env file
- Make sure database credentials are correct
- No extra spaces in DB_DATABASE, DB_USERNAME, DB_PASSWORD

**Solution 2:** Check permissions
```
storage/           → 755 (recursive)
bootstrap/cache/   → 755
```

**Solution 3:** Clear cache via SSH (if available)
```bash
cd public_html/shortenn_laravel
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

---

### **Problem: Database Connection Error**

**Check:**
1. Database name is correct in .env
2. Username is correct in .env
3. Password is correct in .env (no spaces before/after)
4. Database was imported successfully

**Verify:**
- Go to phpMyAdmin
- Select your database
- You should see tables: users, links, click_logs, etc.

---

### **Problem: CSS/Images Not Loading**

**Solution:**
- Make sure domain points to `/public` folder
- Check if `public/css/style.css` exists
- Clear browser cache (Ctrl + Shift + R)

---

### **Problem: "View not found" Error**

**Solution via SSH:**
```bash
cd public_html/shortenn_laravel
php artisan view:clear
php artisan optimize:clear
```

**Solution without SSH:**
- Delete everything in: `storage/framework/views/`
- Refresh the page

---

## 📋 POST-DEPLOYMENT CHECKLIST

After deployment, verify:

- [ ] Homepage loads (https://shortenn.org)
- [ ] All navigation links work
- [ ] Footer links work (Privacy, Terms, etc.)
- [ ] Can shorten URLs without login
- [ ] Can register new account
- [ ] Can login with admin account
- [ ] Dashboard shows up after login
- [ ] Can toggle links on/off
- [ ] Can delete links
- [ ] Can export CSV
- [ ] QR codes generate correctly
- [ ] Copy All URLs button works
- [ ] Mobile menu works (hamburger icon)
- [ ] `/ads.txt` is accessible
- [ ] `/sitemap.xml` is accessible
- [ ] Favicon shows in browser tab

---

## 🔐 SECURITY CHECKLIST

**Immediately after deployment:**

1. **Change Admin Password**
   - Login: admin@shortenn.org / admin123
   - Go to profile settings
   - Change password to something strong

2. **Verify .env is NOT publicly accessible**
   - Try visiting: https://shortenn.org/.env
   - Should get 403 Forbidden or 404 Not Found

3. **Check APP_DEBUG is false**
   - Open .env file
   - Verify: `APP_DEBUG=false`

4. **Verify database credentials are not default**
   - Check .env has your actual Hostinger credentials

---

## 📊 GOOGLE ADSENSE SETUP

Your site is already configured for AdSense!

**Publisher ID:** ca-pub-2154039585231057

**Next Steps:**
1. Visit: https://www.google.com/adsense
2. Login to your AdSense account
3. Add your site: shortenn.org
4. Verify ads.txt file (already uploaded)
5. Wait for approval (usually 1-2 weeks)
6. Once approved, ads will start showing automatically

**Verification:**
- AdSense script is in `<head>` of all pages ✅
- ads.txt file is at: https://shortenn.org/ads.txt ✅

---

## 📈 SEO SETUP

Your site is fully SEO optimized!

**Verify:**
- Visit: https://shortenn.org/sitemap.xml ✅
- Visit: https://shortenn.org/robots.txt ✅
- Check page source - all meta tags present ✅

**Submit to Google:**
1. Go to: https://search.google.com/search-console
2. Add property: shortenn.org
3. Verify ownership (DNS method recommended)
4. Submit sitemap: https://shortenn.org/sitemap.xml
5. Wait for Google to index your site (1-7 days)

---

## 🎯 PRODUCTION ENVIRONMENT SETTINGS

Your `.env` file is configured for production:

```env
APP_ENV=production          # Production mode
APP_DEBUG=false            # Debugging disabled
APP_URL=https://shortenn.org  # Your domain
LOG_LEVEL=error            # Only log errors
```

**Benefits:**
- ✅ Better performance
- ✅ Security hardened
- ✅ No debug info shown to users
- ✅ Optimized for production

---

## 📞 SUPPORT & HELP

**If you encounter issues:**

1. Check error logs:
   - File Manager → `shortenn_laravel/storage/logs/laravel.log`

2. Enable debug mode temporarily:
   - Edit `.env`
   - Change: `APP_DEBUG=true`
   - Visit your site to see actual error
   - **Remember to set back to false after fixing!**

3. Contact Hostinger Support:
   - They can help with server-specific issues
   - Database connection problems
   - File permission issues

---

## ✅ FINAL VERIFICATION

**Your site is ready when:**

✅ You can access: https://shortenn.org  
✅ You can shorten a URL  
✅ You can login as admin  
✅ Dashboard shows your links  
✅ All footer links work  
✅ Mobile menu works  
✅ No errors in browser console  
✅ Admin password changed  

---

## 🎉 CONGRATULATIONS!

Your **Shortenn.org** URL Shortener is now **LIVE**!

**What's Working:**
- ✅ Bulk URL shortening
- ✅ Custom aliases
- ✅ Click tracking
- ✅ User authentication
- ✅ Admin dashboard
- ✅ QR code generation
- ✅ CSV export
- ✅ SEO optimized
- ✅ AdSense ready
- ✅ Mobile responsive

**Start promoting your site!**

---

**Last Updated:** November 28, 2025  
**Domain:** https://shortenn.org  
**Support:** This guide covers 99% of deployment scenarios
