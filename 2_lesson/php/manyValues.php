<?php

echo "введите количество чисел:";
$n = (int)trim(fgets(STDIN));
$sum = 0;

for ($i = 0; $i < $n; $i++) {
    echo "введите число:";
    $number = (int)trim(fgets(STDIN));
    $sum = $sum + $number;

}

echo $sum;
