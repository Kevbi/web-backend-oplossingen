<?php
    
    date_default_timezone_set('Europe/Brussels');
    setlocale(LC_ALL, "nl");
    $date = date('j F Y\, h:i:s a', mktime(22,35,25,1,21,1904));

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht date</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    </head>
    <body class="web-backend-opdracht">
        <section class="body">
            <p><?php echo $date ?></p>
        </section>
    </body>
</html>
