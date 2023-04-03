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
     $arr = [11, 16, 5, 2, 10, 335, 21, 3, 5];
    $lenght = count($arr);
    $sum = 0;

	for ($i = 0; $i < $lenght; $i++) {
        $sum += $arr[$i];
	}
    print($sum / $lenght);
?>
</body>
</html>