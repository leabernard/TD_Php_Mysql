<?php require "../../menu.php";
?>
<html>

<head>
<link rel="stylesheet" href="exercice1.css">
<link rel="stylesheet" href="../../menu.css">
</head>
<body>
 



<?php

$NombreAleatoire=rand(0,100);

if($NombreAleatoire%2==1){
  echo '<div class="impaire">'.$NombreAleatoire.' est imapaire</div>';  
}else{
    echo '<div class="paire">'.$NombreAleatoire.' est paire</div>';
}



highlight_file((__FILE__));



?>
</body>





</html>