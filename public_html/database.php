<?php

 $servername = "localhost";
    $username = "u705197944_sophia";
    $password = "@Sophia1231";
    $dbname = "u705197944_restaurant";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    ?>