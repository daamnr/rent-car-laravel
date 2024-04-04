# Laravel 10 - Rental Mobil

## Screenshots

<p align="center">
    Daftar Mobil <br>
    <img src="https://raw.githubusercontent.com/daamnr/rent-car-laravel/main/public/images/daftar-mobil.png">
</p>

<p align="center">
    Pengembalian Mobil <br>
    <img src="https://raw.githubusercontent.com/daamnr/rent-car-laravel/main/public/images/pengembalian-mobil.png">
</p>

<p align="center">
    Data Booking Mobil <br>
    <img src="https://raw.githubusercontent.com/daamnr/rent-car-laravel/main/public/images/data-booking-mobil.png">
</p>

<p align="center">
    Data Mobil <br>
    <img src="https://raw.githubusercontent.com/daamnr/rent-car-laravel/main/public/images/data-mobil.png">
</p>

## Donwload

Clone the project

```bash
  git clone https://github.com/daamnr/rent-car-laravel.git nama_projek
```

Go to the project directory

```bash
  cd nama_projek
```

Copy file `.env.example` and rename this file to `.env`

Edit your database configuration in `.env` file


Install `composer` dependencies

```bash
    composer install
```

Generate your application key using `php artisan` command below

```bash
    php artisan key:generate
```

Run database migration using `php artisan` commad below

```bash
    php artisan migrate:fresh --seed
```

Run `storage link` commad below

```bash
    php artisan storage:link
```


### Login

-   email = admin@admin.com
-   password = 123
