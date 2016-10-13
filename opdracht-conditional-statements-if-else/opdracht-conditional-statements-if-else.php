<?php

    $jaartal = 2016;
    
    if ( ( $jaartal % 4 == 0 ) && ( ( $jaartal % 100 !== 0 ) || ( $jaartal % 400 == 0 ))) 
    {
        $schrikkeljaar = $jaartal . " is een schrikkeljaar";
    }
    else
    {
        $schrikkeljaar = $jaartal . "is geen schrikkeljaar";
    }

    $seconden = 3153700;
    $minuten = 0;
    $uren = 0;
    $dagen = 0;
    $weken = 0;
    $maanden = 0;
    $jaren = 0;

    if ($seconden >= 60)
    {
        $minuten = $seconden / 60;
        $seconden = $minuten * 60 % 60;
        
        if ($minuten >= 60)
        {
            $uren = $minuten / 60;
            $minuten = $uren * 60 % 60;

            if ($uren >= 24)
            {
                $dagen = $uren / 24;
                $uren = $dagen * 24 % 24;

                /*if ($dagen >= 7)
                {
                    $weken = $dagen / 7;
                */
                    if ($dagen >= 31)
                    {
                        $maanden = $dagen / 31;
                        $dagen = $maanden * 31 % 31;

                        if ($maanden >= 12)
                        {
                            $jaren = $maanden / 12;
                            $maanden = $jaren * 12 % 12;
                        }
                    }
                #}
            }
        }
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht if else</title> 
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht if else: deel 1</h1>

            <ul>
                <li>Maak een PHP-script dat kan bepalen of de variabele 'jaartal' al dan niet een schrikkeljaar is
                    <ul>
                        <li>Een jaar is een schrikkeljaar als het deelbaar is door 4.</li>
                        <li>Een jaar is géén schrikkeljaar als het deelbaar is door 100, TENZIJ het wel deelbaar is door 400.</li>
                        <li><strong><?= $schrikkeljaar ?></strong></li>
                    </ul>
                </li>
            </ul>  

    		<h1 class="extra">Opdracht if else: deel 2</h1>

    		<ul>
                <li>Maak een PHP-script dat achterhaalt hoeveel volledige jaren, maanden, weken, dagen, uren, minuten en seconden er in een gegeven aantal seconden zit (bv. 221108521). Hoeft niet met if-statement.</li>

                <li>
                    Ga er van uit dat een maand 31 dagen kent en een jaar 365 dagen. Het resultaat ziet er ongeveer als volgt uit:
                    
                    <div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

                        <strong><ul>
                            <li>seconden: <?= $seconden ?></li>
                            <li>minuten: <?= floor($minuten) ?></li>
                            <li>uren: <?= floor($uren) ?></li>
                            <li>dagen: <?= floor($dagen) ?></li>
                            <li>weken: <?= floor($weken) ?></li>
                            <li>maanden: <?= floor($maanden) ?></li>
                            <li>jaren: <?= floor($jaren) ?></li>
                        </ul></strong>
                    </div>

                </li>
    		</ul>

        </section>

    </body>
</html>
