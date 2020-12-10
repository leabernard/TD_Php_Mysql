<?php

    


    function afficher_requet_select($marequete)
    {

        $BDD = new PDO('mysql:host=192.168.65.204; dbname=lea_exo2; charset=utf8','root', 'root');

    //     echo"<table border=1>
    //     <tr>
    //         <td>$marequete </td>
          
    //     </tr>
        
    // </table>";  
        try {
            $marequete = $BDD->query($marequete);
            if ($marequete->rowCount()) {
                while($TableauDunTuple = $marequete->fetch()){
                    echo ' num SS'.$TableauDunTuple["numSS"].' prenom '.$TableauDunTuple["prenom"].' '.$TableauDunTuple["nom"].'<br>';
                }        
            } else {
                echo "pas de resulat";
            }
           
        } catch (\Throwable $th) {
            echo 'Erreur : '.$th;
        }

}
function ajout(){
    try{
$MaBase = new PDO('mysql:host=192.168.65.204; dbname=lea_exo2; charset=utf8','root', 'root');
$ObjetResultatDeRequeteBrut = $MaBase->query('INSERT INTO patient VALUES ("78", "bernard", "maurice")');
}catch(Exception $e){
echo "Une erreur c'est produite :".$e->getMessage();
}
}
highlight_file(__FILE__)
?>
