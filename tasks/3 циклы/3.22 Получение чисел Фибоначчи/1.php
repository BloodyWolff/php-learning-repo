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
    $one = 0;
	$two = 1;

	for ($i = 0; $i < 12; $i++) {
		$current = $one + $two;
		$one = $two;
		$two = $current;
        print($current . ' -- ');
	}
?>
</body>
</html>