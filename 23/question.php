<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer</title>
    <style>
        body {
            text-align: center;
            background-image: url(img/back.jpg);
            background-size: 100%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php
    $answer = $_POST["answer"];

    $count = explode("|", file_get_contents("data.txt"));

    $count[$answer]++;

    file_put_contents("data.txt", implode("|", $count));

    $total = $count[0] + $count[1] + $count[2] + $count[3];

    $percent = $total / 100;

    $persentPHP = round(($count[0] / $percent), 1);
    $persentJAVA = round(($count[1] / $percent), 1);
    $persentPYTHON = round(($count[2] / $percent), 1);
    $persentC = round(($count[3] / $percent), 1);

    ?>

    <h1>Voting results</h1>

    <img src="img/PHP.jpg">
    <span>
        VOTE: <?php echo $count[0] ?>.
        Percent: <?php echo $persentPHP ?>%
    </span>

    <img src="img/JAVA.jpg">
    <span>
        VOTE: <?php echo $count[1] ?>.
        Percent: <?php echo $persentJAVA ?>%
    </span>

    <br>

    <img src="img/PYTHON.jpg">
    <span>
        VOTE: <?php echo $count[2] ?>.
        Percent: <?php echo $persentPYTHON ?>%
    </span>

    <img src="img/C++.jpg">
    <span>
        VOTE: <?php echo $count[3] ?>.
        Percent: <?php echo $persentC ?>%
    </span>
    <br><br>
    <h2>Total votes:
        <?echo $total?>
    </h2>
</body>

</html>