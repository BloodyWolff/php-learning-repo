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

	for ($i = 0, $p = 1; $i < 1; $i++) {
		for ($j = 0; $j < 4; $j++) {
            for ($k=0; $k < 2; $k++) { 
                $arr[$i][$j][$k] = $p++;
            }
		}
	}
	var_dump($arr);
?>
</body>
</html>