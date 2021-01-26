<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    include "config.php";

    $data = file($fileName);

    if (isset($_POST['answer'])) {
        $currentAnswer = $_POST['answer'];
        $buff = explode($separate, $data[$currentAnswer + 1]);
        $buff[1] += 1;
        $buff[1] .= "\n";
        $data[$currentAnswer + 1] = $buff[0] . $separate . $buff[1];
        file_put_contents($fileName, implode("", $data));
    }
    $question = $data[0];
    unset($data[0]);

    $answers = [];
    foreach ($data as $value) {
        $answers[] = explode($separate, $value);
    }

    ?>

    <h2><?= $question ?></h2>
    <br>
    <div class="block">
        <form action="?" method="POST">
            <?php
            foreach ($answers as $value) {
                $percent100 += $value[1];
            }

            $percent1 = $percent100 / 100;

            foreach ($answers as $key => $value) {
                $count = $value[1];
                $width = round(($count / $percent1), 2);
                echo "<input type='radio' value='$key' name = 'answer'> <b>$value[0]</b> (voted: $count = $width%)
                <div class='persent' style='width: {$width}em;'></div><br>";
            }
            ?>
            <br>
            <input type="submit" value="vote">
        </form>
    </div>
</body>

</html>