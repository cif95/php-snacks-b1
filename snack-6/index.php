<?php
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
$db = [
	'teachers' => [
		[
				'name' => 'Michele',
				'lastname' => 'Papagni'
		],
		[
				'name' => 'Fabio',
				'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
				'name' => 'Roberto',
				'lastname' => 'Marazzini'
		],
		[
				'name' => 'Federico',
				'lastname' => 'Pellegrini'
		]
	]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>6th snack</title>
</head>
<body>
	<main>
		<div id="teachers" class="rectangle">
			<h4>Teachers: </h4>
			<ul>
				<?php 
				for ( $i = 0; $i < count($db['teachers']); $i++) {
					echo '<li>' . ($db['teachers'][$i]['name']) . ' ' . ($db['teachers'][$i]['lastname']) . '</li>' ;
				}
				?>
			</ul>
		</div>
		<div id="pm" class="rectangle">
		<h4>Pm: </h4>
			<ul>
				<?php 
				for ( $i = 0; $i < count($db['pm']); $i++) {
					echo '<li>' . ($db['pm'][$i]['name']) . ' ' . ($db['pm'][$i]['lastname']) . '</li>' ;
				}
				?>
			</ul>
		</div>
	</main>
</body>
</html>