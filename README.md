# Library Book Registry

This project is a simple registry of books in a library, implemented using PHP and the [Laravel/Yii2](https://laravel.com/docs) PHP framework.

## Overview

The library registry includes three main entities: books, authors, and genres. Each author can have multiple books, and each book can belong to multiple genres. Books are categorized into three types: graphic edition, digital edition, and printed edition. The application logs all actions on book data for auditing purposes.

## Features

- User authentication and authorization.
- CRUD operations for authors, books, and genres in the administrative panel.
- REST API for data retrieval and manipulation in JSON format.
- Search, filter, and sort functionalities in the book list.

## Entities

- **Book**: Represents a book with title, author, genres, and type (graphic, digital, printed).
- **Author**: Represents an author with a list of books.
- **Genre**: Represents a genre with a list of books.

## Installation

1. Clone the repository:
```bash
git clone https://github.com/ramin123/library-book-registry.git
```
2. Navigate to the project directory:
```bash
cd library-book-registry
```
3. Install dependencies:
```bash
composer install
```
4. Set up the database and configure the `.env` file.
5. Run migrations and seed the database:
```bash
php artisan migrate
php artisan db:seed
```
6. Start the development server:
```bash
php artisan serve
```

## Usage

### Administrative Panel

- Access the administrative panel using the appropriate credentials.
- Perform CRUD operations on authors, books, and genres.
- View lists of books, authors, and genres with search, filter, and sort options.

### REST API Endpoints

- **User Authorization Request**: `POST /api/login`
- **List of Books**: `GET /api/books` (with pagination)
- **Book Data by ID**: `GET /api/books/{id}`
- **Update Book Data**: `PUT /api/books/{id}` (requires authorization)
- **Delete Book**: `DELETE /api/books/{id}` (requires authorization)
- **List of Authors**: `GET /api/authors` (with pagination)
- **Author Data with Books**: `GET /api/authors/{id}`
- **Update Author Data**: `PUT /api/authors/{id}` (requires authorization)
- **List of Genres with Books**: `GET /api/genres` (with pagination)

## Contributing

Contributions are welcome! Please open an issue or a pull request to discuss any changes or additions.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- Special thanks to the Laravel/Yii2 community for their documentation and support.

---
