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
    $arr = [
        [
            [1, 2],
            [3, 4],
        ],
        [
            [5, 6],
            [7, 8],
        ],
    ];
    $sum = 0;
    $lenght1 = count($arr);
    $lenght2 = count($arr[0]);
    $lenght3 = count($arr[0][0]);
    for($i = 0; $i < $lenght1; $i++) {
        for($j = 0; $j < $lenght2; $j++) {
            for($l = 0; $l < $lenght3; $l++) {
                $sum += $arr[$i][$j][$l];
            }
        }
    }
    print($sum);
?>
</body>
</html>