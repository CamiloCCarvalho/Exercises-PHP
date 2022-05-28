<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {

    $l = $n-1;
    for($i=0; $i<$n; $i++):
        for($j=0; $j<$n; $j++):
            if($l-$i <= $j){
                echo("#");
            }else{
                echo(" ");
            }
            if($j == $l){
                echo("\n");
            }
        endfor;
    endfor;

}

$n = intval(trim(fgets(STDIN)));

staircase($n);