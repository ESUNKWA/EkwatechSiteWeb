# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**Ekwatech-Polyvalent** (also referred to as "innov360") is a Laravel 9 IT services company website. It is a mostly single-page marketing site with two backend features: a customer contact form and JasperReports PDF generation.

## Common Commands

```bash
# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Generate app key (first-time setup)
php artisan key:generate

# Run database migrations
php artisan migrate

# Start dev server
php artisan serve

# Build frontend assets (Vite)
npm run build
npm run dev

# Run all tests
php artisan test
# Or:
./vendor/bin/phpunit

# Run a specific test file
php artisan test tests/Feature/ExampleTest.php

# Run the scheduled job dispatcher (requires scheduler to be running)
php artisan schedule:run

# Code formatting with Laravel Pint
./vendor/bin/pint
```

## Architecture

### Routing & Controllers
- `routes/web.php` — two routes: `GET /` (renders `master` view) and `POST /register_customer_msg`
- `routes/api.php` — only the default Sanctum user route; no custom API endpoints
- `CustomerMessageController` — handles contact form submissions, stores to `t_messages` table
- `JasperController` — generates PDF reports via the `jasperstarter` CLI tool; `generateReportTable` writes a JSON data file to `storage/data.json` and calls `jasperstarter` as a shell command

### Frontend
The frontend is a single Blade view (`resources/views/master.blade.php`) that assembles sections via `@include('layout.*')`. Layout partials live in `resources/views/layout/`: `topBar`, `nav`, `about`, `services`, `faq`, `contact`, `footer`.

All CSS/JS assets are served from `public/assets/` using `asset()` helpers — **not** through Vite. The `resources/css/app.css` and `resources/js/app.js` files exist for Vite but are unused by the main view. Bootstrap 5, AOS, Glightbox, and Swiper are loaded from `public/assets/vendor/`.

### Database
MySQL. The only application table is `t_messages` (mapped via `CustomerMessage` model with `$table = 't_messages'`). Fields: `customer_name`, `customer_email`, `subject`, `message`, `send_mail`.

### Scheduled Jobs
`app/Console/Kernel.php` schedules `receiveCustomerMail` job to run every minute. Currently the job only logs a test message.

### CI/CD
Jenkins pipeline (`Jenkinsfile`) runs on pushes to `main`:
1. Checkout from `https://github.com/ESUNKWA/innov360.git`
2. `composer install` via Docker
3. Copy `.env.example` → `.env` and generate app key via Docker
4. Deploy via `rsync` to `root@38.242.232.151:/var/www/html/innov360`, then run `migrate`, `config:cache`, `route:cache`, `view:cache` on the server

### JasperReports Integration
`JasperController` requires the `jasperstarter` CLI tool to be installed on the server. Reports (`.jasper` compiled files) live in `public/reports/`. Generated PDFs go to `public/report_output/`.
