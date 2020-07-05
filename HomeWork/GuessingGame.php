<?php


function binaryGuess(array $numbers, int $number, int $low, int $high)
{
    if ($low > $high) {
        return false;
    }
    $mid = (int)(($high + $low) / 2);
    if ($number > $numbers[$mid]) {
        echo "Answer : too low";
        echo "<br>";
        return binaryGuess($numbers, $number, $mid + 1, $high);
    } elseif ($number < $numbers[$mid]) {
        echo "Answer: too high";
        echo "<br>";
        return binaryGuess($numbers, $number, $low, $mid - 1);
    } else {
        return true;
    }
}


$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[$i] = $i;
}
sort($numbers);
binaryGuess($numbers,83,0,count($numbers)-1);
//var_dump(binaryGuess($numbers,83,0,count($numbers)-1));



