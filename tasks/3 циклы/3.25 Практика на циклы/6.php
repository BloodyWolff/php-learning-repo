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
    $arr = [1, 2, 9, 16, 3, 99999, 3, 7 , -288];
    $lenght = count($arr);

	for ($i = 0; $i < $lenght; $i++) {
        if ($arr[$i] > 0 && $arr[$i] < 10) {
            print($arr[$i] . '<br>');
        }
	}
?>
</body>
</html>