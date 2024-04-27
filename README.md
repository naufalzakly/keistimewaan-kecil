# Getting started

## Installation
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)
Clone the repository

   gh repo clone naufalzakly/keistimewaan-kecil

Switch to the repo folder

    cd keistimewaan-kecil

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

input DB_DATABASE pada .env

    DB_DATABASE = Keistimewaan-keciil 

Generate a new application key

    php artisan key:generate
    
Run the database migrations 

    php artisan migrate

Start the local development server

    php artisan serve
