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
    $date = date_create('2023-04-03');
    date_modify($date, '- 100 day');
    print date_format($date, 'Y.m.d')
?>
</body>
</html>