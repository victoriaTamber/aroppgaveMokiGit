<?php
    $server = "localhost";
    $user = "root";
    $pw = "Admin";
    $db = "arsoppgaveMoki";
    
    $conn = mysqli_connect($server, $user, $pw, $db);

    if(!$conn) {
        echo "Connection failed!";
        die();        
    }

