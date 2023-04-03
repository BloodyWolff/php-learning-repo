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
    $keys = range('a', 'z');
    $values = range(1, 26);
    $arr = array_combine($keys, $values);
    var_dump($arr)
?>
</body>
</html>