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
	$arr = ['понедельник', "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
    foreach ($arr as $d => $elem) {
        if($d == 5 or $d == 6) {
            print('<b>' . $elem . '</b>');
		} else {
            print($elem . '<br>');
        }
	}
?>
</body>
</html>