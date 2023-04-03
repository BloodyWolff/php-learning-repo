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
	 $arr = [10, 20, 30, 50, 235, 3000, 345, 545];
     foreach ($arr as $value) {
         $first_digit = substr($value, 0, 1);
         if ($first_digit == 1 || $first_digit == 2 || $first_digit == 5) {
             print($value . "<br>");
         }
     }
?>
</body>
</html>