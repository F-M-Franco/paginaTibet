<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'alumno');
    define('DB_PASS', 'alumnoipm');
    define('DB_NAME', 'proyectotibetdb');
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($conn->connect_error){
        die('Connection Failed'.$conn->connect_error);
    }
?>