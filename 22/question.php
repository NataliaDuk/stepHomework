<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

    $data = file("file.txt");

    $answer = $_POST["answer"];

    $data[$answer] = ($data[$answer] + 1) . "\n";

    $saveData = $data[0] . $data[1] . $data[2] . $data[3];

    $fp = fopen("file.txt", "w+");
    fwrite($fp, $saveData);
    echo max($data[0], $data[1], $data[2], $data[3]);

    fclose($fp);
    ?>

    <h1>Voting results</h1>
    <img src="PHP.jpg">
    <?php echo  $data[0] ?>
    <img src="JAVA.jpg">
    <?php echo  $data[1] ?>
    <br>
    <img src="C++.jpg">
    <?php echo  $data[2] ?>
    <img src="PYTHON.jpg">
    <?php echo  $data[3] ?>
    <br>
    <?php

    echo max($data[0], $data[1], $data[2], $data[3]);
    print_r($data);
    ?>
</body>

</html>