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
	$arr = [1, -9, 20, 70, -328, 8];
    foreach ($arr as $key) {
        if($key > 0) {
            print($key . '<br>');
        }
    }
?>
</body>
</html>