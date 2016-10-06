<?php 

	$nummers = [8, 7, 8, 7, 3, 2, 1, 2, 4];

    $nummers = array_unique($nummers);

    rsort($nummers);


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
            
            <h1>Opdracht array functies: deel 1</h1>

            <ul>
                <li><code><?= print_r($nummers) ?></code></li>
            </ul>

        </section>

    </body>
</html>
