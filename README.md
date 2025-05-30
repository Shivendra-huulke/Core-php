# 📦 Core PHP Product Management Project

This is a simple **Core PHP** project that includes:

- ✅ User registration and login (with session management)
- ✅ Product management: Add, Edit, Delete, View
- ✅ API endpoint to fetch product list in JSON
- ✅ Secure practices using prepared statements and hashed passwords

---

## 🗂️ Project Structure

project/
├── auth/ # Login, Register, Logout
├── product/ # Product listing, add, edit, delete
├── api/ # JSON API for products
├── config/ # Database config
└── index.php # Home page (optional)

---

## ✅ Requirements

- PHP ≥ 7.0
- MySQL
- Apache (or any web server)
- **XAMPP**, **WAMP**, or **PHP CLI**

---

## ⚙️ Setup Instructions

### 1. 🧱 Create Database

1. Open **phpMyAdmin** or use **MySQL CLI**.
2. Run this SQL:

```sql
CREATE DATABASE product_db;

USE product_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DOUBLE NOT NULL,
    description TEXT
);

Open terminal and run:
cd D:/projects/core-php-crud
php -S localhost:8000

