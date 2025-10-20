# Eran Plastindo Utama — Website (Laravel)

Company profile website built with **Laravel 11**, TailwindCSS and Vite.

## Requirements (local)
- PHP 8.3+
- Composer
- Node.js 20+
- MySQL

## Setup (development)
```bash
# clone
git clone https://github.com/FakharNaufal/eranplastindoutama.git
cd eranplastindoutama

# install deps
composer install
npm ci

# copy env and set values
cp .env.example .env
php artisan key:generate

# build assets (dev)
npm run dev
# or production build
npm run build

# run migrations (local)
php artisan migrate
php artisan db:seed
