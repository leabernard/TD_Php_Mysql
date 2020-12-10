<?php   
    require "menu.php";
?>
<html lang="fr" >

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="menu.css">
        <title>exo1</title>
    </head>
    <body>
    
    <?php
  
   $MaBase = new PDO('mysql:host=192.168.65.204; dbname=lea_exo2; charset=utf8','root', 'root');
   $resultat = $MaBase ->query("SELECT * FROM `patient` WHERE 1");
   echo "j'ai fait une requête de ".$resultat->rowCount()." Tuple";

   while($TableauDunTuple = $resultat->fetch()){
       echo $TableauDunTuple["numSS"]." ".$TableauDunTuple["prenom"]." ".$TableauDunTuple["nom"]."<br>";
   };





   ?>
    </body>
</html>
<?php
    highlight_file(__FILE__)
?>