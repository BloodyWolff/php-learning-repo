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
		'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
		'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
	];
    print($arr['boys'][1] . '<br>');
    print($arr['girls'][2]);
?>
</body>
</html>