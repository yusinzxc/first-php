<?php 
    require('./read.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <div class="main">
       <form action="/myfirst-php/crud/create.php" method="get" class="form">
           <h1>Create user</h1>
           <input type="text" name="username" id="" placeholder="Enter your username" class="username">
           <input type="password" name="password" id="" placeholder="Enter your password">
           <input type="submit" value="Create" name='signup'>
       </form>
   </div> 
   <div class="main2">
       <table>
           <tr>
               <th>id</th>
               <th>username</th>
               <th>password</th>
           </tr>

          <?php while($records = mysqli_fetch_array($sqlSelect)) {?>

           <tr>
               <td><?php echo $records['id'] ?>. </td>
               <td><?php echo $records['username'] ?> </td>
               <td><?php echo $records['password'] ?> </td>
           </tr>

           <?php }?>

       </table>
   </div>
</body>
</html>