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
    $sum = 0;
    $lenght1 = count($arr[0]);
    $lenght2 = count($arr[2]);
    for($i = 0; $i < $lenght1; $i++) {
        for($j = 0; $j < $lenght2; $j++) {
            $sum = $arr[0]['salary'] + $arr[2]['salary'];
        }
    }
    print($sum);
?>
</body>
</html>