<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Voiture</title>
</head>

<header>
</header>

<body>
	<?php 
		require_once("test.php");
		$caisse->repeindre("Bleu");
	?>
	<hr/>
	<p><?= $caisse->get("msg"); ?></p>
</body>

<footer>
</footer>
</html>