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
    $numbers_array = range(1, 20);
    $chunked_array = array_chunk($numbers_array, 5);
    var_dump($chunked_array);
?>
</body>
</html>