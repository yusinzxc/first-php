<?php 

    $counter = 0;
    $condition = true;
    while($condition){
        echo "<h1>Counter: $counter</h1>";
        $counter+=1;
        if ($counter > 5){
            break;
        }
    }

?>