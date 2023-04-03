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
    $result = 0;
    for ($i = 1; $i <= 99 ; $i += 2) {
        $result += $i;
    }

    print($result . '<br>');
?>  
</body>
</html>