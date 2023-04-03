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
    $letter = 'D';
    $answer = (ord($letter) >= 65 && ord($letter) <= 90) ? 'Большая' : ((ord($letter) >= 97 && ord($letter) <= 122) ? 'Маленькая' : 'Не является буквой латинского алфавита');
    echo $answer;
?>
</body>
</html>