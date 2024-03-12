## Laravel Php Assessment

To Setup The Project , Follow Instructions Below

-   Copy .env.example and rename it to .env
-   Create Database and give name [laravel-php-assessment] to it.

-   Install the Composer Dependencies by following command

```bash
composer install
```
-   Install the Node Dependencies by following commands

```bash
npm install
```


-   Check App Key in the env if it's not set , then run the below command

```bash
php artisan key:generate
```

-   Run the Below Command , Which Will First Migrate the migrations and starts seeding process , which will seed the products data .

```bash
php artisan migrate --seed
```

-   Run The Below Command to start vite server

```bash
npm run dev
```

-   Now Starts the php server by following command

```bash
php artisan serve
```

-   Thats it now you can access front page and you can click on products link in the nav to access all the products.

## Thats it
