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
    $str = 'http://efefef.efefe.ty';
    if (strpos($str, 'http://') === 0) {
        echo "да";
    } else {
        echo "нет";
    };
?>
</body>
</html>