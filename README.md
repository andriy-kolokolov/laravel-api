
## Installation

- #### Create database using phpMyAdmin, Workbench ecc.

- #### Run to create new .env :
    ```sh
    cp .env.example .env

- #### Setup in .env your database host, port, username and password

- #### Generate App Key:
    ```sh
    php artisan key:generate

- #### Install composer and npm:
    - ```sh
      composer install
    - ```sh
      npm install

- #### Populate database using migrations and seeder:
    ```sh
    php artisan migrate:fresh --seed

- #### Run servers:
    - ```sh
      php artisan serve
    - ```sh
      npm run dev
      
