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
    $letters = range('a', 'z');
    shuffle($letters);
    $randomLetters = array_slice($letters, 0, 26);
    var_dump($randomLetters);
?>
</body>
</html>