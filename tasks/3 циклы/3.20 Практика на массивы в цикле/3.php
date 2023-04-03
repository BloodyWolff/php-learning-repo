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
    $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
    $Sum = 0; 
    $znach = 0; 

    foreach ($arr as $i => $elem) {
        $Sum += $i;
        $znach += $elem;
    }
    print($Sum / $znach);
?>
</body>
</html>