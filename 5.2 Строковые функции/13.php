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
     $img = 'photo1337228.png';
     if (substr($img, -4) == '.png') {
         print('vse verno');
     } else {
        print('ne verno');
     }
?>
</body>
</html>