<?php
    session_start();

    include "fonction.php";

?>
<html lang="fr" >

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="menu.css">
        <title>ExerciceFinal</title>
    </head>
    <body>
    <?php include "menu.php"; 
    
   if (formulaire() == "OK") {
      echo "Nice <a href='https://google.com'>Mon lien</a>";
   } else {
       echo "Mdp incorrect";
   }
   ?>
    </body>
</html>
<?php
    highlight_file(__FILE__)
?>