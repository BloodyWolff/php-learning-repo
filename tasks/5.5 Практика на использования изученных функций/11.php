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
    $arr = '1234567890';
    $sum = 0;
    for ($i = 0; $i < strlen($arr); $i++) {
        $sum += $arr[$i];
    };
    print("Число: {$arr}\n");
    print("Сумма: {$sum}");
?>
</body>
</html>