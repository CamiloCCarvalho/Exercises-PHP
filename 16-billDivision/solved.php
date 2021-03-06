<?php

/*
 * Complete the 'bonAppetit' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY bill
 *  2. INTEGER k
 *  3. INTEGER b
 */
//Ignore the code above, it's used to run at site hackerrank
function bonAppetit($bill, $k, $b) {
    array_splice($bill, $k, 1);
    $sum = 0;
    for($i = 0; $i < count($bill); $i++):
        $sum += $bill[$i];
    endfor;
    $result = $b - ($sum/2);
    if($result != 0){
        echo $result;  
    }else{
        echo 'Bon Appetit';
    };
}
//Ignore the code below, it's used to run at site hackerrank

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);
