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
    for ($i = 5; $i >= 1; $i--) {
		$str = '';

		for ($j = 0; $j < $i; $j++) {
			$str .= 'xx';
		}
		print($str . '<br>');
	}
?>
</body>
</html>