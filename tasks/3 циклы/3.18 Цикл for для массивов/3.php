<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    $lenght = count($arr);

    for ($i = 4; $i < $lenght; $i++) { 
        print($arr[$i]);
    }
?>
</body>
</html>