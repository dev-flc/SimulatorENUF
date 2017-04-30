# Project Simulator Enuf Chilpancingo

This project is practically aimed at helping students by taking tests and providing simulated tests of their end exam, as well as obtaining the results of each of them.

## Directory Project
```
$ tree -L 1 -a

├── app
├── artisan
├── bootstrap
├── composer.json        ---> file configuration Plugins, Tools
├── composer.lock
├── config
├── database
├── .editorconfig        ---> file configuration UTF8 
├── .env                 ---> file configuration.
├── .env.example
├── getStatusCode())
├── .git
├── .gitattributes
├── .gitignore
├── gulpfile.js
├── package.json
├── phpunit.xml
├── public
├── RamaPrincipal.txt
├── readme.md
├── resources
├── routes
├── server.php
├── storage
├── tests
└── vendor

11 directories, 15 files
```

## Install

1.- Install composer
```
$ cd /directory/project
$ Composer install
```
2.- Create database
```
$ mysql -u root -p
password: ?
mysql-> create database simulator? 
mysql-> use database simulator
```
3.- Create .env
```
$ vim .env

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
$ php artisan key:generate
```
5.- Migrate models->database
```
$ php artisan migrate
                                                                        
Migrated: 2014_10_12_000000_create_users_table
Migrated: 2014_10_12_100000_create_password_resets_table
Migrated: 2017_03_06_234248_create_direccions_table
Migrated: 2017_03_06_234259_create_profesors_table
Migrated: 2017_03_06_234310_create_cursos_table
Migrated: 2017_03_06_234320_create_unidads_table
Migrated: 2017_03_06_234330_create_tipos_table
Migrated: 2017_03_06_234356_create_preguntas_table
Migrated: 2017_03_06_234407_create_respuestas_table
Migrated: 2017_03_06_234436_create_alumnos_table
Migrated: 2017_03_16_201043_create_cur_alus_table
Migrated: 2017_03_16_214534_create_examens_table
Migration table created successfully.
```
6.- Create user admin
```
$ php artisan tinker

$user->name="admin";
$user->foto="foto.png";
$user->email="admin@gmail.com";
$user->password=bcrypt("123");
$user->type="administrador";
$user->save();
```
7.- Compile project
```
$ php artisan serv

127.0.0.1:800 -> Url
```

## Screenshot

Developing

![alt text](https://cdn2.tnwcdn.com/wp-content/blogs.dir/1/files/2015/10/designer-developer-1200x616.jpg)

## Collaborators
##### Elizabeth Gonzalez Javier
* Instituto tecnologico de chilpancingo
##### Fernando Lucena Calixto
* Instituto tecnologico de chilpancingo
