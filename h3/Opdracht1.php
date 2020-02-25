<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kerstboom</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<?php

for ($i = 1; $i < 50; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo ("*");
    }
    echo("<br>");
}
?>

<a href="../index.php">Hoofd Pagina</a>
</body>
</html>