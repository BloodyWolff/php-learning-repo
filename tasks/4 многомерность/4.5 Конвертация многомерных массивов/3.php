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
        '2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
        '2019-12-30'=> ['name5', 'name6', 'name7'],
        '2019-12-31'=> ['name8', 'name9'],
    ];
    $result = [];

	foreach ($dati as $key => $data) {
        foreach($data as $name) {
            $result[] = [
                'date' => $key,
                'event' => $name
            ];
        }
	}

	var_dump($result);
?>
</body>
</html>