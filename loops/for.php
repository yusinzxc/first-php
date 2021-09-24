<?php 

    //Example of for loop
    for($i = 0; $i <= 10; $i++){
        echo "Counter: $i <br>";
    }

    $playerNumber = ['001', '002', '003'];
    $length = count($playerNumber);

    for($i = 0; $i < $length; $i++){
        echo "Player Number: $playerNumber[$i] <br>";
    }
    
    
?>