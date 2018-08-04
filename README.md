# Now Loading Volunteer Management System App

This is our Pre-Semester Team Project Assignment. The project
implements an MVC architecture using the Laravel php framework.
The database used is MySQL.

# Setup Development Environment

To develop this project, we need to setup the PHP development environment.

# Windows
For Windows, download Wampserver. It has your full stack which is Apache, MySQL, and PHP, and including PHPMyAdmin, a graphical database manipulation application.
http://www.wampserver.com/en/

# Linux
For Linux, install a Lamp stack, which is Apache, MySQL, and PHP. Make sure you include PHPMyAdmin. These steps will work with Ubuntu 18.04
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04

# Mac
For Mac, install Mamp, It has your full stack which is Apache, MySQL, and PHP, and including PHPMyAdmin, a graphical database manipulation application.
https://www.mamp.info/en/

# Composer
Install Composer https://getcomposer.org/download/

After installing per the directions, run this command: 

    mv composer.phar /usr/local/bin/composer 

now you can type 'composer' to run on the command line.

# Install Laravel

make sure your PHP installation has these requirements:

* PHP >= 7.1.3 
* OpenSSL PHP Extension 
* PDO PHP Extension 
* Mbstring PHP Extension 
* Tokenizer PHP Extension 
* XML PHP Extension 
* Ctype PHP Extension 
* JSON PHP Extension

MAMP & Wampserver will take care of these requirements

type this command to create the laravel app, replace 'projectname' with the name of the application
    
    composer create-project --prefer-dist laravel/laravel projectname


# Entering your Database credentials
* Locate the .env.example file in your root and update 
  this section to match your database credentials:
    
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE= Your Database Name
        DB_USERNAME= Your Database User Name
        DB_PASSWORD= Your Database User's password
    

# Build the Database
* Build database by entering 

        php artisan migrate
    

# Seeding the Database
* Seed status table by entering:
        php artisan db:seed
   
* Seed Volunteer database tables and relations by entering:
    <code>php artisan db:seed --class=VolunteersTableSeeder </code>

# Where to find the Model, View, and Controller files
* Controllers are stored in app/Http/Controllers
* Models are stored in the app folder, ex. User.php
* Views are stored in the resources/views folder in a folder 
corresponding to the controller name

# Create User at Command Line

First add user authorization to the project by typing:

    php artisan make:auth
     

To create a standard user at the command line, type the following:

 
    php artisan tinker
    $user = new App\User;
    $user->name="Admin";
    $user->email="admin@localhost.com";
    $user->password=bcrypt('1234');
    $user->save();
 


# Create  Admin User

I have created a is_admin middleware class to verify a user is an admin. It is 
registered in the Kernel.php file under 'is_admin'. The admin route calls this 
middleware and verifies the user is an admin before the AdminController processes
the request.

To designate a registered user as an admin, type the following
at the command line:<br>
     
     php artisan tinker
     use App\User;
     User::where('email', 'admin@localhost.com')->update(['role' => 'admin']);

replace 'admin@localhost.com' with the email address of the registered
user to designate as the admin.


    

