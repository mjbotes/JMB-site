<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
<<<<<<< HEAD
define('DB_PASSWORD
', '12345678');define('DB_NAME', 'users');

=======
define('DB_PASSWORD', 'Ocvm53ujido');
define('DB_NAME', 'users');
 
>>>>>>> a81d3864f3b05d1abf20f1203c3ed5f8fc33cd08
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }