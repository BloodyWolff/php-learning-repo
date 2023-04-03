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
    $str1 = 'abcabcabcbabcafduydydyhbcabcabbaaa';
    $str2 = strtr($str1, 'abc', '123');
    $str3 = strtr($str1, ['a' => 1, 'b' => 2, 'c' => 3]);
    print($str2 . '<br>');
    print($str3 . '<br>');
?>
</body>
</html>