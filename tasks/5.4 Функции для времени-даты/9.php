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
    $arr = ['sn', 'mn', 'tu', 'wd', 'th', 'fr', 'st'];
    print($arr[date('w', time())] . '<br>');
    print($arr[date('w', mktime(0, 0, 0, 6, 6, 2006))] . '<br>');
    print($arr[date('w', mktime(0, 0, 0, 3, 30, 2004))]);
?>
</body>
</html>