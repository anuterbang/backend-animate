# Animate Skincare Backend API

REST API untuk technical test backend.

Dibuat menggunakan:

- Laravel
- JWT Authentication (tymon/jwt-auth)
- MySQL

---

## 🚀 Features

- User Registration (email unique validation)
- User Login (JWT Token)
- Get Product List (Hardcoded 5 products)
- Proper HTTP Status Code
- Password Hashing

---

## 📦 Installation

### 1️⃣ Clone Repository

```bash
git clone https://github.com/anuterbang/backend-test.git
```

### 2️⃣ Install Dependencies

```bash
composer install
```

### 3️⃣ Setup Environment

Copy file .env:

```bash
cp .env.example .env
```

Edit database configuration di file `.env`:

```
DB_DATABASE=animate_api
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Generate App Key

```bash
php artisan key:generate
```

### 5️⃣ Generate JWT Secret

```bash
php artisan jwt:secret
```

### 6️⃣ Run Migration

```bash
php artisan migrate
```

### 7️⃣ Run Server

```bash
php artisan serve
```

Server akan berjalan di:

```
http://localhost:8000
```

---

## 📌 API Endpoints

---

### 🔹 Register

**POST** `/api/register`

Body (JSON):

```json
{
  "name": "Test User",
  "email": "test@mail.com",
  "password": "123456"
}
```

Response:

```json
{
  "message": "Register success"
}
```

---

### 🔹 Login

**POST** `/api/login`

Body (JSON):

```json
{
  "email": "test@mail.com",
  "password": "123456"
}
```

Response:

```json
{
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
  "type": "bearer"
}
```

---

### 🔹 Get Products

**GET** `/api/products`

Response:

```json
[
  {
    "id": 1,
    "name": "Facial Wash",
    "price": 50000
  },
  {
    "id": 2,
    "name": "Serum Vitamin C",
    "price": 120000
  },
  {
    "id": 3,
    "name": "Moisturizer",
    "price": 80000
  },
  {
    "id": 4,
    "name": "Sunscreen",
    "price": 90000
  },
  {
    "id": 5,
    "name": "Night Cream",
    "price": 150000
  }
]
```

---

## 🛠 Tech Stack

- PHP 8+
- Laravel
- MySQL
- JWT (tymon/jwt-auth)

---

## 📬 Notes

- Password di-hash menggunakan bcrypt
- Email divalidasi unique
- Produk masih hardcoded (sesuai requirement test)
- JWT digunakan untuk authentication login

---

## 👨‍💻 Author

Backend Technical Test Submission  
Animate Skincare