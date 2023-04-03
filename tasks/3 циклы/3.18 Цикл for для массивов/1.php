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
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $lenght = count($arr);

    for ($i=0; $i < $lenght; $i++) { 
        print($arr[$i]);
    }   
?>
</body>
</html>