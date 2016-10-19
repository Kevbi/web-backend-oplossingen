<?php

    /*$artikels = array("titel" => array(), "datum" => array(), "inhoud" => array(), "afbeelding" => array(), "afbeeldingBeschrijving" => array());*/

    $artikels = array(array(),array(),array());

    $artikels[0]["titel"] = "Brussels Airport past nieuwe veiligheidsregels toe: dit verandert er allemaal";
    $artikels[0]["datum"] = "19/10/16 - 12u59";
    $artikels[0]["inhoud"] = "Vanaf 7 november moeten reizigers op Brussels Airport niet meer voor een prescreening door de tenten die na de aanslagen van 22 maart voor de vertrekhal werden geplaatst. 'We gaan van zeer zichtbare veiligheidsmaatregelen naar iets minder zichtbare, maar met een hoger veiligheidsniveau', zo kondigden minister van Binnenlandse Zaken Jan Jambon (N-VA) en Arnaud Feist, de CEO van Brussels Airport, vandaag aan.
'We hebben na de aanslagen gekozen voor zeer zichtbare maatregelen, met de inzet van tientallen politiemensen en militairen. Maar we wisten dat die capaciteit op termijn niet houdbaar was', zei minister Jambon. 'We evolueren nu naar een nieuw veiligheidsconcept dat menselijke controle en inzet van technologische middelen integreert.'

Daarbij wordt fors ingezet op intelligente veiligheidssystemen. De uitbouw van een ANPR-cameraschild (nummerplaatherkenning) is al langer bezig, en dergelijke camera's zullen ook gebruikt worden om begin volgend jaar een slagboomsysteem te installeren op de toegangsweg tot de luchthaven. Daarnaast zal er op de luchthaven gewerkt worden met gezichtsherkenningscamera's.

Wat de menselijke inzet betreft, krijgen de agenten op de luchthaven een opleiding om verdachte gedragingen te kunnen herkennen, naar het voorbeeld van de 'behaviour detection officers' op de Israëlische luchthaven Ben Gurion. 'Het gaat echt om het herkennen van bepaalde gedragingen, dus niet op basis van leeftijd, geslacht of etnie', aldus Jambon. Daarnaast komt er een snelleresponsteam en de federale politie zal aanwezig zijn in het operationeel centrum van de luchthaven.";
    $artikels[0]["afbeelding"] = "booo";
    $artikels[0]["afbeeldingBeschrijving"] = "booo";

    var_dump($_GET);

    $apart = false;

    if (isset($_GET["id"])) {
        if (array_key_exists($_GET["id"],$artikels)) {
            $apart = true;
            $artikels = array($artikels[$_GET["id"]]);
        }
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht get</title>
        <style>
            .meerdere {
                margin:6.5%;
                width: 20%;
                background-color: grey; 
                float:left;           
            }
            .apart {
                margin:10%;
                width: 80%;
                background-color: grey;
            }   
        </style>
    </head>
    <body class="web-backend-opdracht">
        <section class="artikels">

            <?php foreach ($artikels as $id => $value) : ?>
            <div class="<?php echo ($apart) ? "apart" : "meerdere"?>" >
            <h2><?php echo $value["titel"] ?></h2>
            <p><?php echo $value["datum"] ?></p>
            <p><?php echo ($apart) ? $value["inhoud"] : substr($value["inhoud"],0,50) . "..." ?></p>
            <img src="<?php echo $value["afbeelding"]?>" alt="<?php echo $value["afbeeldingBeschrijving"]?>"/>
            <?php if(!$apart): ?>
            <p><a href="opdracht-get.php?id=<?php echo $id?>">Lees meer</a></p>
            <?php endif ?>
            </div>
            <?php endforeach; ?>
        </section>
    </body>
</html>
