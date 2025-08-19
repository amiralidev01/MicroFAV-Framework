# MicroFAV-Framework

A lightweight PHP framework built with the **MVC architecture**.  
Designed for simplicity, flexibility, and fast development of PHP web applications.

## ​ Features
- MVC structure (Model, View, Controller)
- Simple routing system
- View rendering with template support
- Database interaction (basic ORM or query builder)
- Error handling & custom 404 page
- Extendable core for middleware, authentication, etc.

## ​ Requirements
- PHP 8.0 or higher
- Composer (for autoloading and dependencies)
- A web server (Apache, Nginx) or PHP built-in server
- (Optional) PDO extension for database support

## ​ Installation

Clone the repository:
```bash
git clone git@github.com:amiralidev01/MicroFAV-Framework.git
cd MicroFAV-Framework
Install dependencies:

bash
Copy
Edit
composer install
Configure your environment:

bash
Copy
Edit
cp .env.example .env
Edit .env to set your app settings (e.g., APP_URL, database credentials).

Run with built-in server for development:

bash
Copy
Edit
php -S localhost:8000 -t public
Open in your browser:

arduino
Copy
Edit
http://localhost:8000
Project Structure
text
Copy
Edit
MicroFAV-Framework/
│-- app/
│   │-- Controllers/
│   │-- Models/
│   └-- Views/
│-- config/
│-- public/
│   └-- index.php
│-- routes/
│   └-- web.php
│-- system/              # Core framework classes (Router, Base Controller, etc.)
│-- .env.example
│-- composer.json
│-- README.md
