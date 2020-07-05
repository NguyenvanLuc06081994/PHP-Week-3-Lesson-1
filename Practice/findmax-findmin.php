<?php
function findMax(array $numbers){
    $max = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        if ($max < $numbers[$i]){
            $max = $numbers[$i];
        }
    }
    return $max;
}
function findMin(array $numbers){
    $min = $numbers[0];
    for ($i = 0; $i < count($numbers); $i++) {
        if ($min > $numbers[$i]){
            $min = $numbers[$i];
        }
    }
    return $min;
}
function display(){
    $numbers = [];
    for ($i = 0; $i < 150; $i++) {
        $numbers[$i] = rand(0,150);
        echo $numbers[$i]." ";
    }
    echo "<br>";
    echo "the maximum number is ".findMax($numbers);
    echo "<br>";
    echo "the min number is ".findMin($numbers);
}
display();
