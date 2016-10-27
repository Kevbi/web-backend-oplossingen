<?php

    $txt = file_get_contents("test.txt");
    $txtArray = explode(",", $txt);
    $fout = false;
    $isAuthenticated = false;



    if (isset($_POST["id"]) && isset($_POST["psw"]) ) {
        if ($_POST["id"] == $txtArray[0] && $_POST["psw"] == $txtArray[1]) {
            
            setcookie( 'authenticated', TRUE, time() + 360 ); 
         }
        else{
           $fout = true;
        }
    }

    //als cookie bestaaat authenticated to true
    if (isset($_COOKIE["authenticated"])) {
        $isAuthenticated    =   true;
    }

    if (isset($_GET["logout"])) {
    
            setcookie('authenticated',FALSE);
            
            header('location: opdracht-cookies.php');
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="wi$cookieArray = dth=device-width, initial-scale=1">
        <title>Opdracht cookies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body class="web-backend-opdracht">
    
    <section class="body">

        <?php if ($isAuthenticated): ?>
        <p>U bent ingelogd.</p>
        <a href="opdracht-cookies.php?logout">uitloggen</a>
        <?php endif ?>
        <?php if (!$isAuthenticated): ?>
        <h1>Inloggen</h1>
        <?php endif ?>
        <?php if ($fout): ?>
        <p><code>Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.</code></p>
        <?php endif ?>

        <?php if (!$isAuthenticated) :?>
        <form method="post">
            <label for="id">gebruikersnaam</label>
            <input type="text" id="id" name="id">
            <label for="psw">paswoord</label>
            <input type="password" id="psw" name="psw"> </br>
            <input type="submit" name="submit" value="Submit">
        </form>
       <?php endif ?>
     </section>
    </body>
</html>
