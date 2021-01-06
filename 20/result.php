<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача о зёрнах на шахматной доске</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<h1>Задача о зёрнах на шахматной доске</h1>
<h2>Созданная Вами доска</h2>

<table>
<?php
$answer1 =  $_POST["q1"];
$answer2 =  $_POST["q2"];
$answer3 =  $_POST["q3"];

function countCorn($a, $b){
    $countChess = $a * $b;
    $result = 1;
    $sum = 0;
    $i = 1;
    while ($i<=$countChess){
        $sum += $result;
        $result *= 2;
        $i++;
    }
    return $sum;
}

$countCorn = countCorn($answer1, $answer2);

$weightCorn = ($countCorn * $answer3) / 1000000;

$table = '';
$width  = $answer1;
$height = $answer2;
for ($i = 1; $i <= $width ; $i++) { 
    $table .= '<tr>';
    for ($j = 1; $j <= $height ; $j++) { 
        $color = ($i + $j) % 2 ? 'white' : 'black';
        $table .= "<td bgcolor='{$color}' width='20' height='20'></td>"; 
    }
    $table .= '</tr>';
}
echo $table;

?>
</table>

<h3>Размер Вашей доски: <?php echo "$answer1 х $answer2";?></h3>
<h3>Количество Ваших зёрен: <?php echo $countCorn;?>шт.</h3>
<h3>Вес Ваших зёрен: <?php echo $weightCorn;?>т.</h3><br>

<footer>
    &copy; Zhizhnevskiy Yuriy 2021
</footer>

</body>
</html>