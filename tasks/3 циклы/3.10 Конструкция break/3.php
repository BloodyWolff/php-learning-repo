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
	$arr = [13, 4, 15, 9, 43, 1, 3, 4, 5];
    $res = 0;
	foreach ($arr as $i => $elem) {
        if ($elem === 3) {
            $res = $i;
            break;
		}
	}
    print($res);
?>
</body>
</html>