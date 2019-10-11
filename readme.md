# PRELUDIO

## Requisitos

* PHP >= 7.2.0
* Composer
* Yarn
* NodeJS
* mySQL, PostgreSQL, SQLite, o SQL Server

## Instalación Ambiente Desarrollo

1. Instalar dependencias composer, si composer está instalado globalmente `composer install`
    1. Si no se encuentra global copie el archivo composer.phar o [descarguelo](https://getcomposer.org/download/)
`php composer.phar install`
1. Instalar dependencias de npm `npm install`. Si no tiene npm instalado,[descargue e instale NodeJS](https://nodejs.org/es/download/)
1. Copiar archivo `.env.example` y crear archivo `.env` ajustarlo al ambiente local de su maquina.
1. Generar llave `php artisan key:generate`
1. Instalar [Voyager](https://voyager-docs.devdojo.com) `php artisan voyager:install`
1. Instalar dependecias Yarn `yarn install`
1. Copiar assets `yarn run dev`
1. Acceder via `php artisan serve` o accediendo a directorio `/public` 

## Instalación Ambiente Producción

>Dios proveerá

## About Laravel

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

### License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
