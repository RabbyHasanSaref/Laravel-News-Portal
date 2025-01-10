# Laravel News Portal Application

A Laravel News Portal Application is a web-based platform built using the Laravel PHP framework. It is designed to manage and display news articles, updates, blogs, or other kinds of dynamic content. Users can interact with news articles by reading, commenting, sharing, and possibly submitting content, depending on the site's functionality.

---

## Features
- **User Management:** Admins can manage user accounts and roles.
- **News Management:** Create, update, delete, and publish news articles.
- **Comments System:** Allow users to comment on articles.
- **Responsive Design:** Optimized for both desktop and mobile devices.
- **Media Integration:** Add images and videos to articles.
- **SEO Friendly:** URLs and meta tags are optimized for search engines.

---

## Installation Guide

### 1. Install Project Dependencies
Run the following command to install the required dependencies:
```bash
composer install
```

### 2. Environment Configuration
Create a copy of the `.env` file and configure the environment variables:
```bash
cp .env.example .env
```

### 3. Generate Application Key
Generate the application key using the command:
```bash
php artisan key:generate
```

### 4. Set Up the Database
Update the `.env` file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 5. Run Database Migrations
Run the following command to set up the database structure:
```bash
php artisan migrate
```

### 6. Access the Admin Dashboard
Once everything is set up, you can access the admin dashboard:
```
http://127.0.0.1:8000/admin/dashboard
```

**Default Admin Credentials:**
- **User:** admin@gmail.com
- **Password:** 123456

---

## Screenshots

![Dashboard Screenshot](/public/news.jpeg)
![News Page Screenshot](/public/news1.jpeg)

---

## Notes
- Ensure that you have the necessary PHP extensions enabled.
- Use Laravel's built-in authentication system for secure user management.
- Regularly back up your database and application files.

---

Enjoy your Laravel News Portal Application!
