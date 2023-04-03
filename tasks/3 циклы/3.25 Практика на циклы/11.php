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
    function factorial($n) {
        if ($n < 0) {
          return -1;
        } elseif ($n == 0) {
          return 1;
        } else {
          return ($n * factorial($n - 1));
        }
      }
      print("Факториал 5 равен: " . factorial(5));
?>
</body>
</html>