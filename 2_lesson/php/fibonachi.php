<?php

echo "введите количество выполнений:";
$usersNumber = (int)trim(fgets(STDIN));

if ($usersNumber < 2) {
    echo "число должно быть больше 2";
    die();
}

$first = 1;
$second = 1; // всегда единица
echo  $first . "\n";
echo  $second . "\n";


for ($i = 2; $i < $usersNumber; $i++) { // вывести количество выполнений
    $currentNumber = $first + $second;
    $second = $first;
    $first = $currentNumber;
   // echo $currentNumber . "\n";
}

echo $first . "\n";

// 1 1 (два первых значения) 2 3 5 8 13... - числа фибоначчи