<?php
function binaryToDecimalConverter($num)
{
    $num = $num;
    $dec_value = 0;
    $base = 1;

    $temp = $num;
    while ($temp) {
        $last_digit = $temp % 10;
        $temp = $temp / 10;

        $dec_value += $last_digit
            * $base;
        $base = $base * 2;
    }
    return $dec_value;
}

$num = 1010;
echo binaryToDecimalConverter($num), "\n";



