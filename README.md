## installation

use the following commands to install the project:

````
git clone https://bassel_a_abbour@bitbucket.org/bassel_a_abbour/brief_task1.git
cd brief_task1
composer install
````

then create .env file inside the root folder of the project and copy the content of .env.example and past it into the .env file then create empty database and after that edit the following lines inside the .env to match your dtatbase configuration:

````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=brief
DB_USERNAME=root
DB_PASSWORD=
````

then issue the following command from inside the project folder:

````
php artisan migrate:fresh
php artisan serve
````

after that you can visit the web application using URI :
http://127.0.0.1:80000

***


## Admin account 

This web application comes with a pre-configured admin account with the following details:

**Email:** admin@test.com


**Password:** pass123456789




