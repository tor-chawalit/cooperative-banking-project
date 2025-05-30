
# Cooperative ATM Project

This is a PHP & MySQL-based web application simulating a cooperative banking system with ATM-like features.

## 🧩 Features

- 🏦 User account registration, login, and management
- 💰 Deposit, withdrawal, and account balance inquiry
- 🏧 Simulated ATM system with banknote tracking
- 📈 Dividend tracking for cooperative members
- 🔒 Admin control panel for user and dividend management
- 🗺️ Map integration (branch/ATM locator)
- 🧾 Transaction history and account statements
- 🖼️ Image uploads (e.g., profile pictures or documents)

## 🗃️ Database

Database schema is located in:

```
projectatm/database/atm.sql
```

Tables include:

- `admin` – Admin credentials
- `bank_atm` – ATM banknote tracking
- `dividend` – Dividend distribution
- `member` – Member information
- `transaction` – Deposit/withdrawal logs

## 📂 Project Structure

```
projectatm/
├── css/               # Stylesheets
├── img/               # UI Images and Icons
├── upload/            # Uploaded user files
├── templates/         # Header and footer includes
├── database/          # SQL dump file
├── *.php              # Core functional pages
└── Readme.txt         # Original Thai project description
```

## ⚙️ Installation Guide

### Requirements

- PHP 7.4+
- MySQL or MariaDB
- Apache (XAMPP, Laragon, etc.)

### Steps

1. Install [XAMPP](https://www.apachefriends.org) or equivalent.
2. Place `projectatm/` inside `htdocs/` folder:
   ```
   C:/xampp/htdocs/projectatm/
   ```
3. Start Apache and MySQL.
4. Open `phpMyAdmin` and create a database named `atm`.
5. Import the SQL file:
   ```
   projectatm/database/atm.sql
   ```
6. Access the system via:
   ```
   http://localhost/projectatm/login.php
   ```

### Default Admin Login

- **Username:** `admin`
- **Password:** `1234`

## 🧑‍💻 Developer Notes

- PHP files are not organized under MVC but follow page-based routing.
- Use `connect.php` to update database connection details.

## 📄 License

This project is for educational purposes only.
