# PHP MVC Framework

This is a simple PHP MVC (Model-View-Controller) framework that you can use as a foundation for building web
applications in PHP.

## Features

- MVC architecture for separation of concerns.
- Routing system for handling URL requests.
- Basic database support using PDO (PHP Data Objects).
- Form handling and validation.
- Simple plugin system for extending functionality.

## Getting Started

1. Clone the repository:

```bash
git clone https://github.com/iseeyoucopy/php-mvc-framework.git htdocs
```

Configure your web server to point to the public directory as the document root.

Install dependencies using Composer:

```bash
cd php-mvc
composer install
```

Rename .env.example to .env
Set up your database credentials in the .env file.

Access your application using the URL provided by your web server.

Run composer dump-autoload whenever you add new classes or namespaces.

Contributing
Contributions are welcome! If you find any bugs or have ideas for improvements, please submit an issue or pull request.