<?php

    $password = "pizza";
    $username = "kevbi";
    $message = null;

    if (isset($_POST["psw"]) && isset($_POST["username"])) {
        if ($_POST["psw"] == $password && $_POST["username"] == $username) {
            $message = "Welkom";
        }
        else {
            $message = "Er ging iets mis bij het inloggen, probeer opnieuw";
        }
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht post</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>
    <body class="web-backend-opdracht">
        <br>
        <form method="post">
            <label>gebruikersnaam</label>
            <input type="text" name="username">
            <label>paswoord</label>
            <input type="password" name="psw"><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <p><?php echo $message ?></p>

    </body>
</html>
