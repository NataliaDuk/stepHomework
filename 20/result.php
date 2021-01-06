<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача о зёрнах на шахматной доске</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$answer1 =  $_POST["q1"];
$answer2 =  $_POST["q2"];
$answer3 =  $_POST["q3"];

$countChess = $answer1 * $answer2;




?>

<div>

<h1>Задача о зёрнах на шахматной доске:</h1>
<h3>Размер Вашей доски:
    <?php echo "$answer1 х $answer2";
?>
</h3>
<h3>Количество Ваших зёрен:   шт.</h3>
<h3>Вес Ваших зёрен:  т.</h3>
<h2>Созданная Вами доска:</h2>

<footer>
    &copy; Zhizhnevskiy Yuriy 2021
</footer>
</div>

</body>
</html>