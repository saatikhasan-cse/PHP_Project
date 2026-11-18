<?php
$number = 5;

echo "<h2>Multiplication Table of $number</h2>";

for ($i = 1; $i <= 10; $i++) {
    echo "$number x $i = " . ($number * $i) . "<br>";
}
?>