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
    $arr = range('a', 'z');
    shuffle($arr);
    var_dump(implode(array_slice($arr, 0, 6)));
?>
</body>
</html>