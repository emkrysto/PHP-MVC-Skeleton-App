# PHP-MVC-Skeleton-App
PHP application skeleton that uses MVC architectural pattern

## MVC Model-View-Controller
  Architectural pattern used to organize the structure of applications.

  Divides the application into three main parts:

    [M] Model - represent of app logic
    [V] View -represent the user interface
    [C] Controller - the logic that controls the application

## How to run in Xampp
  
    Using a web browser navigate to 
        http://localhost/phpmyadmin
    Create database 
        CREATE DATABASE "auth2';
    Create table in "auth2"
        CREATE TABLE admin (
          ID int NOT NULL,
          username varchar(255) NOT NULL,
          roles varchar(255),
          PRIMARY KEY (ID)
        );
    Insert a new record in the "admin"
        INSERT INTO admin (username, roles) VALUES ("admin", '{"0": "ROLE_USER"}');
    Clone repository 
        git clone https://github.com/emkrysto/PHP-MVC-Skeleton-App.git
        into
        C:\xampp\htdocs
    Using a web browser navigate to
        http://localhost/PHP-MVC-Skeleton-App/user/info
        or
        http://localhost/PHP-MVC-Skeleton-App/user/login
    
