<?php

	$getal = 1;

	if ($getal == 1)
	{
		$dag = "Maandag";
	}
	if ($getal == 2)
	{
		$dag = "Dinsdag";
	}
	if ($getal == 3)
	{
		$dag = "Woensdag";
	}
	if ($getal == 4)
	{
		$dag = "Donderdag";
	}
	if ($getal == 5)
	{
		$dag = "Vrijdag";
	}
	if ($getal == 6)
	{
		$dag = "Zaterdag";
	}
	if ($getal == 7)
	{
		$dag = "Zondag";
	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht conditional statements</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht conditional statements: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!)</li>
                <li>Bijvoorbeeld, wanneer <code>$getal</code> gelijk is aan 1 dan wordt de string <code>'maandag'</code> op het scherm getoond</li>
                <li><strong><?= strtolower($dag) ?></strong></li>
            </ul>  

    		<h1 class="extra">Opdracht conditional statements: deel 2</h1>

    		<ul>
                <li>Maak een kopie van deel 1</li>
    			<li>Zet de naam van de dag (bv <code>'maandag'</code>) doormiddel van een string-functie dan naar hoofdletters om (bv <code>'MAANDAG'</code>).</li>
                <li>Zet alle letters in hoofdletters, behalve de 'a'</li>
                <li>Zet alle letters in hoofdletters, behalve de laatste 'a'</li>
                <li><strong><?= strtoupper($dag) ?></strong></li>
                <li><strong><?= str_replace("A", "a", strtoupper($dag)) ?></strong></li>
                <li><strong><?= substr_replace( strtoupper($dag), 'a', strrpos($dag, "a"), 1 ) ?></strong></li>
    		</ul>	

        </section>

    </body>
</html>
