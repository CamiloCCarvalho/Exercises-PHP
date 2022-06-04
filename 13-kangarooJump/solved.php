<?php

/*
 * Complete the 'kangaroo' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER x1
 *  2. INTEGER v1
 *  3. INTEGER x2
 *  4. INTEGER v2
 */

function kangaroo($x1, $v1, $x2, $v2) {
    
    $pk1 = $x1 + $v1;
    $pk2 = $x2 + $v2;
    $firstGap = null;
    $secondGap = null;
    
    if($pk1 > $pk2){
        $firstGap = $pk1-$pk2;
        $secondGap = ($pk1 += $v1) - ($pk2 += $v2);
    }else{
        $firstGap = $pk2-$pk1;
        $secondGap = ($pk2 += $v2) - ($pk1 += $v1);
    }
    
    if($secondGap >= $firstGap){
        return "NO";
    }else{
        $t = $secondGap - $firstGap;
        if($secondGap%$t == 0){
            return "YES";
        }else{
            return "NO";
        }
    }
}

// Ignore the code below, it's used to run at HackerHank site

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$x1 = intval($first_multiple_input[0]);

$v1 = intval($first_multiple_input[1]);

$x2 = intval($first_multiple_input[2]);

$v2 = intval($first_multiple_input[3]);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . "\n");

fclose($fptr);