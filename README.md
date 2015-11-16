Manejo de Sesiones en PHP
_______________________________

###Requirements:

Install lamp, WAMP , MAMP

### Instructions

Open terminal and enter the following

    mysql -u"user" -p"password"

Create database
  
    create database register;

Create table

    create table user(email varchar(30),password varchar(30),password2 varchar(30), omega varchar(10),sap varchar(10),oracle varchar(10));

Install Project
_______________________________

  cd /var/www/html && sudo rm index.html;
  
  git clone https://github.com/marcko/sesionesphp.git

or 

Download zip
  sudo rm /var/www/html/index.html
  cd sesionesphp; sudo mv * /var/www/html
 

open http://localhost in the browser

Enjoy! 
