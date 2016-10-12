<?php
    
    $rijen = 11;
    $kolommen = 11;



?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht for</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">

        <style>
        .oneven {
            background-color: green;
        }
        </style>
    </head>
    <body class="web-backend-opdracht">

        <table>
            <?php for ( $rij = 0; $rij < $rijen; $rij++): ?>
                <tr>
                    <?php for ($kolom=0;$kolom<$kolommen;$kolom++): ?>
                    <td class=<?= (($rij*$kolom)%2 == 0) ? : "oneven" ?>><?= $rij * $kolom?></td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>

    </body>
</html>
