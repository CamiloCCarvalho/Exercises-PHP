<?php

/*
 * Complete the 'divisibleSumPairs' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER k
 *  3. INTEGER_ARRAY ar
 */

// Ignore the code above, it used to run at site HackerRank

function divisibleSumPairs($n, $k, $ar) {
    
    $res = 0;
    for($i =0; $i<count($ar); $i++):
        for($j =$i+1; $j<count($ar); $j++):
            if(($ar[$i]+$ar[$j])% $k == 0){
                $res++;
            }
        endfor;
    endfor;
    return $res;

}

// Ignore the code below, it used to run at site HackerRank

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisibleSumPairs($n, $k, $ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
