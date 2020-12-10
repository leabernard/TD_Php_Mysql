<html> <head> </head> <body>


<div><h1>coucou<h1></div>
<?php 
$MaPremiereVariable = 2;
$MaPremiereVariable = $MaPremiereVariable - 5;

if($MaPremiereVariable > 3){
	echo "<div>  je suis plus grand que 3</div>";
}else{

	echo "<div> je suis plus petit </div>";

}


//l'utilisateur rentre un chiffre
$monchiffre = 5;

for($i=0;$i<10;$i++){
	
echo "<div>".$i."</div>";


}	


echo "Voici ma donnée : ".$MaPremiereVariable." voilà "; 


?>
</body>
</html>
