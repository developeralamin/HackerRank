<?php

/*
 * Complete the simpleArraySum function below.
 */
function simpleArraySum($ar) {
    /*
     * Write your code here.
     */
     $total = 0;
    foreach ($ar as $array) {
        $total += $array;
    }
    return $total;
    
}
$sumArray = array(1,2,3,4,10,11);

/** Calling function **/
$myAnswer = simpleArraySum($sumArray);

/** Your result **/
echo $myAnswer; //279 result






$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
