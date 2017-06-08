<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $mn = explode(" ", trim(fgets(STDIN)));
    for($i = 0; $i < $mn[0]; $i++) {
        $s[] = trim(fgets(STDIN));
    }
    for($i = 0; $i < $mn[1]; $i++) {
        $p[] = trim(fgets(STDIN));
    }
    //先に箱のサイズを計算する
    for($i = 0; $i < $mn[1]; $i++){
        for($j = 0; $j < $mn[1]; $j++){
            $box_size[] = $p[$i] * $p[$j];
        }
    }
    //重複削除
    $box_size = array_unique($box_size, SORT_NUMERIC);
    //昇順に並び替え
    asort($box_size);

    foreach($s as $s_val){
        $min = 1000000;
        foreach($box_size as $size){
            if($s_val == $size){
                $min = 0;
                break;
            }elseif($s_val < $size){
                $min = $size - $s_val;
                break;
            }
        }
        echo $min . "\n";
    }
?>
