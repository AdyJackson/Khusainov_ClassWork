<?php

echo "введите число:";
$n = (int)trim(fgets(STDIN));
$allNumber = array(); // array - переменная типа "массив"

while ($n !=0) {
    $allNumber[] = $n; // [] - означает что мы создадим новый элемент
    echo "введите число:";
    $n = (int)trim(fgets(STDIN));
}

for ($i = 0; $i < count($allNumber); $i++) { // делаем сортировку по возрастанию
    for ($j = 0; $j < count($allNumber) - $i -1; $j++) {
        if ($allNumber[$j] > $allNumber [$j + 1]) {
            $a = $allNumber[$j];
            $allNumber[$j] = $allNumber [$j + 1];
            $allNumber[$j + 1] = $a;
        }
    }
}
foreach ($allNumber as $number) {
    echo $number . "\n"; // это нужно дописать посмотрев у Виктора в репозитории
}
/* 6 8 8 9 7  - это сортировка пузырьком
 * 6 8 8 9 7
 * 6 8 8 7 9
 * 6 8 7 8 9
 * 6 7 8 8 9
 */
