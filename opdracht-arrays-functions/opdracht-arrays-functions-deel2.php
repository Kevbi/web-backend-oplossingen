<?php 

	$dieren = ["Kat","Hond","Panter","Tijger","Puma"];
    $zoogDieren = ["Kat","Olifant","Gorilla"];

    $combinedArray = array_unique(array_merge($dieren,$zoogDieren));

    $teZoekenDier = "Kat";

    sort($dieren);

    if(in_array($teZoekenDier, $dieren)) {
        $bericht = $teZoekenDier . " bevind zich in de array";
    }
    else {
        $bericht = $teZoekenDier . " bevind zich niet in de array";
    }
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
                <li><?= count($dieren) ?></li>

                <li><?= $bericht ?></li>

                <li><code><?= print_r($combinedArray) ?></code></li>
            </ul>

        </section>

    </body>
</html>
