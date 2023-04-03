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
    $products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
    $products[] = [
        'name'  => 'ягодi',
        'price' => 9000,
        'amount'  => 9,
    ];
    foreach($products as $product) {
        print($product['name'] . ' $ ' . $product['price'] . ' => ' . $product['amount'] . '<br>');
        }
?>
</body>
</html>