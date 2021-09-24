<?php

    require('./database.php');

    if(isset($_GET['signup'])) {

        $username = $_GET['username'];
        $password = $_GET['password'];

        $queryCreate = "INSERT INTO USERS VALUES (null, '$username', '$password')";
        $sqlCreate = mysqli_query($connection, $queryCreate);

        echo "<script src='./alert.js'></script>";
        
    }



?>