<?php

function solveMeFirst($a,$b){
  // possibility 01
    // $sum = $a + $b;

    //my better
    return $a + $b;
}
// ____Ignore the code below, it is necessary to run in site hackerRank____

$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
?>