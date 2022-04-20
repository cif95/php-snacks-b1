<!-- /**
     * Secondo snack
     *
     *  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * - name sia più lungo di 3 caratteri,
     * - che mail contenga un punto e una chiocciola e 
     * - che age sia un numero.
     * 
     *  Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
     */// -->

<?php 
	$params = $_GET;
	if ( 
			( strlen($params['name']) > 3 ) &&
			( strpos($params['email'], '.') ) &&
			( strpos($params['email'], '@') ) &&
			( is_numeric($params['age']) )
		) {
		$result = "accesso riuscito";
	} else {
		$result = "accesso negato";
	}
;?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>2nd snack</title>
</head>
<body>
	<h2>
	<?php 
	echo $result;
	?>
	</h2>
</body>
</html>