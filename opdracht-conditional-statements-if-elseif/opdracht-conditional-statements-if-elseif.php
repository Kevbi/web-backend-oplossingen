<?php

    $getal = rand(1,100);
    if ($getal > 0 && $getal <10) 
    {
        $message = "Het getal ligt tussen 0 en 10";
    }
    elseif ($getal > 10 && $getal <20)
    {
        $message = "Het getal ligt tussen 10 en 20";
    }
    elseif ($getal > 20 && $getal <30) 
    {
        $message = "Het getal ligt tussen 20 en 30";
    }
    elseif ($getal > 30 && $getal <40) 
    {
        $message = "Het getal ligt tussen 30 en 40";
    }
    elseif ($getal > 40 && $getal <50) 
    {
        $message = "Het getal ligt tussen 40 en 50";
    }
     elseif ($getal > 50 && $getal <60) 
    {
        $message = "Het getal ligt tussen 50 en 60";
    }
    elseif ($getal > 60 && $getal <70) 
    {
        $message = "Het getal ligt tussen 60 en 70";
    }
     elseif ($getal > 70 && $getal <80) 
    {
        $message = "Het getal ligt tussen 70 en 80";
    }
     elseif ($getal > 80 && $getal <90) 
    {
        $message = "Het getal ligt tussen 80 en 90";
    }
     elseif ($getal > 90 && $getal <100) 
    {
        $message = "Het getal ligt tussen 90 en 100";
    }
    else
    {
        $message = "Het getal is " . $getal;
    }


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else if</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else if: deel 1</h1>

            <ul>
                <li>Maak een getal met een waarde tussen 1-100</li>
                <li>Zorg ervoor dat het script kan zeggen tussen welke tientallen het getal ligt, bv 'Het getal ligt tussen 20 en 30'.</li>
                <li>Zorg er vervolgens voor dat de boodschap omgekeerd afgedrukt wordt, bv '03 ne 02 nessut tgil lateg teH'.</li>
                <li><strong><?= $message ?></strong></li>
                <li><strong><?= strrev($message) ?></strong></li>
            </ul>  
        
        </section>

    </body>
</html>
