# Laravel API
This project consist in a simple back-end API for use the CRUD operations in simple client in the technology Angular 5.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

To install the project you will need to have  [Composer](https://getcomposer.org/) and MySQL. [Composer](https://getcomposer.org/) is a tool for dependency management in PHP. For the case of MySQL you can use [XAMPP](https://www.apachefriends.org/es/index.html) or [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)


### Clone Laravel API 
Clone the Laravel API repository using git:
```
git clone https://github.com/BrayanArrieta/laravel-api.git
cd laravel-api
```
### Dependencies
For get the dependencies of the project.
```
composer update
composer install
```
### Installing
Follow these steps to configure the database of the application. First of all you need to create a database with the name "homestead"
```
php artisan migrate
php artisan artisan db:seed
```
* Finally, you can run the application with the command **php artisan serve**


## Built With
* [Laravel](https://laravel.com/docs/5.6) - The web framework used
* [MySQL](https://dev.mysql.com/doc/) - Database engine
* [XAMPP](https://www.apachefriends.org/es/index.html)



## Authors

* **Brayan Arrieta**

See also the list of [contributors](https://github.com/BrayanArrieta/laravel-api-jwt-auth/contributors) who participated in this project.

## License
This project is licensed under the ISC License