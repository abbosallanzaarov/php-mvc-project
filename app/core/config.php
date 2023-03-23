<?php
if($_SERVER['SERVER_NAME'] == 'my-project-mvc'){
    // database config
    define('DBNAME' , 'mvc');
    define('DBHOST' , 'localhost');
    define('DBUSER' , 'root');
    define('DBPASS' , '');

    define('ROOT' , '/my-project-mvc/public/');
}else {
     // database config
    define('DBNAME' , 'mvc');
    define('DBHOST' , 'localhost');
    define('DBUSER' , 'root');
    define('DBPASS' , '');
    define('ROOT' , 'https://youwebsite.uz/public/');
}
define('APP_NAME' , 'MY Website');
define('APP_desc' , 'mening web saytim');
define('DEBAG', true);
