<?php 
	$randomNumbers = [];
	while ( count($randomNumbers) < 15 ) {
		$randomInt = rand(0, 1500);
		if ( !in_array($randomInt, $randomNumbers) ) {
			array_push( $randomNumbers, $randomInt );
		}
	}
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
;?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>4th snack</title>
</head>
<body>
	<h2>
		Lista di 15 numeri casuali :
	</h2>
	<ul>
		<?php 
		for ( $i = 0; $i < count($randomNumbers); $i++) {
			echo '<li>' . $randomNumbers[$i] . '</li>' ;
		}
		?>
	</ul>
</body>
</html>