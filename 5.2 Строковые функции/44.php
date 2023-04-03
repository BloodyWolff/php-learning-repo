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
    $str = '<i>html<i>, <b>php</b>, js';
    print_r(strip_tags($str, '<i><b>'));
?>
</body>
</html>