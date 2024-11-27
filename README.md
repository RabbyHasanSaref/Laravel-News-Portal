# Laravel News Portal Application 
A Laravel News Portal Application is a web-based platform built using the Laravel PHP framework designed to manage and display news articles, updates, blogs, or any other kind of dynamic content. This application typically allows users to interact with news articles by reading, commenting, sharing, and possibly submitting content, depending on the site's functionality.
Here's a description of the core features and components that could make up a Laravel News Portal Application

# install Project Dependencies
composer install

# Environment Configuration
cp .env.example .env

# Generate Application Key
php artisan key:generate

# Set Up the Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

## php artisan migrate

## http://127.0.0.1:8000/admin/dashboard
## user : admin@gmail.com
## pass : 123456