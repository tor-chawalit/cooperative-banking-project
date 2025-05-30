ENG Version
# Cooperative ATM Project
"This project was finished in 2023 and isn't being updated anymore. It was made just for learning and course presentation."
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
-----------------------------------------------------------------------------------------------------------------
ไทย
# ระบบธนาคารสหกรณ์และ ATM จำลอง (Dividend Banking System)
“โปรเจกต์นี้ไม่ได้รับการอัปเดตเพิ่มเติม และพัฒนาเสร็จสมบูรณ์ในปี พ.ศ. 2566 (ค.ศ. 2023) เพื่อใช้สำหรับการศึกษาและนำเสนอในรายวิชาเท่านั้น”

ระบบนี้เป็นเว็บแอปพลิเคชันที่พัฒนาด้วย PHP และ MySQL สำหรับจำลองการทำงานของธนาคารสหกรณ์ พร้อมระบบ ATM และการจัดการเงินปันผล

## 🧩 ฟีเจอร์หลัก

- 🧑‍💼 ลงทะเบียน, เข้าระบบ และจัดการข้อมูลผู้ใช้
- 💸 ฝาก-ถอนเงิน ตรวจสอบยอดคงเหลือ
- 🏧 ระบบ ATM จำลอง พร้อมการนับจำนวนธนบัตร
- 📈 ระบบแสดงเงินปันผลแก่สมาชิก
- 🔐 แผงควบคุมของผู้ดูแลระบบ (Admin Panel)
- 🗺️ แผนที่แสดงตำแหน่งสาขาหรือ ATM
- 🧾 แสดงประวัติธุรกรรมย้อนหลัง
- 🖼️ อัปโหลดรูปภาพหรือเอกสาร

## 🗃️ โครงสร้างฐานข้อมูล

ไฟล์ฐานข้อมูลอยู่ที่:

```
projectatm/database/atm.sql
```

ตารางหลักในระบบ:

- `admin` – ข้อมูลแอดมิน
- `bank_atm` – การติดตามจำนวนธนบัตรใน ATM
- `dividend` – ข้อมูลการจ่ายปันผล
- `member` – ข้อมูลสมาชิก
- `transaction` – บันทึกธุรกรรมฝาก-ถอน

## 📁 โครงสร้างโปรเจกต์

```
projectatm/
├── css/               # แฟ้ม CSS สำหรับตกแต่งหน้าเว็บ
├── img/               # ไฟล์รูปภาพ UI และไอคอน
├── upload/            # ไฟล์ที่ผู้ใช้อัปโหลด
├── templates/         # ส่วน header/footer
├── database/          # ไฟล์ SQL ฐานข้อมูล
├── *.php              # ไฟล์หลักของระบบ
└── Readme.txt         # คำอธิบายโปรเจกต์ (ต้นฉบับ)
```

## ⚙️ วิธีติดตั้งระบบ

### ความต้องการ

- PHP 7.4 ขึ้นไป
- MySQL หรือ MariaDB
- Apache (แนะนำใช้ XAMPP หรือ Laragon)

### ขั้นตอนติดตั้ง

1. ติดตั้ง [XAMPP](https://www.apachefriends.org) หรือโปรแกรมที่คล้ายกัน
2. คัดลอกโฟลเดอร์ `projectatm` ไปไว้ในโฟลเดอร์ `htdocs`:
   ```
   C:/xampp/htdocs/projectatm/
   ```
3. เปิดใช้งาน Apache และ MySQL
4. เปิด `phpMyAdmin` และสร้างฐานข้อมูลชื่อ `atm`
5. นำเข้าไฟล์ SQL:
   ```
   projectatm/database/atm.sql
   ```
6. เปิดระบบผ่านเบราว์เซอร์:
   ```
   http://localhost/projectatm/login.php
   ```

### บัญชีแอดมินเริ่มต้น

- **ชื่อผู้ใช้:** `admin`
- **รหัสผ่าน:** `1234`

## 🧑‍💻 หมายเหตุสำหรับนักพัฒนา

- ระบบไม่ได้ใช้รูปแบบ MVC แต่ใช้แนวทางการแบ่งไฟล์ตามหน้าเว็บ
- การเชื่อมต่อฐานข้อมูลอยู่ในไฟล์ `connect.php`

## 📄 เงื่อนไขการใช้งาน

ระบบนี้จัดทำขึ้นเพื่อการศึกษาเท่านั้น
