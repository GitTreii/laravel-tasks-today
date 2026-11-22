# Laravel Tasks for Today Management System

A task-management web application developed using Laravel, MySQL, Eloquent ORM, migrations, seeders, and Blade templates.

## Features

- Welcome page displaying today's tasks
- Full Task List page displaying all tasks
- Demo User Profile page
- About page with developer information
- Date-based task filtering
- Eloquent database queries
- MySQL database integration
- Laravel migrations and seeding
- Navigation between all four pages

## Routes

- `/` - Today's Tasks
- `/tasks` - All Tasks
- `/profile` - User Profile
- `/about` - About

## Technologies Used

- PHP
- Laravel
- MySQL
- Eloquent ORM
- Blade Templates
- Composer

## Database

Database name: `laravel_tasks_today`

Tables:
- `tasks`
- `users`

The Tasks table contains at least 8 sample records spanning 3 dates.

The Users table contains exactly 1 demo user.

Database tables are created using Laravel migrations, and sample records are inserted using `TasksTodaySeeder`.

## Installation

1. Clone or download the repository.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Configure the database connection:

   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_tasks_today
   DB_USERNAME=root
   DB_PASSWORD=
   SESSION_DRIVER=file
   ```

5. Create a MySQL database named `laravel_tasks_today`.
6. Run `php artisan key:generate`.
7. Run `php artisan migrate`.
8. Run `php artisan db:seed --class=TasksTodaySeeder`.
9. Run `php artisan serve`.
10. Open `http://127.0.0.1:8000`.

## Project Structure

- `app/Models/Task.php`
- `app/Models/User.php`
- `app/Http/Controllers/TaskController.php`
- `app/Http/Controllers/ProfileController.php`
- `app/Http/Controllers/PageController.php`
- `database/migrations/`
- `database/seeders/TasksTodaySeeder.php`
- `resources/views/`
- `routes/web.php`

## Data Handling

The Welcome page uses Eloquent to retrieve tasks matching today's date.

The Task List page retrieves all tasks ordered by task date.

The Profile page retrieves the single demo user record.

## Developer

Tracey Justin Devilleres