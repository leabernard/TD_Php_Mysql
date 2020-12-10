<?php   
    require "menu.php";
    require "fonction.php";
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="menu.css">
        <title>Exercice1</title>
    </head>
    <body>
    
        <p>premier tableau</p>
<?php
tableau1()
?>
<p>deuxieme tableau</p>
<?php
tableau1()
?>
<?php
    highlight_file(__FILE__)
?>
</body>
</html>
