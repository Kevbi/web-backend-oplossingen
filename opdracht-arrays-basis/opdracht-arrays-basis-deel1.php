<?php

    #$dieren = array("Kat","Hond","Tijger","Leeuw","Panter","Varken","Paard","Luipaard","Puma","Gorilla");

    $dieren[0] = "Kat";
    $dieren[1] = "Hond";
    $dieren[2] = "Tijger";
    $dieren[3] = "Leeuw";
    $dieren[4] = "Panter";
    $dieren[5] = "Varken";
    $dieren[6] = "Paard";
    $dieren[7] = "Luipaard";
    $dieren[8] = "Puma";
    $dieren[9] = "Gorilla";

    #$voertuigen = array("landvoertuigen" => array("Vespa", "fiets"), "watervoertuigen" => array("surfplank","vlot","schoener","driemaster"), "luchtvoertuigen" => array("luchtballon","helicopter","B52"));

    $voertuigen["landvoertuigen"] = array("Vespa", "fiets");
    $voertuigen["watervoertuigen"] = array("surfplank","vlot","schoener","driemaster");
    $voertuigen["luchtvoertuigen"] = array("luchtballon","helicopter","B52");
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht arrays basis</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht arrays basis: deel 1</h1>

                <pre><?= var_dump($voertuigen) ?></pre>

        </section>

    </body>
</html>
