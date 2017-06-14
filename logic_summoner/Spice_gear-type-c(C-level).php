<?php
    $n = trim(fgets(STDIN));
    for($i = 0; $i < $n; $i++){
        $log[] = explode(" ",trim(fgets(STDIN)));
        $out[$log[$i][0]] = ""; 
    }

    for($i = 0; $i < $n; $i++){
        $out[$log[$i][0]] .= $log[$i][1]; 
    }

    foreach($out as $no => $str){
        echo $no . " " . $str . "\n";
    }
?>
