# Home Service


## Before Start

**NOTE:** Please install [Composer Package Manager](https://getcomposer.org/) so that bellow ``artisan`` command work properly.

## Installation

First of all clone github repository using this command
```
git clone https://github.com/rahadur/home-service.git
```

After cloning repository. configure `.env` file inside project directory

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Assing your database information `DB_DATABASE` `DB_USERNAME` `DB_PASSWORD` if you have

## Database Migration

Now you have to migrate all database table inside your database to do this use bellow command

```
php artisan migrate
```

To insert dummy data into database tables use this command

```
php artisan db:seed
```

## Run Development Server

To run your development server use this command
```
php artisan serve
```

Now visit ``http://localhost:8080``

Now your are ready to use this application.

## Demo Users information

| Name          | Email             | Password  |
| ------------- |:-----------------:| ---------:|
| Admin         | admin@email.com   | secret    |
| User          | user@email.com    | secret    |
| User 1        | user1@email.com   | secret    |
| User 2        | user2@email.com   | secret    |
| Worker        | worker@email.com  | secret    |
| Worker 1      | worker1@email.com | secret    |
| Worker 2      | worker2@email.com | secret    |
| Worker 3      | worker3@email.com | secret    |
