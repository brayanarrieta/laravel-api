# Laravel API JWT-Auth

The project's goal is showing how you can integrate JWT-Auth in a Laravel API for the back-end that can be used for example for a client develop with the technology called Angular 5. This project show how you can create a secure project. **You can test the token with the request POST localhost:8000/api/auth/login?email=ryanchenkie@gmail.com&password=secret**

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

To install the project you will need to have  [Composer](https://getcomposer.org/) and MySQL. [Composer](https://getcomposer.org/) is a tool for dependency management in PHP. For the case of MySQL you can use [XAMPP](https://www.apachefriends.org/es/index.html) or [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)


### Clone Laravel API JWT-Auth
Clone the Laravel API JWT-Auth repository using git:
```
git clone https://github.com/BrayanArrieta/laravel-api-jwt-auth.git
cd laravel-api-jwt-auth
```
### Dependencies
For get the dependencies of the project.
```
composer update
composer install
```
### Installing
Follow these steps to configure the database of the application. First of all you need to create a database with the name "jwt-auth"
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