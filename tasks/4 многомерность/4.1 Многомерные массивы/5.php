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
		'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
		'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
	];
    print($arr['en'][2]);
?>
</body>
</html>