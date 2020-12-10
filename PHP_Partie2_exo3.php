<?php   
    require "menu.php";
    require "fonction.php";
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="menu.css">
        <title>Exercice3</title>
    </head>
    <body>
    
        <form action="" method="post">
            <input name="arg1" type="number">
            <input name="arg2" type="number">
            <input name="arg3" type="number">
            <input name="arg4" type="number">
            <input name="arg5" type="number">
            <button type="submit" name="calculer">calculer</button>
        </form>


        <?php

        if (isset($_POST["calculer"])) {
            echo tableau3(
                array(
                    $_POST["arg1"],
                    $_POST["arg2"],
                    $_POST["arg3"],
                    $_POST["arg4"],
                    $_POST["arg5"]
                    )
                );
        }

            
        ?>
<?php
    highlight_file(__FILE__)
?>

    </body>
</html>
