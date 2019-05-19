<?php

echo "введите число:";
$n = (int)trim(fgets(STDIN));
$allNumber = array(); // array - переменная типа "массив"

while ($n !=0) {
    $allNumber[] = $n; // [] - означает что мы создадим новый элемент
    echo "введите число:";
    $n = (int)trim(fgets(STDIN));
}

foreach ($allNumber as $number) { // форич для каждого элемента оллнамбер
    echo "$number\n";
}

