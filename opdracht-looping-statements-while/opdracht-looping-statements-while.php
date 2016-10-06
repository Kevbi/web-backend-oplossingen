<?php

    $getallen = range(0,100);
    $index = 0;

    while ($index <> count($getallen)) {
        if($index <> max($getallen)) {
            print_r($getallen[$index] . ", ");
            $index ++; 
        }
        else {
            print_r($getallen[$index]);
            $index ++; 
        }
        
    }

    #deel2

    $boodschappenlijstje = ["Hesp","Kaas","Ice Tea","Brood"];
    $index2 = 0; 

?>
<!doctype html>
<html>
    <head>
    </head>
    <body class="web-backend-opdracht">

        <h1>Opdracht while: deel 2</h1>

        <ul>
            <?php while($index2 <> count($boodschappenlijstje)) {
                echo "<li>" . $boodschappenlijstje[$index2] . "</li>";
                $index2++;
            }
                ?>
        </ul>

    </body>
</html>
