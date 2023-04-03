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
	$str = '';

	for ($i = 0; $i < 5; $i++) {
		$str .= 'xx';
		$arr[] = $str;
	}
    var_dump($arr);
?>
</body>
</html>