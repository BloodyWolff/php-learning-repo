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
    $arr = [90, 5, 17, 1, 43, 3];
	$length = count($arr);

	for ($i = 0; $i < $length; $i++) {
		$arr[$i] **= 2;
	}
	var_dump($arr);
?>
</body>
</html>