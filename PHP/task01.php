<?php
/* TASK 1. Write a PHP script to calculate the area and perimeter of a Rectangle, 
and display the result. 
Hints: The area of a Rectangle = length × width, perimeter = 2 × (length + width) 
*/
$length = 20;
$width = 10;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of Rectangle = $area <br>";
echo "Perimeter of Rectangle = $perimeter <br>";
?>