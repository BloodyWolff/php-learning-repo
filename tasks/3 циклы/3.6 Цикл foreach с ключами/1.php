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
	$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
    foreach($arr as $key => $elem) {
        print($key ."-". $elem . '<br>');
    }
?>  
</body>
</html>