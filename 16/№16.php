<?php
//Fibonacci numbers

$count1 = $_POST["count"];
$f10 = 0;
$f11 = 1;
echo "Цикл FOR:<br>";
echo $f10 . "<br>";
echo $f11 . "<br>";
for ($i1 = 0; $i1 <= $count1 - 3; $i1++) {
    $result1 = $f10 + $f11;
    echo $result1 . "<br>";
    $f10 = $f11;
    $f11 = $result1;
}

$count2 = $_POST["count"];
$f20 = 0;
$f21 = 1;
echo "<br>Цикл WHILE:<br>";
echo $f20 . "<br>";
echo $f21 . "<br>";
$i = 0;
while ($i2 <= $count2 - 3) {
    $result2 = $f20 + $f21;
    echo $result2 . "<br>";
    $f20 = $f21;
    $f21 = $result2;
    $i2++;
}

$count3 = $_POST["count"];
$f30 = 0;
$f31 = 1;
echo "<br>Цикл DO WHILE:<br>";
echo $f30 . "<br>";
echo $f31 . "<br>";
do {
    $result3 = $f30 + $f31;
    echo $result3 . "<br>";
    $f30 = $f31;
    $f31 = $result3;
    $i3++;
} while ($i3 <= $count3 - 3);
