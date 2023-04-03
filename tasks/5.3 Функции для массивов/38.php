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
    $arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
    var_dump(array_intersect($arr1, $arr2));
?>
</body>
</html>