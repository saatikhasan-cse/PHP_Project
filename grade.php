<?php
$marks = 85;

if ($marks >= 80) {
    echo "Grade: A+";
} elseif ($marks >= 70) {
    echo "Grade: A";
} elseif ($marks >= 60) {
    echo "Grade: A-";
} elseif ($marks >= 50) {
    echo "Grade: B";
} else {
    echo "Grade: F";
}
?>