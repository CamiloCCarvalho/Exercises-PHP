<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $plus = 0;
    $minus = 0;
    $equal = 0;
    
    for($i=0; $i < count($arr); $i++):
        if($arr[$i] > 0){
            $plus++;
        }elseif($arr[$i] < 0){
            $minus++;
        }else {
            $equal++;
        }
    endfor;
    
    $a = number_format($plus / count($arr), 6);
    $b = number_format($minus / count($arr), 6);
    $c = number_format($equal / count($arr), 6);
    
    echo ($a);
    echo ("\n");
    echo $b;
    echo ("\n");
    echo $c;
}
// ____Ignore the code below, it is necessary to run in site hackerRank____

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);