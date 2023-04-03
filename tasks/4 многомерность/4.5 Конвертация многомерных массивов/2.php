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
    $dati = [
        [
            'date'  => '2019-12-29',
            'event' => 'name1'
        ],
        [
            'date'  => '2019-12-31',
            'event' => 'name2'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name3'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name4'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name5'
        ],
        [
            'date'  => '2019-12-31',
            'event' => 'name6'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name7'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name8'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name9'
        ],
    ];
    $result = [];
    foreach($dati as $data){
        $result[$data['date']][] = $data['event'];
    };
    var_dump($result);
?>
</body>
</html>