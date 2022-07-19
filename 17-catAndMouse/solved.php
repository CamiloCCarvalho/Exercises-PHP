<?php

// Complete the catAndMouse function below.
function catAndMouse($x, $y, $z) {
    $catAtoMouse = abs($z - $x);
    $catBtoMouse = abs($z - $y);
    if($catAtoMouse === $catBtoMouse){
        return "Mouse C";
    }elseif($catAtoMouse > $catBtoMouse){
        return "Cat B";
    }else {
        return "Cat A";
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);

    $y = intval($xyz[1]);

    $z = intval($xyz[2]);

    $result = catAndMouse($x, $y, $z);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
