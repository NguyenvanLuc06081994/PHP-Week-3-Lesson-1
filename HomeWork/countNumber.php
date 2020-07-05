<?php
function countNumber(array $numbers, $number)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($number == $numbers[$i]) {
            $count++ ;
        }
    }
    return $count;
}

$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[$i] = rand(0, 100);
    echo $numbers[$i] . " ";
}

echo "<br>";
echo "<br>";
echo countNumber($numbers, 20);