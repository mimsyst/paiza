<?php
    $s1 = explode(" ", trim(fgets(STDIN)));
    $s2 = explode(" ", trim(fgets(STDIN)));
    
    if(($s1[0] / $s1[1]) < ($s2[0] / $s2[1])){
        echo $s2[1]."\n";
    }else{
        echo $s1[1]."\n";
    }
?>
