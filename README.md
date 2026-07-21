# 💬 Ki Obosta?

### 🚀 Real-Time PHP Group Chat Application

![PHP](https://img.shields.io/badge/PHP-Backend-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![JavaScript](https://img.shields.io/badge/JavaScript-AJAX-yellow)
![Status](https://img.shields.io/badge/Project-Active-brightgreen)
![License](https://img.shields.io/badge/License-MIT-green)

---

## 🌐 Overview

**Ki Obosta** is a **real-time group chat web application** where users can register, log in, and instantly start chatting in a shared chatroom.

Messages update automatically every **500ms using AJAX polling**, meaning **no page refresh is required**.

The application is built **completely from scratch** using core web technologies.

### ⚙️ Built With

- **PHP** → Backend logic
- **MySQL** → Database storage
- **Vanilla JavaScript** → AJAX & DOM manipulation
- **HTML5 & CSS3** → UI structure and styling

---

# 🖼️ Preview

<p align="center">
  <img src="https://i.postimg.cc/rpymk3Zh/Screenshot-2026-07-12-080323.png" width="900" height="506" alt="Chat Preview">
</p>

## 📸 Screenshots

<p align="center">
  <img src="https://i.postimg.cc/LXc2nbvK/Screenshot-2026-07-12-081457.png" width="900" height="506" alt="Registration Page">
</p>

<p align="center">
  <img src="https://i.postimg.cc/GppcNY9J/Screenshot-2026-07-12-080346.png" width="900" height="506" alt="Chat Room">
</p>

<p align="center">
  <img src="https://i.postimg.cc/rpymk3Zh/Screenshot-2026-07-12-080323.png" width="900" height="506" alt="Login Page">
</p>

---

# ✨ Features

## 🔐 User Authentication

- Login using **email and password**
- Session-based authentication
- Unauthorized users cannot access chat
- Automatic redirect if already logged in

---

## 📝 Registration System

- First & last name validation
- Email sanitized using `FILTER_SANITIZE_EMAIL`

### Password Rules

- ✅ Minimum **6 characters**
- ✅ Must contain **1 uppercase letter**
- ✅ Must contain **1 number**

### ⚡ Real-Time Username Check

- Username availability checked using **AJAX**
- Triggered on **input blur**
- Shows:
  - 🟢 Available
  - 🔴 Already taken

---

# 💬 Live Chat System

- Messages sent using **AJAX POST**
- No page reload when sending
- Messages refresh every **500ms**
- Messages sorted **oldest → newest**
- Shows sender name and message
- Message input clears automatically after sending

---

# 🎨 UI Design

Modern **dark-themed interface**.

### 🎨 Colors

| Element | Color |
|---------|--------|
| Background | `#0D0D0F` |
| Surface | `#161618` |
| Accent | `#C8F135` |

### ✨ UI Effects

- Animated grid background
- Floating glow blob
- Slide-up login form animation
- Message bubble pop animation
- Pulsing live status indicator
- Glowing send button hover effect

### 🔤 Fonts

- **Syne** → Headings
- **DM Sans** → Body

---

# 📂 Project Structure

```text
ki-obosta/
│
├── index.php
├── registration.php
├── chat.php
│
├── chatinglogic.php
├── user.php
├── confige.php
│
├── style.css
├── chat.css
│
├── script.js
├── chat.js
│
└── README.md
```

---

# 🗄️ Database Setup

Create a database named:

```sql
chat-aplication
```

### Users Table

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    username VARCHAR(50),
    password VARCHAR(255)
);
```

### Messages Table

```sql
CREATE TABLE msg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT,
    sender_name VARCHAR(100),
    msg TEXT
);
```

---

# ⚡ Installation

## 1️⃣ Install Server

Install:

- XAMPP
- OR any PHP + MySQL environment

---

## 2️⃣ Copy Project

Move the project to:

```text
htdocs/ki-obosta/
```

---

## 3️⃣ Start Server

Start the following services from the XAMPP Control Panel:

- ✅ Apache
- ✅ MySQL

---

## 4️⃣ Create Database

Open:

```text
http://localhost/phpmyadmin
```

Create the database and tables.

---

## 5️⃣ Configure Database

Edit:

```text
confige.php
```

Example:

```php
$conn = mysqli_connect("localhost","root","","chat-aplication");
```

---

## 6️⃣ Run Project

Open:

```text
http://localhost/ki-obosta/
```

---

# 🔒 Security Improvements (Recommended)

Before deploying publicly:

- Use `password_hash()` for password storage
- Use `password_verify()` for login
- Switch to prepared statements
- Add CSRF protection
- Create `logout.php`
- Use **WebSockets** instead of AJAX polling for scalability

---

# 📌 Future Improvements

- 💬 Private chat
- ⌨️ Typing indicator
- 🖼️ Image sharing
- ❤️ Message reactions
- ⚡ WebSocket real-time chat
- 🟢 Online user list

---

# 👨‍💻 Author

**Al Rafi**

💻 Web Developer  

---

# ⭐ Support

If you like this project:

- ⭐ Star this repository
- 🍴 Fork it
- 🚀 Contribute improvements

---

# 📜 License

This project is licensed under the **MIT License**.
