<?php
    $n = trim(fgets(STDIN));
    $col_chk = 0;   //row or column
    for($i = 0; $i < $n; $i++){
        $m[$i] = explode(" ", trim(fgets(STDIN)));
        $cnt = 0;
        foreach($m[$i] as $row){
            if($row == 0){
                $cnt++;
            }
        }
        if($cnt == 2){
            $col_chk = 1;
        }
    }

    // calc sum
    foreach($m as $row){
        if(in_array(0, $row) == false){
            $sum = array_sum($row);
            break;
        }
    }

    if($col_chk == 0){
        // 0 is not appeared twice in the row 
        for($i = 0; $i < $n; $i++){
            for($j = 0; $j < $n; $j++){
                if($m[$i][$j] == 0){
                    $m[$i][$j] = $sum - array_sum($m[$i]);
                }
            }
        }
    }else{
        // 0 is appeared twice in the row 
        for($j = 0; $j < $n; $j++){
            $row_sum = 0;
            $flg = 0;
            for($i = 0; $i < $n; $i++){
                $row_sum += $m[$i][$j];
                if($m[$i][$j] == 0){
                    $cell["row"] = $i;
                    $cell["column"] = $j;
                    $flg = 1;
                    break;
                }
            }
            if($flg == 1){
                $m[$cell["row"]][$cell["column"]] = $sum - $row_sum;

            }
        }
    }
    
    foreach($m as $row){
        echo implode(" ", $row)."\n";
    }
?>
