<?php

    session_start();

      if (isset($_POST["email"])) {
        $_SESSION["email"] = $_POST["email"];
    }
     if (isset($_POST["nick"])) {
        $_SESSION["nick"] = $_POST["nick"];
    }
      if (isset($_POST["street"])) {
        $_SESSION["street"] = $_POST["street"];
    }
      if (isset($_POST["number"])) {
        $_SESSION["number"] = $_POST["number"];
    }
      if (isset($_POST["gemeente"])) {
        $_SESSION["gemeente"] = $_POST["gemeente"];
    }
      if (isset($_POST["postcode"])) {
        $_SESSION["postcode"] = $_POST["postcode"];
    }


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
        <p>email:<?php echo $_SESSION["email"]?></p>
        <p>nickname:<?php echo $_SESSION["nick"]?></p>
        <h2>adres</h2>
        <form method="post" action="opdracht-sessions-deel3.php">
            <label>straat</label>
            <input type="text" name="street"
            value="<?php echo $_SESSION["street"]?>">
            <label>nummer</label>
            <input type="text" name="number"
            value="<?php echo $_SESSION["number"]?>">
             <label>gemeente</label>
            <input type="text" name="gemeente"
            value="<?php echo $_SESSION["gemeente"]?>">
             <label>postcode</label>
            <input type="text" name="postcode"
            value="<?php echo $_SESSION["postcode"]?>">
            <br/>
            <input type="submit" name="submit" value="Volgende">
        </form>    

        <br/>

        <P><a>Session destroy</a></P>

        <code><?php var_dump($_SESSION) ?></code>   
    </body>
</html>
