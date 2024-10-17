## Blog System with Admin Post Approval

This project is a basic blog system where users can create posts. Before a post is publicly visible, it must be approved by an admin user. The project is built using Laravel and includes authentication via Laravel Breeze, admin roles, and post approval workflows.

## Prerequisites

Ensure that you have the following installed:

- PHP >= 8.1
- Composer
- MySQL
- Node.js & npm

## Installation

Follow the steps below to install and run the project locally:

### 1. Clone the repository

```bash
git clone https://github.com/Shukri-Rauf/Simplibill-Assessment.git
cd Simplibill-Assessment
```

### 2. Install dependencies

Install the PHP dependencies using Composer:

```bash
composer install
```

Install the JavaScript dependencies:
```bash
npm install
npm run dev
```

### 3. Set up environment configuration

Copy the .env.example file to .env:
```bash
cp .env.example .env
```

Open the .env file and configure your database connection settings:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Generate application key

Generate the application key, which is used by Laravel to encrypt data:

```bash
php artisan key:generate
```

### 5. Run migrations

Run the database migrations to create the required tables:

```bash
php artisan migrate
```

### 6. Seed the database

Seed the database with example data, including an admin user:

```bash
php artisan db:seed
```

### 7. Admin Credentials

After seeding, an admin user is created with the following credentials:

- Email: admin@simplibill.com
- Password: admin@123

You can log in as an admin user to access the admin dashboard and approve posts.

### 8. Run the server

Finally, start the local development server:

```bash
php artisan serve
```

Visit http://localhost:8000 in your browser to view the application.

## Running Tests

To run the tests, follow these steps:

### 1. Run PHPUnit tests

Run the tests with:

```bash
php artisan test
```

This will execute the test suite, including feature tests for post creation and post approval.
