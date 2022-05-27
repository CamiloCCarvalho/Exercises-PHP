<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    $x = 0;
    $y = 0;
    $l = count($arr)-1;
    for($i=0; $i<count($arr); $i++):
        for($j=0; $j<count($arr); $j++):
        if($i == $j){
            $x += $arr[$i][$j];   
        }
        if($l - $j == $i){
            $y += $arr[$i][$j];
        }
        endfor;
    endfor;

        return abs($x - $y);
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);