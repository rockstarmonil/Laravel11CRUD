# Laravel 11 CRUD Application

A simple CRUD (Create, Read, Update, Delete) application built with Laravel 11.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This project is a basic CRUD application implemented in Laravel 11. It demonstrates how to perform common database operations such as creating, reading, updating, and deleting records.

## Features

- Laravel 11 framework
- CRUD operations
- User-friendly interface
- RESTful API
- Validation and error handling

## Installation

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL or any other database

### Steps

1. **Clone the repository**:
    ```sh
    git clone git@github.com:rockstarmonil/Laravel11CRUD.git
    cd Laravel11CRUD
    ```

2. **Install dependencies**:
    ```sh
    composer install
    ```

3. **Copy the `.env.example` file to `.env`**:
    ```sh
    cp .env.example .env
    ```

4. **Generate an application key**:
    ```sh
    php artisan key:generate
    ```

5. **Configure your database in the `.env` file**:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

6. **Run the database migrations**:
    ```sh
    php artisan migrate
    ```

7. **Serve the application**:
    ```sh
    php artisan serve
    ```

8. **Access the application**:
    Open your web browser and go to `http://localhost:8000`.

## Usage

- **Create**: Add new records to the database.
- **Read**: View existing records.
- **Update**: Edit and update existing records.
- **Delete**: Remove records from the database.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch: `git checkout -b feature-name`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature-name`.
5. Submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
