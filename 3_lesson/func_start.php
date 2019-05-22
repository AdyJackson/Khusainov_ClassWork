<?php

$allNumber = array(23, 45, 2, 56, 84, 2355, 34);
$allNumber2 = array(2442, 355, 232,75, 354,3);

sortToTop($allNumber). ", ";
sortToTop($allNumber2) ;
function sortToTop($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            if ($arr[$j] > $arr [$j + 1]) {
                $a = $arr[$j];
                $arr[$j] = $arr [$j + 1];
                $arr[$j + 1] = $a;
            }
        }
    }

foreach ($arr as $number )