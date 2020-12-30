<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сalculator</title>
</head>
<body>
    <?php

$answer1 =  $_POST["q1"];
$answer2 =  $_POST["q2"];
$answer3 =  $_POST["q3"];

$numbers = [
    "ноль" => 0,
    "один" => 1,
    "два" => 2,
    "три" => 3,
    "четыре" => 4,
    "пять" => 5,
    "шесть" => 6,
    "семь" => 7,
    "восемь" => 8,
    "девять" => 9,
    "десять" => 10
];

echo "Ваш результат = ";

if ($answer1 == "" || $answer2 == "" || $answer3 == ""){
    echo '"необходимо ввести все данные."';
}

if ($answer3 == "+"){
    echo $numbers[$answer1] + $numbers[$answer2];
}

if ($answer3 == "-"){
    echo $numbers[$answer1] - $numbers[$answer2];
}

if ($answer3 == "*"){
    echo $numbers[$answer1] * $numbers[$answer2];
    }
    
if ($answer3 == "/"){
    echo $numbers[$answer1] / $numbers[$answer2];
}

?>
</body>
</html>