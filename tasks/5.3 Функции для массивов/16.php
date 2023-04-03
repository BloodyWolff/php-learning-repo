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
    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $result = array_keys($arr);
    var_dump($result);
    $result2 = array_values($arr);
    var_dump($result2)
?>
</body>
</html>