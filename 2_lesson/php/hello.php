<?php

$hello = "hello world"; // Эта переменная типа "строка"
$a = 2; # Эта переменная типа "число"
$b = 2;
$c = $a + $b;
/*
Разбираемся с комментариями и переменными
первое - строка
сторое - целое число
*/

$half = 0.5; // переменная типа "дробное число"
$moreThan = $a > $half; // переменная типа "Boolean" (может быть либо true либо false) (в этом случае переменная содержит информацию true (правда))
echo "введите первое число:"; // (от 0 до 100): ";
$usersNumber = (int)trim(fgets(STDIN));
echo "введите второе число:"; // (от 0 до 100): ";
$usersNumber2 = (int)trim(fgets(STDIN));
/* echo "введите третье число:"; // (от 0 до 100): ";
$usersNumber3 = (int)trim(fgets(STDIN));
*/
/*
if ($usersNumber > 100 or $usersNumber < 0) {
    echo "число должно ыбть меньше 100 и больше 0";
    exit(); // -остановить выполнение программы если число не соответствует или die вместо exit
}
*/


// echo $usersNumber + $c;
echo  "введите оператор:";
$usersOperator = trim(fgets(STDIN));

if ($usersOperator == "+") {
    echo $usersNumber + $usersNumber2;
    die();
}

if ($usersOperator == "-") {
    echo $usersNumber - $usersNumber2;
    die();
}

if ($usersOperator == "*") {
    echo $usersNumber * $usersNumber2;
    die();
}

if ($usersOperator == "/") {
    echo $usersNumber / $usersNumber2;
    die();
}

