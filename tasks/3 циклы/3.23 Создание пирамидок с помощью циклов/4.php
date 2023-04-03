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
    for ($i = 9; $i > 0; $i--) {
		$str = '';

		for ($j = 1; $j <= $i; $j++) {
			$str .= $i;
		}
		print($str . '<br>');
	}
?>
</body>
</html>