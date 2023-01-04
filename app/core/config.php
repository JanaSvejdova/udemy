<?php 

define('APP_NAME', 'Udemy App');
define('APP_DESC', 'Free and paid tutorials');



if($_SERVER['SERVER_NAME'] == 'localhost'){
    //database  config for local server 
    define('DBHOST', 'localhost');
    define('DBNAME', 'udemy_db');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');
    //root path 
    define('ROOT', 'http://localhost/udemy/public');


} else {
     //database  config for live server 
     define('DBHOST', 'localhost');
     define('DBNAME', 'udemy_db');
     define('DBUSER', 'root');
     define('DBPASS', '');
     define('DBDRIVER', 'mysql');

     //root path https://www.yourwebsite.com
     define('ROOT', 'http://');
 

}

