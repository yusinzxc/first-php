<?php 

    $correctUsername = 'Jimuel';
    $correctPassword = 'password';

        if(isset($_POST['login'])){

        $username = $_POST['username']; 
        $password = $_POST['password'];

        if($username == $correctUsername and $password == $correctPassword){
            echo "<p style='color:green;'>Welcome, $username</p>";

        }else {
            echo "<p style='color:red;'>Wrong password , please try again.</p>";
        }

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

    <form action="/myfirst-php/forms/forms.php" method="post">

        <input type="text" name="username" placeholder="Enter your username">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" name="login" value="Insert">

    </form>

</body>
</html>