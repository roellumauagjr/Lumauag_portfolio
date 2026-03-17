@echo off
setlocal enabledelayedexpansion

:: -----------------------------------------------------------------------------
:: Lumauag Portfolio - Automated Setup Script
:: -----------------------------------------------------------------------------

title Lumauag Portfolio Setup

echo =====================================================================
echo    🚀 Welcome to the Lumauag Portfolio Automated Setup
echo =====================================================================
echo.

:: 1. Check for PHP
php -v >nul 2>&1
if %errorlevel% neq 0 (
    echo ❌ PHP is not installed or not in your PATH.
    echo Please install PHP 8.1 or higher and try again.
    pause
    exit /b 1
)
echo ✅ PHP detected.

:: 2. Check for Composer
composer -v >nul 2>&1
if %errorlevel% neq 0 (
    echo ❌ Composer is not installed or not in your PATH.
    echo Please install Composer from https://getcomposer.org/ and try again.
    pause
    exit /b 1
)
echo ✅ Composer detected.

:: 3. Check for Node.js/NPM
npm -v >nul 2>&1
if %errorlevel% neq 0 (
    echo ❌ Node.js/NPM is not installed or not in your PATH.
    echo Please install Node.js from https://nodejs.org/ and try again.
    pause
    exit /b 1
)
echo ✅ Node.js/NPM detected.

echo.
echo ---------------------------------------------------------------------
echo 📦 Step 1: Preparing Environment Configuration
echo ---------------------------------------------------------------------

if not exist .env (
    echo 📝 Creating .env from .env.example...
    copy .env.example .env
    echo ⚠️  IMPORTANT: Please ensure your database is created and 
    echo    credentials match in the .env file before the migration step!
) else (
    echo ✅ .env file already exists.
)

echo.
echo ---------------------------------------------------------------------
echo 🚚 Step 2: Installing PHP Dependencies (Composer)
echo ---------------------------------------------------------------------
call composer install
if %errorlevel% neq 0 (
    echo ❌ Composer install failed.
    pause
    exit /b 1
)

echo.
echo ---------------------------------------------------------------------
echo 🎨 Step 3: Installing Frontend Dependencies (NPM)
echo ---------------------------------------------------------------------
call npm install
if %errorlevel% neq 0 (
    echo ❌ NPM install failed.
    pause
    exit /b 1
)

echo.
echo ---------------------------------------------------------------------
echo 🏗️  Step 4: Compiling Assets (Vite)
echo ---------------------------------------------------------------------
call npm run build
if %errorlevel% neq 0 (
    echo ❌ Asset compilation failed.
)

echo.
echo ---------------------------------------------------------------------
echo 🔑 Step 5: Generating Application Key
echo ---------------------------------------------------------------------
call php artisan key:generate

echo.
echo ---------------------------------------------------------------------
echo 🔗 Step 6: Creating Storage Link
echo ---------------------------------------------------------------------
call php artisan storage:link

echo.
echo ---------------------------------------------------------------------
echo 🗄️  Step 7: Running Database Migrations
echo ---------------------------------------------------------------------
echo Applying database migrations...
call php artisan migrate --force
if %errorlevel% neq 0 (
    echo ⚠️  Database migration failed. 
    echo    Check your DB credentials in .env and ensure the DB exists.
)

echo.
echo =====================================================================
echo 🎉 Setup Complete! Launching the Application...
echo =====================================================================
echo.
echo The application will start at http://localhost:8000
echo.

call php artisan serve
pause
