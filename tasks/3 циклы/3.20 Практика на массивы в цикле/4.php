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
    $arr = ['a' => 6, 'b' => 7, 'c' => 8, 'd' => 9, 'e' => 10];
    $key = []; 
    $Znach = []; 

    foreach ($arr as $i => $elem) {
        $Key[] = $i;
        $Znach[] = $elem;
    }
    var_dump($Znach);
    print('<br>');
    var_dump($Key);
?>
</body>
</html>