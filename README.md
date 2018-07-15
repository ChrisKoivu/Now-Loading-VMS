# Now Loading Volunteer Management System App

This is our Pre-Semester Team Project Assignment. The project
implements an MVC architecture using the Laravel php framework.
The database used is MySQL.

# Setup Development Environment

To develop this project, we need to setup the PHP development environment.

# Windows
For Windows, download Wampserver. It has your full stack which is Apache, MySQL, and PHP, and including PHPMyAdmin, a graphical database manipulation application.
http://www.wampserver.com/en/

#Linux
For Linux, install a Lamp stack, which is Apache, MySQL, and PHP. Make sure you include PHPMyAdmin.
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
# composer create-project--prefer-dist laravel/laravel projectname

