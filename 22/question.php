<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer</title>
    <style>
        body{
           text-align: center;
        }
    </style>
</head>
<body>
    <h1>Voting results</h1>

<?php

$data = file("file.txt");

$answer = $_POST["answer"];

$data[$answer] = ($data[$answer] + 1)."\n";
print_r($data);

$saveData = $data[0] . $data[1] . $data[2] . $data[3];

$fp = fopen("file.txt", "w+");
fwrite($fp, $saveData);
fclose($fp);
?>

</body>
</html>