<?php

 session_start();

    var_dump($_SESSION);

    if (isset($_POST["submit"])) {

        $_SESSION["street"] = $_POST["street"];
        $_SESSION["number"] = $_POST["number"];
        $_SESSION["gemeente"] = $_POST["gemeente"];
        $_SESSION["postcode"] = $_POST["postcode"];
    }

    $email = (isset($_SESSION["email"])) ? $_SESSION["email"] : '';
    $nickname = (isset($_SESSION["nick"])) ? $_SESSION["nick"] : '';
    $street = (isset($_SESSION["street"])) ? $_SESSION["street"] : '';
    $number = (isset($_SESSION["number"])) ? $_SESSION["number"] : '';
    $gemeente = (isset($_SESSION["gemeente"])) ? $_SESSION["gemeente"] : '';
    $postcode = (isset($_SESSION["postcode"])) ? $_SESSION["postcode"] : '';
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
        <p>email : <?php echo $email ?> <a href="opdracht-sessions-deel1.php?key=email">Wijzig</a></p> 
        <p>nickname : <?php echo $nickname ?> <a href="opdracht-sessions-deel1.php?key=nick">Wijzig</a></p> 
        <p>straat : <?php echo $street ?> <a href="opdracht-sessions-deel2.php?street">Wijzig</a></p> 
        <p>nummer : <?php echo $number ?> <a href="opdracht-sessions-deel2.php?number">Wijzig</a></p> 
        <p>gemeente : <?php echo $gemeente ?> <a href="opdracht-sessions-deel2.php?gemeente">Wijzig</a></p> 
        <p>postcode : <?php echo $postcode ?> <a href="opdracht-sessions-deel2.php?postcode">Wijzig</a></p> 
        <br/>

           <a href="opdracht-sessions-deel1.php?destroySession">Destroy session</a>    
    </body>
</html>
