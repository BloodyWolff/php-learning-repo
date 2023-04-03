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
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
    $lenght = count($arr);

    for($i = 0; $i < $lenght; $i++) {
        $arr['employee' . $i] += ($arr['employee' . $i] / 100) * 10; 
    }
    var_dump($arr);
?>
</body>
</html>