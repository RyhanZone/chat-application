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

* **PHP** → Backend logic
* **MySQL** → Database storage
* **Vanilla JavaScript** → AJAX & DOM manipulation
* **HTML5 & CSS3** → UI structure and styling

---

# 🖼️ Preview

> (Add screenshots here after uploading to GitHub)

```
assets/login-preview.png
assets/chat-preview.png
```

Example:

```
![Login Page](assets/login-preview.png)
![Chat UI](assets/chat-preview.png)
```

---

# ✨ Features

## 🔐 User Authentication

* Login using **email and password**
* Session-based authentication
* Unauthorized users cannot access chat
* Automatic redirect if already logged in

---

## 📝 Registration System

* First & last name validation
* Email sanitized using `FILTER_SANITIZE_EMAIL`
* Password rules:

✔ Minimum **6 characters**
✔ Must contain **1 uppercase letter**
✔ Must contain **1 number**

### ⚡ Real-Time Username Check

* Username availability checked using **AJAX**
* Triggered on **input blur**
* Shows:

  * 🟢 Available
  * 🔴 Already taken

---

# 💬 Live Chat System

* Messages sent using **AJAX POST**
* No page reload when sending
* Messages refresh every **500ms**
* Messages sorted **oldest → newest**
* Shows:

✔ Sender name
✔ Message text

Message input automatically clears after sending.

---

# 🎨 UI Design

Modern **dark themed interface**.

### 🎨 Colors

| Element    | Color     |
| ---------- | --------- |
| Background | `#0D0D0F` |
| Surface    | `#161618` |
| Accent     | `#C8F135` |

### ✨ UI Effects

* Animated grid background
* Floating glow blob
* Slide-up login form animation
* Message bubble pop animation
* Pulsing live status indicator
* Glowing send button hover effect

### 🔤 Fonts

* **Syne** → Headings
* **DM Sans** → Body text

---

# 📂 Project Structure

```
ki-obosta/
│
├── index.php
├── registration.php
├── chat.php
│
├── chatinglogic.php
├── user.php
├── confige.php
├── style.css
├── chat.css
├── script.js
├── chat.js
│
└── README.md
```

---

# 🗄️ Database Setup

Create a database:

```
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

### 1️⃣ Install Server

Install:

* XAMPP
  or
* Any PHP + MySQL environment

---

### 2️⃣ Copy Project

Move project into:

```
htdocs/ki-obosta/
```

---

### 3️⃣ Start Server

Start:

✔ Apache
✔ MySQL

from **XAMPP Control Panel**

---

### 4️⃣ Create Database

Open:

```
http://localhost/phpmyadmin
```

Create database and tables.

---

### 5️⃣ Configure Database

Edit:

```
confige.php
```

Example:

```php
$conn = mysqli_connect("localhost","root","","chat-aplication");
```

---

### 6️⃣ Run Project

Open browser:

```
http://localhost/ki-obosta/
```

---

# 🔒 Security Improvements (Recommended)

Before deploying publicly:

* Use `password_hash()` for password storage
* Use `password_verify()` for login
* Switch to **prepared statements**
* Add **CSRF protection**
* Create **logout.php**
* Use **WebSockets instead of AJAX polling** for large-scale apps

---

# 📌 Future Improvements

* Private chat system
* Typing indicator
* Image sharing
* Message reactions
* WebSocket real-time chat
* Online user list

---

# 👨‍💻 Author

**Al Rafi**

* 💻 Web Developer
* 🎥 Tech Content Creator

---

# ⭐ Support

If you like this project:

⭐ Star the repository
🍴 Fork the project
🚀 Contribute improvements

---

# 📜 License

This project is licensed under the **MIT License**.
