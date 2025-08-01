# Laravel Starter Kit for Educational Consultancy Backend

This Laravel Starter Kit is designed to provide a robust starting point for building a backend tailored for educational consultancies. It includes essential CRUD operations and modular components, making it ideal for managing consultancy operations efficiently.

## Features

- User-friendly interface for managing data
- Modular structure for easy scalability
- Pre-configured CRUD operations for common tasks
- Optimized for educational consultancy needs, including student records, inquiry management, and course tracking
- Built-in authentication and role management
- Laravel best practices for maintainable codebase

---

## Installation Guide

### Prerequisites

Before you begin, ensure you have the following installed on your system:

1. **PHP >= 8.0**  
2. **Composer**  
3. **MySQL Database**  
4. **Node.js & npm/yarn**  
5. **Git**  
6. **Laravel Installer** (optional)

---

### Step 1: Clone the Repository

```git clone <repository-url> laravel-starter-kit```

### Step 2: Install Dependency
```cd laravel-starter-kit```
```composer install```


### Step 3: Configure environement
```cp .env.example .env```

### Step 4: Generate Application key
```php artisan key:generate```

### Step 5: Run Migrations and Seeders
```php artisan migrate```
```php artisan db:seed```

### Step 6: Compile Assets
```npm run dev```
```npm run build```

### Step 7: start server
```php artisan serve```
