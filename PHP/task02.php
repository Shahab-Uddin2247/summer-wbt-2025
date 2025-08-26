<?php
/* 2. Write a PHP script to calculate the
 VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount
*/

$amount = 10000;
$vat = 0.15 * $amount;
$total = $amount + $vat;

echo "Amount = $amount <br>";
echo "VAT  = $vat <br>";
echo "Total Amount = $total <br>";
?>
