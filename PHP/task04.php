<?php
//4. Write a PHP script to find the largest number from three given numbers Hints: use IF-ELSE

$num1 = 10;
$num2 = 20;
$num3 = 30;

if($num1 >= $num2 && $num1 >= $num3){
    echo "$num1 is the largest number ";
} elseif($num2 >= $num1 && $num2 >= $num3){
    echo "$num2 is the largest number ";
} else {
    echo "$num3 is the largest number ";
}
?>
