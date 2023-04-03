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
	$arr = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];
	$day = 2;
	foreach ($arr as $key=>$val) {
		if ($key == $day){
			echo '<i>'.$val.'</i>'.'<br>';
		} else{
			echo $val.'<br>';
		}
	}
?>
</body>
</html>