<?php
    $n = trim(fgets(STDIN));
    $s = trim(fgets(STDIN));
    $out = array();
    $cnt = 1;
    foreach(str_split($s) as $lr){
        if($lr == "L"){
            array_unshift($out, $cnt);
        }else{
            array_push($out, $cnt);
        }
        $cnt++;
    }
    echo implode(" ", $out) . "\n";
?>
