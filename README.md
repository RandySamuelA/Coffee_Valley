# Coffee Valley

Aplikasi web Coffee Valley menggunakan Laravel + XAMPP.

## Instalasi

1. Clone repository
   git clone https://github.com/username/coffee-valley.git

2. Install dependencies
   composer install

3. Copy file env
   cp .env.example .env

4. Generate app key
   php artisan key:generate

5. Setting database di .env
   DB_DATABASE=coffee_valley
   DB_USERNAME=root
   DB_PASSWORD=

6. Import database
   Import file coffee_valley.sql ke phpMyAdmin

7. Jalankan aplikasi
   php artisan serve

## Database
Import file `coffee_valley.sql` yang ada di root folder project.
