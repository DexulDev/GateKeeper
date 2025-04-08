# Laravel Simple Login

## Introduction
This is a simple login project built with Laravel. The frontend was adapted from FreeFrontend because I prefer focusing on backend development rather than frontend. It provides basic user authentication features.

---

## Requirements

Ensure you have the following installed on your system:
- PHP
- Composer

---

## Setup Instructions

### 1. Clone the Repository
```bash
git clone <repository-url>
cd <repository-folder>
```

### 2. Install Dependencies
Run the following command to install all Laravel dependencies:
```bash
composer install
```

### 3. Create the `.env` File
Create a `.env` file in the root directory by copying the example file:
```bash
cp .env.example .env
```

### 4. Configure the `.env` File
Open the `.env` file in a text editor and configure the database settings. For example:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 5. Run Migrations
Set up the database tables by running migrations:
```bash
php artisan migrate
```

### 6. Serve the Application
Start the Laravel development server:
```bash
php artisan serve
```

The application will be accessible at `http://127.0.0.1:8000`.

---

## Additional Notes

### Frontend Adaptation
The frontend for this login application was adapted from FreeFrontend. As a backend developer, I prefer not to spend time on frontend design. If you'd like to enhance or customize the frontend, feel free to modify the views located in the `resources/views` directory.

- If you need to reset the database, run:
  ```bash
  php artisan migrate:refresh
  ```
