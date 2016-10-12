<?php

    $rijen = 10;
    $kolommen = 10;

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
    </head>
    <body class="web-backend-opdracht">

        <table>
            <?php for ( $rij = 0; $rij < $rijen; $rij++): ?>
                <tr>
                    <?php for ($kolom=0;$kolom<$kolommen;$kolom++): ?>
                    <td>kolom</td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>

    </body>
</html>
