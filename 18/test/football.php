<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTBALL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];
$q9 = $_POST["q9"];
$q10 = $_POST["q10"];

$result = 0;

if ($q1 == 11){
    $result += 1;
}
if ($q2 == "вратарь"){
    $result += 1;
}
if ($q3 == "нападающий"){
    $result += 1;
}
if ($q4 == 19){
    $result += 1;
}
if ($q5 == 11){
    $result += 1;
}
if ($q6 == "нет"){
    $result += 1;
}
if ($q7 == "пакистан"){
    $result += 1;
}
if ($q8 == "пенсионеры"){
    $result += 1;
}
if ($q9 == "бык"){
    $result += 1;
}
if ($q10 == "1985" && $q10 =="1996"){
    $result += 1;
} 

if ($result >= 9) {
    echo "Поздравляем! Вы настоящий знаток футбола!<br>
    Спасибо, что прошли наш тест!";
} elseif ($result >= 5 && $result < 9){
    echo "Вы хорошо разбираетесь в футболе!<br>
    Спасибо, что прошли наш тест!";
} else {
    echo "Футбол - это не Ваше)<br>
    Спасибо, что прошли наш тест!";
}
?>
    </div>
<footer>
        &copy; Zhizhnevskiy Yuriy 2020
    </footer>
</body>

</html>