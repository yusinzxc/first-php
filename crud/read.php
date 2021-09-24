<?php

    require('./database.php');

    $querySelect = "SELECT * FROM USERS";
    $sqlSelect = mysqli_query($connection, $querySelect);


?>