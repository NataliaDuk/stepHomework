<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача о зёрнах на шахматной доске</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div>

<h1>Задача о зёрнах на шахматной доске:</h1>

<span>математическая задача, в которой вычисляется, сколько будет зёрен на шахматной доске,</span><br>
<span>если класть на каждую следующую клетку доски вдвое больше зёрен, чем на предыдущую, начиная с одного.</span><br>

<form class="question" action="result.php" method="POST">
    <h2>Создайте свою шахматную доску:</h2>
    <span>Количество ячеек по ширине:</span>
    <input type="number" value="1" min="1" max="999" name="q1">
    <br>
    <span>Количество ячеек по высоте:</span>
    <input type="number" value="1" min="1" max="999" name="q2">
    <br>
    <h2>Выберите вес зерна:</h2>
    <span>Вес(г):</span>
    <input type="number" value="1" min="1" max="999" name="q3">
    <br><br>
    <input type="submit" value="выполнить">
</form>

<footer>
    &copy; Zhizhnevskiy Yuriy 2021
</footer>
</div>
</body>
</html>