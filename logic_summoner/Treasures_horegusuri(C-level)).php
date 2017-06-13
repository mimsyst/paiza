<?php
    $s = trim(fgets(STDIN));
    $c = trim(fgets(STDIN));
    
    $nmab = explode(" ", $s);
    $c_arr = explode(" ", $c);
    $t = $nmab[1];
    
    foreach($c_arr as $c_i){
        $t += $c_i;
        // damaged only.
        if($c_i < 0){
            if($t <= $nmab[2]){
                $t += $nmab[3];
            }
        }
    }
    echo $t;
?>
