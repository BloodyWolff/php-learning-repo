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
    $arr = [1, 2, 3, 4, 5];
    array_splice($arr, 1, 0, ['a', 'b']);
    array_splice($arr, 6, 0, ['c']);
    array_splice($arr, 8, 0, ['e']);
    var_dump($arr);
?>
</body>
</html>