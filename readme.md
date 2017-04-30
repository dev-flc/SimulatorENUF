# Project Simulator Enuf Chilpancingo

This project is practically aimed at helping students by taking tests and providing simulated tests of their end exam, as well as obtaining the results of each of them.

## Install

1.- Install composer
```
cd /directory/project
Composer install
```
2.- Create database
```
mysql -u root -p
password: ?
create database simulator? 
use database simulator
```
3.- Create .env
```
vim .env

APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead <- Name database "Simulator"
DB_USERNAME=homestead <- User MySql
DB_PASSWORD=secret    <- Password user MySql

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_KEY=
PUSHER_SECRET=
```
4.- Key Generate project
```
php artisan key:generate
```
5.- Migrate models->database
```
php artisan migrate
```
6.- Create user admin
```
php artisan tinker

$user->name="admin";
$user->foto="foto.png";
$user->email="admin@gmail.com";
$user->password=bcrypt("123");
$user->type="administrador";
$user->save();
```
7.- Compile project
```
php artisan serv

127.0.0.1:800
```

## Screenshot

Developing

![alt text](https://cdn2.tnwcdn.com/wp-content/blogs.dir/1/files/2015/10/designer-developer-1200x616.jpg)

## Collaborators
##### Elizabeth Gonzalez Javier
* Instituto tecnologico de chilpancingo
##### Fernando Lucena Calixto
* Instituto tecnologico de chilpancingo
