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
    $newyear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
    $sec = $newyear - time();
    $days = floor($sec / (60*60*24));
    print("До нового года осталось: $days дней");
?>
</body>
</html>