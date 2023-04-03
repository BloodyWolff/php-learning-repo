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
    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    sort($arr);
    var_dump($arr);
    print('<br>');
    rsort($arr);
    var_dump($arr);
    print('<br>');
    asort($arr);
    var_dump($arr);
    print('<br>');
    arsort($arr);
    var_dump($arr)
?>
</body>
</html>