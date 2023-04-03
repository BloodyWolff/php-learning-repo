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
    $arr = [[1, 2], [3, 4], [5, 6]];
    $sum = 0;
    $lenght = count($arr);
    $lenght2 = count($arr[0]);
    for ($i=0; $i < $lenght; $i++) { 
         for ($j=0; $j < $lenght2; $j++) {
            $sum += $arr[$i][$j];
        }
    }
    print($sum);
?>
</body>
</html>