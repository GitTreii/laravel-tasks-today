# Tasks for Today Management System

A task-management web application developed using Laravel, MySQL, Eloquent ORM, Laravel Breeze, and Blade templates.

## Features

- Welcome page displaying today's tasks
- Full Task List page
- User Profile page
- About page
- Create new tasks
- Edit and update existing tasks
- Soft deletion using the `is_archived` column
- Form validation
- Laravel Breeze authentication
- Protected task management actions
- Automatic email notification when a task is marked as done
- Duplicate email notification prevention
- Eloquent database queries

## Technologies Used

- PHP
- Laravel 12
- MySQL
- Laravel Breeze
- Eloquent ORM
- Blade Templates
- Laravel Mail Facade
- Composer
- Node.js and Vite

## Application Routes

| Route | Description | Access |
|---|---|---|
| `/` | Welcome page showing today's tasks | Public |
| `/tasks` | Full task list | Public |
| `/profile` | User profile | Public |
| `/about` | Developer information | Public |
| `/login` | User login | Public |
| `/register` | User registration | Public |
| `/tasks/create` | Create task | Authenticated |
| `/tasks/{task}/edit` | Edit task | Authenticated |
| `PUT /tasks/{task}` | Update task | Authenticated |
| `DELETE /tasks/{task}` | Archive task | Authenticated |

## Database

Database name: `laravel_tasks_today`

### Tasks Table

- id
- title
- status
- task_date
- is_archived
- created_at
- updated_at

### Users Table

- id
- username
- full_name
- email
- password
- remember_token
- created_at
- updated_at

## Task Management

The application supports creating, editing, updating, and archiving tasks.

Task forms validate the required title, status, and task date.

Archived tasks are retained in the database and excluded from active task listings.

## Authentication

Laravel Breeze provides login and registration functionality.

Task creation, editing, updating, and archiving require an authenticated user.

The Welcome, Task List, Profile, and About pages remain publicly accessible.

## Email Notification

The application uses Laravel's Mail facade and a custom `TaskCompletedMail` Mailable.

When a task changes from a status other than `done` to `done`, Laravel generates a task-completed email notification.

Updating a task that is already marked as done does not generate another notification.

The local development environment uses Laravel's log mail driver. Generated email messages are recorded in:

`storage/logs/laravel.log`

The notification recipient is configured through the `TASK_NOTIFICATION_EMAIL` environment variable.

## Installation

1. Clone or download the repository.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Configure the MySQL database connection.
5. Run `php artisan key:generate`.
6. Run `php artisan migrate`.
7. Run `php artisan db:seed --class=TasksTodaySeeder`.
8. Install frontend dependencies using `npm install`.
9. Build frontend assets using `npm run build`.
10. Run `php artisan storage:link`.
11. Run `php artisan serve`.

## Mail Configuration

Configure the following settings in `.env` for local email logging:

```env
MAIL_MAILER=log
MAIL_FROM_ADDRESS="tasks@example.com"
MAIL_FROM_NAME="Tasks for Today"
TASK_NOTIFICATION_EMAIL="demo@example.com"
```

## Developer

Tracey Justin Devilleres

Laravel Web System Technologies Laboratory