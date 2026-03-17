# Setup Guide for Lumauag Portfolio

This guide provides step-by-step instructions to set up the **Lumauag_portfolio** project on a new development environment after cloning it from GitHub.

---

## 🚀 Quick Start (One-Liner)

Copy and paste the following into your terminal to perform the full setup automatically (assumes your database is already created and named `laravel` per `.env.example`).

**For Git Bash / Linux / macOS:**
```bash
cp .env.example .env && composer install && npm install && npm run build && php artisan key:generate && php artisan migrate && php artisan storage:link && php artisan serve
```

**For PowerShell:**
```powershell
cp .env.example .env; composer install; npm install; npm run build; php artisan key:generate; php artisan migrate; php artisan storage:link; php artisan serve
```

---

## Prerequisites

Ensure your system meets the following requirements:
- **PHP 8.1+**
- **Composer** (PHP dependency manager)
- **Node.js & NPM** (for frontend assets)
- **Database Server** (MySQL, MariaDB, or SQLite)

---

## Installation Steps

### 1. Clone the Repository
If you haven't already, clone the project to your local machine:
```bash
git clone <repository-url>
cd Lumauag_portfolio
```

### 2. Environment Configuration
Copy the example environment file to create your local `.env`:
```bash
cp .env.example .env
```
Open the `.env` file and update your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 3. Install Backend Dependencies
Run Composer to install all PHP packages:
```bash
composer install
```

### 4. Install Frontend Dependencies
Install NPM packages and compile assets:
```bash
npm install
npm run build
```

### 5. Generate Application Key
Generate a unique encryption key for your application:
```bash
php artisan key:generate
```

### 6. Database Migrations
Create the database tables and seed them (if applicable):
```bash
php artisan migrate
```
*Note: If you have seeders, run `php artisan migrate --seed`.*

### 7. Storage Link
Create a symbolic link from `public/storage` to `storage/app/public` (required for media uploads):
```bash
php artisan storage:link
```

### 8. Run the Application
Start the local development server:
```bash
php artisan serve
```
Your application will be available at `http://localhost:8000`.

For real-time asset compilation during development, run:
```bash
npm run dev
```

---

## Troubleshooting

- **Permissions**: Ensure the `storage` and `bootstrap/cache` directories are writable by the web server.
- **Database**: Ensure your database server is running and the database name matches what's in your `.env`.
- **Media Library**: If images are not showing, verify that `php artisan storage:link` was successful.
