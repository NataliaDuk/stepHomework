<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer</title>
    <style>
        body {
            text-align: center;
            background-image: url(back.jpg);
            background-size: 100%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
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
    fclose($fp);
    ?>

    <h1>Voting results</h1>
    <img src="PHP.jpg">
    <span>VOTE: <?php echo $data[0] ?>.</span>
    <img src="JAVA.jpg">
    <span>VOTE: <?php echo $data[1] ?>.</span>
    <br>
    <img src="C++.jpg">
    <span>VOTE: <?php echo $data[2] ?>.</span>
    <img src="PYTHON.jpg">
    <span>VOTE: <?php echo $data[2] ?>.</span>

</body>

</html>