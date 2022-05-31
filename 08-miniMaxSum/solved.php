<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    
    $min=0;
    $max=0;
    sort($arr);
        for($i=1; $i<count($arr); $i++):
            $max += $arr[$i];
        endfor;
        for($j=0; $j <count($arr)-1; $j++):
            $min += $arr[$j];
        endfor;
        echo ($min ." " .$max);
        
}
// ____Ignore the code below, it is necessary to run in site hackerRank____

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);