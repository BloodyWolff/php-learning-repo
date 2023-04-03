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
    $arr = [1, 8, 34, 9, 1, 11, 9, 16];
	$length = count($arr);

	for ($i = 2; $i < $length; $i++) {
		print($arr[$i - 2] + $arr[$i - 1] + $arr[$i] . ' -> ');
	}
?>
</body>
</html>