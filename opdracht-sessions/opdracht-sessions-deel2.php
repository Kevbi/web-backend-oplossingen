<?php

 session_start();

    var_dump($_SESSION);

    if (isset($_POST["submit"])) {

        $_SESSION["email"] = $_POST["email"];
        $_SESSION["nick"] = $_POST["nick"];

    }

    $email = (isset($_SESSION["email"])) ? $_SESSION["email"] : '';
    $nickname = (isset($_SESSION["nick"])) ? $_SESSION["nick"] : '';
    $street = (isset($_SESSION["street"])) ? $_SESSION["street"] : '';
    $number = (isset($_SESSION["number"])) ? $_SESSION["number"] : '';
    $gemeente = (isset($_SESSION["gemeente"])) ? $_SESSION["gemeente"] : '';
    $postcode = (isset($_SESSION["postcode"])) ? $_SESSION["postcode"] : '';

?>
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
        <p>email:<?php echo $email?></p>
        <p>nickname:<?php echo $nickname?></p>
        <h2>adres</h2>
        <form method="post" action="opdracht-sessions-deel3.php">
            <label>straat</label>
            <input type="text" name="street"
            value="<?php echo $street ?>" <?=(isset($_GET["key"]) && $_GET["key"] == "street") ? "autofocus" : '' ?>>
            <label>nummer</label>
            <input type="text" name="number"
            value="<?php echo $number ?>" <?=(isset($_GET["key"]) && $_GET["key"] == "number") ? "autofocus" : '' ?> >
             <label>gemeente</label>
            <input type="text" name="gemeente"
            value="<?php echo $gemeente ?>" <?=(isset($_GET["key"]) && $_GET["key"] == "gemeente") ? "autofocus" : '' ?> >
             <label>postcode</label>
            <input type="text" name="postcode"
            value="<?php echo $postcode ?>" <?=(isset($_GET["key"]) && $_GET["key"] == "postcode") ? "autofocus" : '' ?>>
            <br/>
            <input type="submit" name="submit" value="Volgende">
        </form>    

        <br/>

        <a href="opdracht-sessions-deel1.php?destroySession">Destroy session</a>  
    </body>
</html>
