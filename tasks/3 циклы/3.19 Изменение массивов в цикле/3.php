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
    $arr = [100, 0, 34, 42, 2, -43, 15];
	$length = count($arr);

	for ($i = 0; $i < $length; $i++) {
		$arr[$i] += 10;
	}
	var_dump($arr); 
?>
</body>
</html>