<?php
//6. Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY

$arr = array(10, 20, 30, 40, 50);
$search = 10;
$found = false;

for($i=0; $i<count($arr); $i++){
    if($arr[$i] == $search){
        echo "Element is found .";
        $found = true;
        break;
    }
}

if(!$found){
    echo "Element is  not found .";
}
?>
