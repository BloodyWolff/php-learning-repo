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
    $str ='qwertyu qwertyu';
    $exitStr = (strlen($str) > 5) ? substr($str, 0, 5).'...' : $str;
    echo $exitStr;
?>
</body>
</html>