<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <textarea name="number" cols="50" rows="10"></textarea>
    <input type="submit" value="Modifier">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$number = $_POST['number'];
$numbers = explode(",", $number);
$viettel = [];
$mobi = [];
$vina = [];
for ($i = 0; $i < count($numbers); $i++) {
    $numbers[$i] = str_split($numbers[$i]);
}
for ($i = 0; $i < count($numbers); $i++) {

    switch ($numbers[$i][2]) {
        case 5:
        case 6:
        case 7:
        case 8:
            array_push($viettel, $numbers[$i]);
            break;
        case 1:
        case 4:
        case 3:
            array_push($vina, $numbers[$i]);
            break;
        default :
            array_push($mobi, $numbers[$i]);
            break;
    }
}
    for ($i = 0; $i < count($viettel); $i++) {
        $viettel[$i] = implode('', $viettel[$i]);
    }

    for ($i = 0; $i < count($vina); $i++) {
        $vina[$i] = implode('', $vina[$i]);
    }

    for ($i = 0; $i < count($mobi); $i++) {
        $mobi[$i] = implode('', $mobi[$i]);
    }
    echo "nhung so cua nha mang viettel la :" . implode(", ", $viettel);
    echo "<br>";
    echo "nhung so cua nha mang vinaphone la :" . implode(", ", $vina);
    echo "<br>";
    echo "nhung so cua nha mang mobiphone la :" . implode(", ", $mobi);


}
?>
</body>
</html>

