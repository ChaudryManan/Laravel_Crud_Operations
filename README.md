VIDEO URL: https://drive.google.com/file/d/17dYDcbHYRJAljmVld-6utZDuxLnCObEx/view?usp=sharing
# 🏥 Laravel Patient CRUD Application

A simple and clean **CRUD (Create, Read, Update, Delete)** web application built with Laravel.
This project allows users to manage patient records with an easy-to-use interface.

---

## 🚀 Features

* ➕ Add new patients
* 📋 View all patients
* ✏️ Edit existing patient details
* ❌ Delete patients
* 🔄 Reusable form for Add & Edit
* 🎨 Clean UI using Bootstrap

---

## 🛠️ Technologies Used

* PHP (Laravel Framework)
* MySQL Database
* Blade Templating Engine
* Bootstrap 5

---

## 📂 Project Structure (Important Files)

* `routes/web.php` → Defines application routes
* `app/Http/Controllers/PatientController.php` → Handles logic
* `app/Models/Patient.php` → Database model
* `resources/views/patients/` → UI (Blade templates)
* `database/migrations/` → Table structure

---

## ⚙️ Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/ChaudryManan/Laravel_Crud_Operations.git
cd Laravel_Crud_Operations
```

---

### 2. Install dependencies

```bash
composer install
```

---

### 3. Setup environment file

```bash
cp .env.example .env
```

Update `.env` with your database details:

```env
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

---

### 4. Generate application key

```bash
php artisan key:generate
```

---

### 5. Run migrations

```bash
php artisan migrate
```

---

### 6. Start the server

```bash
php artisan serve
```

Open in browser:

```
http://127.0.0.1:8000/patients
```

---

## 🧠 How It Works

1. Routes are defined in `web.php`
2. Requests go to `PatientController`
3. Controller interacts with `Patient` model
4. Data is stored/retrieved from MySQL
5. Views display data using Blade templates

---

## 🔄 CRUD Flow

* **Create** → Add patient using form
* **Read** → View patient list
* **Update** → Edit patient using same form
* **Delete** → Remove patient from list

---

## 📸 Screenshots (Optional)

*Add screenshots here if you want (UI pages)*

---

## 📌 Future Improvements

* ✅ Form validation
* 🔍 Search functionality
* 📄 Pagination
* 🎨 Admin dashboard UI

---

## 👨‍💻 Author

**Abdul Manan**
GitHub: https://github.com/ChaudryManan

---

## ⭐ Support

If you like this project, give it a ⭐ on GitHub!
