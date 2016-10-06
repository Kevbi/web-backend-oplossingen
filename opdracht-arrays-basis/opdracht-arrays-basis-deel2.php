<?php
	
	 $getallen = array(1,2,3,4,5);

    foreach ($getallen as $key   => $value) {
        if ($value % 2 !== 0)
        {
            $oddArray[] = $value;
        }
    }

    $reverse = array(5,4,3,2,1);

    /*$combinedArray = array_map( function () 
    {

        return array_sum(func_get_args());
    
    }, $getallen, $reverse);
    */

    $index = 0;
    foreach ($reverse as $key => $value) {
        $combinedArray[] = $value + $getallen[$index];
        $index ++;
    }

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

            <h1 class="extra">Opdracht arrays basis: deel 2</h1>

            <ul>

                <li><strong><?= array_product($getallen) ?></strong></li>

                <li><strong><pre><?= var_dump($oddArray) ?></pre></strong></li>

                <li><strong><pre><?= var_dump($combinedArray) ?></pre></strong></li>
            </ul>
        
        </section>

    </body>
</html>
