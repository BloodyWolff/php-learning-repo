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
    $arr = [17, 10, 1, 5, 90, 45, -8];
	$length = count($arr);

	for ($i = 0; $i < $length; $i++) {
		$arr[$i]--;
	}
	var_dump($arr); 
?>
</body>
</html>