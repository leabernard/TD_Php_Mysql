 <?php
        session_start();
        unset($_SESSION['count']);
        ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>final</title>
    </head>
    <body>
    <form method="GET">
        <h2>login</h2>
            <input type="text"size="" name="count">
                <input type="submit" value="connexion"></p>
            </form>
            <h2>mot de passe</h2>
            <input type="name">
            <?php
        session_start();
        if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
        } else {
            $_SESSION['count']++;
        }
        highlight_file(__FILE__)
        ?>
    </body>
</html>

