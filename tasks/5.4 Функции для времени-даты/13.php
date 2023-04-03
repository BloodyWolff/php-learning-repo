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
    $date = date_create('2025-12-31');
    date_modify($date, '2 day');
    print(date_format($date, 'd.m.Y') . '<br>');
    $date = date_create('2025-12-31');
    date_modify($date, '1 month 3 day');
    print(date_format($date, 'd.m.Y') . '<br>');
    $date = date_create('2025-12-31');
    date_modify($date, '1 year');
    print(date_format($date, 'd.m.Y') . '<br>');
    $date = date_create('2025-12-31');
    date_modify($date, '-3 day');
    print(date_format($date, 'd.m.Y') . '<br>');
?>
</body>
</html>