<?php 

/**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
     * Olimpia Milano - Cantù | 55-60
     *
     */

	$array = [

		[
			"Team1" => "Milano",
			"Team2" => "Olimpia",
			"Team1-score" => 60,
			"Team2-score" => 15,
		],

		[
			"Team1" => "Barcellona",
			"Team2" => "Torino",
			"Team1-score" => 55,
			"Team2-score" => 65,
		],

		[
			"Team1" => "Berlino",
			"Team2" => "Paris",
			"Team1-score" => 60,
			"Team2-score" => 45,
		],

		[
			"Team1" => "Olimpia",
			"Team2" => "Roma",
			"Team1-score" => 50,
			"Team2-score" => 45,
		],
	];
;?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1st snack</title>
</head>
<body>
	<ul>
	<?php for ($i = 0; $i < count($array); $i++) { ?>
			<?php 			
			echo '<li>';
			var_dump( 
				$array[$i]['Team1'] 
				. ' - ' 
				. $array[$i]['Team2'] 
				. ' | ' 
				. $array[$i]['Team1-score'] 
				. '-' 
				. $array[$i]['Team2-score'] 
				);
			echo '</li>';
		}; ?>
	</ul>
</body>
</html>