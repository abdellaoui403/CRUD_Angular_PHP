<?php

// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','Clients');
// Establish database connection.
function connect(){
    $connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno($connect)){
        die("Failed to connect :".mysqli_connect_err());
    }

    mysqli_set_charset($connect,'UTF8');
     return $connect;
}

$con= connect();
?>