<?php
    session_start();
    unset($_SESSION['count']);
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../menu.css">
        <title>exercice8</title>
    </head>
    <body>
    <?php require "../../menu.php"; ?>
    <form method="GET">
        <input type="text"size="" name="count">
            <input type="submit" value="Envoyer"></p>
        </form>
        <?php
            if (!isset($_SESSION['count'])) {
                $_SESSION['count'] = 0;
            } else {
                $_SESSION['count']++;
            }
        highlight_file(__FILE__)
        ?>
    </body>
</html>