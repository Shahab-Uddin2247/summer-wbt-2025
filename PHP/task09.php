<?php
$var1 = 5;
$var2 = 10;
echo "Before swap: var1 = $var1, var2 = $var2";
echo "<br>";
$var1 = $var1 + $var2;
$var2 = $var1 - $var2;
$var1 = $var1 - $var2;

echo "After swap: var1 = $var1, var2 = $var2";
?>
