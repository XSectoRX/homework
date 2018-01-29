<?php
$rand = 100;
$input = rand(0,$rand);
$first = 1;
$second = 1;

echo "Число - " . $input . "<br>";

more($input, $first, $second );


function more($input, $first, $second){
    while(true) {
        if ($first > $input) {
            echo "Задуманное число НЕ входит в числовой ряд";
            break;
        } elseif ($input == $first) {
            echo "Задуманное число входит в числовой ряд";
            break;
        } else {
            $third = $first;
            $first = $first + $second;
            $second = $third;
        }
    }
}