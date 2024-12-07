<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Tourism Project

## About the Project

The Tourism Project is a web application built using the Laravel framework. It is designed to provide information about various travel destinations, services, packages, and more. The project includes several features such as:

- **Home Page**: Overview of the website with featured destinations and services.
- **About Page**: Information about the company or organization.
- **Services Page**: Details about the services offered.
- **Packages Page**: Information about travel packages.
- **Destination Page**: Detailed information about various travel destinations.
- **Booking Page**: Allows users to book travel packages.
- **Travel Guides Page**: Information about travel guides.
- **Testimonial Page**: Customer testimonials.
- **Contact Page**: Contact form for users to get in touch.

## Installation

To get started with the Tourism Project, follow these steps:

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js and npm
- MySQL or any other supported database

### Steps

1. **Clone the repository**:
    ```sh
    git clone https://github.com/your-username/tourism-project.git
    cd tourism-project
    ```

2. **Install dependencies**:
    ```sh
    composer install
    npm install
    ```

3. **Copy the `.env.example` file to `.env`**:
    ```sh
    cp .env.example .env
    ```

4. **Generate an application key**:
    ```sh
    php artisan key:generate
    ```

5. **Configure your database**:
    Update the `.env` file with your database credentials:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=tourism_project
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. **Run database migrations**:
    ```sh
    php artisan migrate
    ```

7. **Seed the database (optional)**:
    ```sh
    php artisan db:seed
    ```

8. **Build the front-end assets**:
    ```sh
    npm run dev
    ```

9. **Start the development server**:
    ```sh
    php artisan serve
    ```

10. **Access the application**:
    Open your browser and go to `http://localhost:8000`.

## Contributing

Thank you for considering contributing to the Tourism Project! Please read the [contribution guide](https://laravel.com/docs/contributions) for details on how to contribute.

## License

The Tourism Project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).