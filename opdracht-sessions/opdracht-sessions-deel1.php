<?php

 session_start();

    if (isset($_GET["destroySession"]))
    {
            session_destroy();
            header("location: opdracht-sessions-deel1.php");
    }

    var_dump($_SESSION);

    $email = (isset($_SESSION["email"])) ? $_SESSION["email"] : '';
    $nickname = (isset($_SESSION["nick"])) ? $_SESSION["nick"] : '';

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht sessions</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    </head>
    <body class="web-backend-opdracht"> 
        <br/>
        <h2>registratiegegevens</h2>
        <form method="post" action="opdracht-sessions-deel2.php">
            <label for="email">e-mail</label>
            <input type="text" id="email" name="email"
            value="<?= $email?>" <?=(isset($_GET["key"]) && $_GET["key"] == "email") ? "autofocus" : '' ?> >
            <label for="nick">nickname</label>
            <input type="text" id="nick" name="nick"
            value="<?= $nickname ?>" <?=(isset($_GET["key"]) && $_GET["key"] == "nick") ? "autofocus" : '' ?> >
            <br/>
            <input type="submit" name="submit" value="Volgende">
        </form>    

        <br/>

    </body>
</html>
