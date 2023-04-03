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
    $arr = [
		1 => 125,
		2 => 225,
		3 => 128,
		4 => 356,
		5 => 145,
		6 => 281,
		7 => 452,
        ];
        foreach ($arr as $elem) {
            if (substr($elem, 0, 1) == '1' || substr($elem, 0, 1) == '2') {
                $newArr[] = $elem;
            }
        }
        print_r($newArr);
?>
</body>
</html>