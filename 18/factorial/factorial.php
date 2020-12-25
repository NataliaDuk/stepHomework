<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    
<?php
$count = $_POST["count"];

$result1 = 1;
for ($i1 = $count; $i1 > 1; $i1 -= 1){
    $result1 *= $i1;
}
echo "Факториал числа {$count} равен {$result1},<br>
Расчёт выполнен классическим синтаксисом цикла FOR.<br>";
echo "<br>";

$result2 = 1;
for ($i2 = $count; $i2 > 1; $i2 -= 1):
    $result2 *= $i2;
endfor;
echo "Факториал числа {$count} равен {$result2},<br>
Расчёт выполнен альтернативным синтаксисом цикла FOR.<br>";
echo "<br>";

$i3 = $count;
$result3 = 1;
while ($i3 > 1) {
    $result3 *= $i3;
    $i3 -= 1;
}
echo "Факториал числа {$count} равен {$result3},<br>
    Расчёт выполнен классическим синтаксисом цикла WHILE.<br>";
echo "<br>";

$i4 = $count;
$result4 = 1;
while ($i4 > 1) :
    $result4 *= $i4;
    $i4 -= 1;
endwhile;
echo "Факториал числа {$count} равен {$result4},<br>
    Расчёт выполнен альтернативным синтаксисом цикла WHILE.<br>";
echo "<br>";

$i5 = $count;
$result5 = 1;
do{
    $result5 *= $i5;
    $i5 -= 1;
}
while ($i5 > 1);
echo "Факториал числа {$count} равен {$result5},<br>
    Расчёт выполнен классическим синтаксисом цикла DO WHILE.<br>";
echo "<br>";
?>
</body>
</html>
