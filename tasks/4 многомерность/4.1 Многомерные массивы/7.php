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
    $arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];
    $sum = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[3][0][0] + $arr[0][3][1] + $arr[0][3][2][0] + $arr[0][3][2][1] + $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
    print($sum);
?>
</body>
</html>