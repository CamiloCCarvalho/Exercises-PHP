<?php

/*
 * Complete the 'breakingRecords' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY scores as parameter.
 */

//Igone the code above, it's used to run at site hackerrank
function breakingRecords($scores) {
    
    $min = null;
    $max = null;
    $ar = [0, 0];
    for($i =0; $i<count($scores); $i++):
        if($i == 0){
            $min = $scores[$i];
            $max = $scores[$i];
        }
        if($i > 0){
            if($scores[$i] < $min){
                $min = $scores[$i];
                $ar[1]++;
            }elseif($scores[$i] > $max){
                $max = $scores[$i];
                $ar[0]++;
            }
        }
    endfor;
    return $ar;

}
//Igone the code below, it's used to run at site hackerrank

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$scores_temp = rtrim(fgets(STDIN));

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
