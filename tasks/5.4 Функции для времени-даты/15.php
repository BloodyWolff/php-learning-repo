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
    $year = 2022;
    $fr13  = [];

    $date = date_create( $year . '-01-13' );

    for ( $i=0; $i <= 11; $i++ ){
        if ( date_format($date, 'w') == 5 ){
            $fr13[] = date_format($date, 'Y-m-d');
        }

        date_modify($date, '1 month');
    }

    var_dump($fr13);
?>
</body>
</html>