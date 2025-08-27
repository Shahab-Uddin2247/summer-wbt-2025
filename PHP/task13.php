<?php

echo " Pattern 1<br>";
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";


echo " Pattern 2<br>";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";

echo " Pattern 3<br>";
for ($i = 0; $i < 4; $i++) {
    $char = chr(65 + $i); // ASCII 65 = A
    for ($j = 0; $j <= $i; $j++) {
        echo $char . " ";
    }
    echo "<br>";
}
?>
