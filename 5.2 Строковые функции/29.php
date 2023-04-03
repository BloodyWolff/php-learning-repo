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
    $date = '2015-12-31';
    $arr = explode('-', $date);
    print($arr[2] . '.' . $arr[1] . '.' . $arr[0]);
?>
</body>
</html>