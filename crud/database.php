<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'crud';

    $connection = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo "Error: Unable to connect to MYSQL <br>A";
        echo 'Message: '.mysqli_connect_error().'<br>';
    }else {
        echo "Successfully Connected!";
    }
?>