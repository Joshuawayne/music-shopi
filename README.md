# Music Shop · [Demo](https://muzio.herokuapp.com/) · [Code](https://github.com/ilicbojan/music-shop)

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>📝 Table of Contents</summary>
  <ul>
    <li><a href="#about">About The Project</a></li>
    <li><a href="#features">Features</a></li>
    <li><a href="#diagram">Class Diagram</a></li>
    <li><a href="#built">Built Using</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</details>

<!-- ABOUT THE PROJECT -->

## 🧐 About The Project <a name="about"></a>

![Demo Image](public/images/demo.png/?raw=true "Demo Image")

Web application for listing and selling musical instruments in Kenya . The goal of the web application is to allow users to search for musical instruments, see details, add them to the cart, and order them. Administrator adds new musical instruments and categories. Application has 2 different roles: administrator and user.

## ⭐️ Features <a name="features"></a>

-   Register & Login
-   Insert Musical Instruments
-   Search by Product Category
-   See Product Details
-   Add to Cart
-   Order Products

## 📈 Class Diagram <a name="diagram"></a>

![Demo Image](public/images/diagram.png/?raw=true "Demo Image")

## 🔨 Built Using <a name="#built"></a>

-   [PHP](https://www.php.net/)
-   [Laravel](https://laravel.com/)
-   [Eloquent](https://laravel.com/docs/8.x/eloquent)
-   [PostgreSQL](https://www.postgresql.org/)
-   [HTML](https://www.w3schools.com/html/)
-   [CSS](https://www.w3schools.com/css/default.asp)
-   [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
## Here's a step-by-step guide to run this web app (made it easier for begginers:
1. First, clone the project repository from GitHub.(but you can aslo dowload it as zip file)
  git clone https://github.com/Joshuawayne/music-shopi.git
 cd music-shopi

 2.INSTALL COMPOSER:

Download and install Composer from the official site.

Verify the installation with composer -v.(on cmd or whaterver terminal you'd prefer)

Navigate to Project Directory:

Use cd command to go to your Laravel project folder.(that will be in cd C:\xampp\htdocs\music-shopi)

Install Dependencies:

Run composer install to download and set up all necessary packages.
Copy the .env File:

3.Create a copy of the .env.example file and name it .env.

bash
cp .env.example .env
4.Generate Application Key:

Generate a new application key. This is used by Laravel to encrypt sensitive data.

bash
php artisan key:generate
5.Set Up the Database Configuration:

Open the .env file and set your database credentials.

plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
6.Create the Database:

Create a new database in MySQL with the name specified in your .env file.

7.Run Database Migrations:

Run the Laravel migrations to set up your database tables.

bash
php artisan migrate
Seed the Database (Optional):

Since we already have seeders, you can populate your database with the initial data.

bash
php artisan db:seed
Start the Development Server:

Start the Laravel development server.

bash
php artisan serve


<!-- CONTACT -->

## 📞 Contact <a name="contact"></a>

mercyjoshu0@gmail.com

Project Source Code: [https://github.com/ilicbojan/music-shop]
