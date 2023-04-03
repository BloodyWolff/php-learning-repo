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
    $arr = [];
	for ($i = 0, $k = 1; $i < 4; $i++) {
		for ($j = 0; $j < 2; $j++, $k++) {
			$arr[$i][$j] = $k;
		}
	}
	var_dump($arr);
?>
</body>
</html>