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
	$arr = [100, 73, 43, 2, 4, -1, 5, 32, 61];
    $i = 0;
	foreach ($arr as $elem) {
        if ($elem < 0) {
            break;
		}
        $i += $elem;
	}
    print($i);
?>
</body>
</html>