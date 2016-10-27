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
        <h2>gegevens</h2>
        <p>email : <?php echo $_SESSION["email"] ?> <a href="opdracht-sessions-deel1.php">Wijzig</a></p> 

        <br/>

        <P><a>Session destroy</a></P>

        <code><?php var_dump($_SESSION) ?></code>   
    </body>
</html>
