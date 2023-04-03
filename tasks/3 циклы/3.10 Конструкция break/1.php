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
	$arr = [1, 4, 14, 33, 54, 93, 0, 32, 53];
    foreach($arr as $elem) {
    print($elem . '<br>');
        if($elem === 0) {
            break;
        }
    }
?>
</body>
</html>