<?php
//function binarySearch(array $numbers, int $needle): bool
//{
//    $low = 0;
//    $high = count($numbers) - 1;
//    while ($low <= $high) {
//        $mid = (int)(($low + $high) / 2);
//
//        if ($numbers[$mid] > $needle) {
//            $high = $mid - 1;
//        } elseif ($numbers[$mid] < $needle) {
//            $low = $mid + 1;
//        } else {
//            return true;
//        }
//    }
//    return false;
//}
//$numbers = range(1,200,7);
//var_dump(binarySearch($numbers,15));
function binarySearch(array $numbers, int $needle, int $low, int $high): bool
{
    if ($high < $low) {
        return false;
    }
    $mid = (int)(($high + $low) / 2);
    if ($numbers[$mid] > $needle) {
        return binarySearch($numbers, $needle, $low, $mid - 1);
    } elseif ($numbers[$mid] < $needle) {
        return binarySearch($numbers, $needle, $mid + 1,$high );
    } else {
        return true;
    }
}

$numbers = range(0,200,5);
$needle = rand(0,200);
var_dump(binarySearch($numbers,$needle,0,count($numbers)-1));

function display($numbers,$needle){
    if (binarySearch($numbers,$needle,0,count($numbers)-1)){
        echo "$needle is found";
    }else{
        echo "$needle is not found";
    }
}
echo "<br>";
display($numbers,$needle);