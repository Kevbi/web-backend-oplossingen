<?php
    
    $voornaam = "Kevin";
    $naam = "Buys";

    /*
    $naam = "Buys";
    $email = "kevin.buys@student.kdg.be"
    */
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht comments</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
			<h1>Opdracht comments: deel 1</h1>

			<ul>

                <li><?= $voornaam . " " .  $naam ?></li>

			</ul>
			
		</section>

    </body>
</html>
