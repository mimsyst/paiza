<?php
    $damage = 0;
    for($i = 0; $i < 5; $i++){
        $a = trim(fgets(STDIN));
        if($a == "Attack"){
            $damage += 100;
        }
    }
    echo $damage . "\n";
?>
