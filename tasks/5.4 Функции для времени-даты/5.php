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
    $now = time();
    $start_of_day = strtotime('today 7:23:48');
    $elapsed_seconds = $now - $start_of_day;
    $elapsed_hours = floor($elapsed_seconds / 3600);
    print("Прошло $elapsed_hours часов с 7:23:48 до настоящего момента времени.");
?>
</body>
</html>   