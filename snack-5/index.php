<?php
	$paragraph = "
		C'è una nuova proposta nel mercato del turismo spaziale. Promette ai suoi futuri clienti la possibilità di osservare la curvatura della Terra e il nero dello spazio, stando comodamente seduti in poltrona, in una cabina extralusso che verrà portata ad altissima quota da un gigantesco pallone aerostatico. La società che propone questa offerta è la Space Perspective, che recentemente ha mostrato al pubblico le immagini dell'interno della cabina della navicella e spera di iniziare i lanci dal Kennedy Center in Florida dalla fine del 2024. Venduti già più di 600 biglietti al prezzo di 125.000 dollari ciascuno. 
		A tutto comfort. Le navicelle possiedono vetrate alte un metro e mezzo, sedili avvolgenti e un sistema di illuminazione che produce luci di colore violacea. A bordo sarà disponibile anche un vero bar e la connessione via Wi-Fi a Internet. La 'mongolfiera' trasporterà la navicella fino a una quota di 30 chilometri sul livello del mare, un'altezza parecchio inferiore rispetto a quella che raggiungono i concorrenti, ovvero le navicelle di Blue Origin che arrivano a circa 105 chilometri, o gli aereo-razzi di Virgin Galactic che toccano gli 85 chilometri, ma che comunque va ben oltre la quota di volo degli aerei intercontinentali (circa 11 chilometri). 
		La curvatura. Spiega Jayne Poynter, la cofondatrice di Space Perspective: «Quando i turisti arriveranno a 30 chilometri di quota si troveranno al di sopra del 99 per cento dell'atmosfera terrestre, il che permetterà loro di vedere lo spazio con il suo reale colore, ossia nero come l'inchiostro, oltre che di osservare la curvatura della Terra».
		Per salire sulla navicella non sarà richiesta alcuna formazione speciale. La mongolfiera salirà ad una velocità massima di circa 19 chilometri all'ora, dunque il viaggio sarà abbastanza lungo da permettere ai turisti di gustare ogni momento della loro avventura: ci vorranno infatti circa 2 ore per raggiungere la quota massima e altrettante per compiere la discesa, appesi a un paracadute, che si concluderà con un ammaraggio in oceano. Durante questa esperienza non sarà possibile sperimenterà l'assenza di gravità, come invece accade, anche se per pochi minuti, ai turisti che utilizzano i mezzi di Blue Origin o di Virgin Galactic durante il loro viaggio.
		";
	$splittedParagraph = explode('.', $paragraph);
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
;?>

<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>5th snack</title>
</head>
<body>
	<?php 
	for ($i = 0; $i < count($splittedParagraph); $i++) {
		echo '<p>' . $splittedParagraph[$i] . '.</p>' ;
	}
	?>
</body>
</html>