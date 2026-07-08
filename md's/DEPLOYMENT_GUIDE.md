# SHORTENN.ORG - HOSTINGER DEPLOYMENT GUIDE

## 📋 PRE-DEPLOYMENT CHECKLIST

### Files You Need to Upload:
- ✅ All project files (entire Laravel project)
- ✅ Database will be created using migrations (no SQL file needed)

---

## 🗄️ STEP 1: CREATE DATABASE ON HOSTINGER

1. **Login to Hostinger Control Panel (hPanel)**
2. Go to **Databases** → **MySQL Databases**
3. Click **Create New Database**
   - Database Name: `u123456789_shortenn` (Hostinger auto-adds prefix)
   - Username: Will be created automatically or use existing
   - Password: Create a strong password
4. **Save these credentials:**
   - Database Name: `u123456789_shortenn`
   - Username: `u123456789_shortenn_user`
   - Password: `[your_password]`
   - Host: `localhost` (usually)

---

## 📁 STEP 2: UPLOAD FILES TO HOSTINGER

### Option A: Using File Manager (Recommended)

1. Go to **File Manager** in hPanel
2. Navigate to `public_html` folder
3. Create a new folder called `shortenn_laravel` (or upload directly to public_html)
4. Upload **ALL** project files except:
   - `node_modules/` (not needed)
   - `.git/` (if exists)
   - `storage/logs/*.log` (will be recreated)

### Option B: Using FTP (FileZilla)

1. Download FileZilla
2. Connect using FTP credentials from Hostinger
3. Upload entire project to `/public_html/`

---

## 🔧 STEP 3: CONFIGURE ENVIRONMENT FILE

1. In File Manager, navigate to your project root
2. Find `.env.example` file
3. Copy it and rename to `.env`
4. Edit `.env` file with these settings:

```env
APP_NAME=Shortenn
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=https://shortenn.org

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=u123456789_shortenn
DB_USERNAME=u123456789_shortenn_user
DB_PASSWORD=your_database_password_here

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

**Important:** Replace:
- `u123456789_shortenn` with your actual database name
- `u123456789_shortenn_user` with your actual database username
- `your_database_password_here` with your actual database password

---

## 🔑 STEP 4: GENERATE APPLICATION KEY

### Using SSH (If Hostinger provides SSH access):

```bash
cd public_html/shortenn_laravel
php artisan key:generate
```

### Without SSH:

1. Go to this website: https://generate-random.org/laravel-key-generator
2. Generate a key (it will look like: `base64:ABC123xyz...`)
3. Open your `.env` file
4. Add the key: `APP_KEY=base64:ABC123xyz...`

---

## 📂 STEP 5: SETUP PUBLIC DIRECTORY

### Option A: Domain Pointing to Public Folder

1. In hPanel, go to **Domains**
2. Select your domain `shortenn.org`
3. Change **Document Root** to: `/public_html/shortenn_laravel/public`
4. Save changes

### Option B: Copy Public Contents (Alternative)

If you can't change document root:

1. Copy ALL files from `shortenn_laravel/public/*` to `/public_html/`
2. Edit `/public_html/index.php`:

**Change:**
```php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
```

**To:**
```php
require __DIR__.'/shortenn_laravel/vendor/autoload.php';
$app = require_once __DIR__.'/shortenn_laravel/bootstrap/app.php';
```

---

## 🗃️ STEP 6: RUN MIGRATIONS (CREATE DATABASE TABLES)

### Using SSH (Recommended):

```bash
cd public_html/shortenn_laravel
php artisan migrate --force
php artisan db:seed --class=DatabaseSeeder
```

### Without SSH - Create SQL File:

I'll create a SQL export file for you that you can import via phpMyAdmin.

---

## 🔐 STEP 7: SET FILE PERMISSIONS

Set these folder permissions in File Manager:

1. `storage/` → **755** (recursive)
2. `storage/framework/` → **755** (recursive)
3. `storage/logs/` → **755** (recursive)
4. `bootstrap/cache/` → **755** (recursive)

**Set file permissions:**
- All folders: **755**
- All files: **644**

---

## 🚀 STEP 8: CONFIGURE .HTACCESS (PUBLIC FOLDER)

Make sure `/public/.htaccess` contains:

```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

---

## ✅ STEP 9: FINAL CHECKS

1. Visit: `https://shortenn.org`
2. Test these pages:
   - Homepage
   - Login
   - Register
   - About
   - Features
3. Test URL shortening
4. Check dashboard after login

---

## 🔧 TROUBLESHOOTING

### Error: "500 Internal Server Error"
- Check `.env` file is configured correctly
- Check file permissions (storage/ and bootstrap/cache/)
- Enable debug: `APP_DEBUG=true` in `.env` (temporarily)

### Error: "SQLSTATE[HY000] [1045] Access denied"
- Database credentials in `.env` are wrong
- Verify username, password, and database name

### Error: "Base table or view not found"
- Migrations haven't been run
- Run migrations via SSH or import SQL file

### Error: "APP_KEY not set"
- Generate key using `php artisan key:generate` or manually add one

### Error: "Class not found"
- Run: `composer install --optimize-autoloader --no-dev`

---

## 📞 SUPPORT

If you encounter issues:
1. Check error logs: `/storage/logs/laravel.log`
2. Enable debug mode temporarily: `APP_DEBUG=true`
3. Contact Hostinger support for server-specific issues

---

## 🎯 QUICK DEPLOYMENT SUMMARY

1. ✅ Create MySQL database on Hostinger
2. ✅ Upload all project files
3. ✅ Configure `.env` with database credentials
4. ✅ Generate APP_KEY
5. ✅ Point domain to `/public` folder
6. ✅ Run migrations (SSH or import SQL)
7. ✅ Set file permissions
8. ✅ Test website

---

**Created:** 2025-11-28  
**For:** Shortenn.org Laravel Deployment on Hostinger
