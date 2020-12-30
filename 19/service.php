<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
</head>
<body>
    <?php

    echo "Ваш отредактированный текст:<br>";

    $answer =  $_POST["q1"];
    $i = 0;
    $result = "";
    
    $numbers = [
        0 => "ноль ",
        1 => "один ",
        2 => "два ",
        3 => "три ",
        4 => "четыре ",
        5 => "пять ",
        6 => "шесть ",
        7 => "семь ",
        8 => "восемь ",
        9 => "девять "
    ];

    while ($i < strlen($answer)){
        if (is_numeric($answer[$i]) === false){
            $result .= $answer[$i];
        } else {
            $result .= $numbers[$answer[$i]];
        }
        $i++;
    }
    
    echo "<br>" . $result;

    ?>
</body>
</html>