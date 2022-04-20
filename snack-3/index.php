<?php
//  Creare un array di array. 
//  Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
//  e come valore un array di post associati a quella data. 
//  Stampare ogni data con i relativi post

$posts = [
	'10/01/2019' => [
			[
					'title' => 'Post 1',
					'author' => 'Michele Papagni',
					'text' => 'Testo post 1'
			],
			[
					'title' => 'Post 2',
					'author' => 'Michele Papagni',
					'text' => 'Testo post 2'
			],
	],
	'10/02/2019' => [
			[
					'title' => 'Post 3',
					'author' => 'Michele Papagni',
					'text' => 'Testo post 3'
			]
	],
	'15/05/2019' => [
			[
					'title' => 'Post 4',
					'author' => 'Michele Papagni',
					'text' => 'Testo post 4'
			],
			[
					'title' => 'Post 5',
					'author' => 'Michele Papagni',
					'text' => 'Testo post 5'
			],
			[
					'title' => 'Post 6',
					'author' => 'Michele Papagni',
					'text' => 'Testo post 6'
			]
	],
];
?>

<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3rd snack</title>
</head>
<body>
	<?php 
	for ( $i = 0; $i < count(array_keys($posts)); $i++ ) { ?>
		<h3>
			Post del : <?php echo array_keys($posts)[$i] ; ?>
		</h3>
		<?php 	for ( $el = 0; $el < count(array_values($posts)[$i]) ; $el++) { ?>
			<h6>
				<?php echo array_values($posts)[$i][$el]['title'] ; ?>
			</h6>
			<p>
				<?php echo array_values($posts)[$i][$el]['author'] ; ?>
			</p>
			<p>
				<?php echo array_values($posts)[$i][$el]['text'] ; ?>
			</p>
		<?php } ; ?>
	<?php } ; ?>
	


</body>
</html>