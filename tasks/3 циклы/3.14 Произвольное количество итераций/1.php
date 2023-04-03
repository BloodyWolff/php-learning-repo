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
	 $num = 2;
     $result = 0;
     while ($num <= 1000) {
        $num *= 3;
        $result++;
    }
    print($result);
?>
</body>
</html>