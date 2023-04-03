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
    $arr = [4, 2, 5, 19, 13, 0, 10];
    $sum = 0;
    foreach($arr as $elem) {
        $sum += pow($elem, 2);
    }
    print(sqrt($sum));
?>
</body>
</html>