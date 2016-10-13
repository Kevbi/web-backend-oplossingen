<?php

	function berekenSom($getal1,$getal2) {
		return $getal1 + $getal2;
	}

	function vermenigvuldig($getal1,$getal2) {
		return $getal1 * $getal2;
	}

	function isEven($getal) {
		return ($getal%2 == 0) ? "true" : "false";
	}

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht functies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht functies: deel 1</h1>
            <p><?= isEven((vermenigvuldig(5,3))); ?></p>

        </section>

    </body>
</html>
