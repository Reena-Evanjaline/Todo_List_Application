# Todo_List_Application
    
CRUD Application with Laravel

# Stack Used :
Backend Framework: Laravel (PHP)
Database: MySQL
Frontend: Blade (Laravel's templating engine), HTML, CSS
Deployment Platform: Local Setup (due to challenges with online hosting platforms)

# Features
Create: Users can add new records (e.g., "Product Name," "Description," "Price").

Read: Display all records in a table format.

Update: Edit and update existing records.

Delete: Delete records.

# Steps to Run the Application Locally

# Prerequisites

PHP >= 8.0
Composer
MySQL
Node.js & npm (for optional front-end assets)

# Installation

1. Clone the repository:
    git clone <repository-link>
    cd <repository-folder>

2. Install dependencies:
    composer install
3. Set up the environment:
    Duplicate the .env.example file and rename it to .env.
    Configure your database details in the .env file:

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_user
        DB_PASSWORD=your_database_password

4. Generate the application key:

        php artisan key:generate

5. Run migrations to set up the database schema:

        php artisan migrate

6. Serve the application locally:

        php artisan serve

By default, the application will be accessible at http://127.0.0.1:8000

# Deployment Steps

Due to challenges faced while deploying the application on online hosting platforms like Railway, Vercel, and Heroku, the application remains configured for local deployment. Below are the steps to deploy locally:

1. Prepare the application for production:

2. Update the .env file with production database credentials.

3. Set APP_ENV=production and APP_DEBUG=false.

4. Run php artisan config:cache and php artisan route:cache.

# Run the application locally:
        php artisan serve


# Thank you for reviewing the project! Feel free to reach out for any questions or feedback.
