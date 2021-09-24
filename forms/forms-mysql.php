<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'php-form';

    $database = mysqli_connect($host, $user, $password, $database);
    $query = 'SELECT * FROM USERS';
    $users = mysqli_query($database, $query);

    while($records = mysqli_fetch_array($users)){
        echo 'ID: '.$records['id'].'<br>';
        echo 'Username: '.$records['username'].'<br>';
        echo 'Password: '.$records['password'].'<br>';
        echo '======================================== <br>';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="/myfirst-php/forms/forms-mysql.php" method="GET">
        <input type="text" name="username" placeholder="Enter your username">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="signup">
    </form>

</body>
</html>