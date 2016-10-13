<?php

    $text = file_get_contents("text-file.txt");
    $textChars = str_split($text);
    rsort($textChars);
    $textChars = array_reverse($textChars);
    $amountArray = array();

    foreach($textChars as $value) /* in_array($value, $amountArray) */
    {
        if (isset($amountArray[$value]))
        {
            $amountArray[$value]++;
        }
        else
        {
            $amountArray[$value] = 1;
        }
        
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht foreach</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        
        <section class="body">
        
            <h1>Opdracht foreach: deel 1</h1>
                            <p><?= strlen($text) ?></p>
                            <p><code><?= var_dump($amountArray) ?></code></p>

        </section>
      

    </body>
</html>
