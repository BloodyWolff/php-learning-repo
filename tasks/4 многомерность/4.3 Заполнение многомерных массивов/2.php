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
	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 4; $j++) {
			$arr[$i][$j] =  'x';
		}
	}
	var_dump($arr);
?>
</body>
</html>