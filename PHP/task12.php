<?php
echo "Prime numbers between 1 and 50 are:\n";

for ($number = 2; $number <= 50; $number++) {
    $isPrime = true; 

    for ($i = 2; $i < $number; $i++) { 
        if ($number % $i == 0) {
            $isPrime = false;
            break; 
        }
    }

    if ($isPrime) {
        echo $number . " ";
    }
}

echo "<br>";
?>
