<?php
    $s = trim(fgets(STDIN));
    $cnt = 0;
    $out = array();
    $before = "b";
    foreach(str_split($s) as $bw){
        if($bw == $before){
            $cnt++;
        }else{
            array_push($out, $cnt);
            $cnt = 1;
        }
        $before = $bw;
    }
    array_push($out, $cnt);

    echo implode(" ", $out) ."\n";
?>
