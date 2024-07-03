
<?php
// Define the three numbers
$num1 = 4;
$num2 = 5;
$num3 = 6;

// Assume $num1 is the largest
$largest = $num1;

// Compare $largest with $num2
if ($num2 > $largest) {
    $largest = $num2;
}

// Compare $largest with $num3
if ($num3 > $largest) {
    $largest = $num3;
}

// Output the largest number
echo "The largest number is: $largest";
