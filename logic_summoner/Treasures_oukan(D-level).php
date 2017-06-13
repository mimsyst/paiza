<?php
    $damage = trim(fgets(STDIN));
    $t = trim(fgets(STDIN));

    $sum = array_sum(str_split($damage));
    $r = $t - $sum;
    if($r <= 0){
        echo "No\n";
    }else{
        echo $r."\n";
    }
?>
