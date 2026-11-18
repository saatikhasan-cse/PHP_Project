<?php

$num1 = 25;
$num2 = 50;
$num3 = 35;

if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1 is the largest number";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "$num2 is the largest number";
} else {
    echo "$num3 is the largest number";
}

?>