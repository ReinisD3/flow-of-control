<?php



$num1 = readline ("Input the 1st number: ").PHP_EOL;

$num2 = readline ("Input the 2nd number: ").PHP_EOL;

$num3 = readline ("Input the 3rd number: ").PHP_EOL;

$numbers = [$num1,$num2,$num3];
$largest = max($numbers);

echo 'Largest number is '.$largest.PHP_EOL;
