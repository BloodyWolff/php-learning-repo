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
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
    foreach ($arr as $key1 => $value1) {
        foreach ($value1 as $key2 => $value2) {
            print($key2 . ' => ' . $value2) . '<br>';
        }
    }
?>
</body>
</html>