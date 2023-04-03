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
    $url = 'http://kartoshka.com';
    if (substr($url, 0, 7) == 'http://') {
        print('все верно');
    } else {
        print("ne verno");
    }
?>
</body>
</html>