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
	$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
	foreach ($arr as $key => $elem) {
		print($key .' - возраст '. $elem . ' лет' . '<br>');
	}
?>  
</body>
</html>