<?php

    session_start();

    if (isset($_POST["email"])) {
        $_SESSION["email"] = $_POST["email"];
    }
    else {
        $_SESSION["email"] = "";
    }
     if (isset($_POST["nick"])) {
        $_SESSION["nick"] = $_POST["nick"];
    }
    else {
        $_SESSION["nick"] = "";
    }

    session_destroy();

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
            <label>e-mail</label>
            <input type="text" name="email"
            value="<?php echo $_SESSION["email"]?>">
            <label>nickname</label>
            <input type="text" name="nick"
            value="<?php echo $_SESSION["nick"]?>">
            <br/>
            <input type="submit" name="submit" value="Volgende">
        </form>    

        <br/>

        <code><?php var_dump($_SESSION) ?></code>   
    </body>
</html>
