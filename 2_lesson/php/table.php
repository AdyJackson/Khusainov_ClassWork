<?php

echo "введите число:"; // (от 0 до 100): ";
$usersNumber = (int)trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++)  // либо $i++ вместо $i = $i + 1
{
    echo "$usersNumber * $i = " . $usersNumber * $i . "\n"; // точка это конкатинация
}
