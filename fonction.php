<?php
    function tableau1(){
?>
<table border=1>
    <tr>
        <td>lea </td>
        <td> bernard </td>
    </tr>
    <tr>                                //exercie1
        <td> maurice </td>
        <td> michelle </td>
    </tr>
</table>
<?php
}
?>






<?php
    function tableau2($lea,$bernard,$claude){
                                                   //exercie2
        echo "<table border=1>
            <tr>
                <td>$lea </td>
                <td> $bernard </td>                    
                <td> $claude </td>
            </tr>
                
            //exercie2
        </table>";

    }
?>





<?php
    function tableau3($arg){        
                                                              
        return ( $arg[0] + $arg[1] + $arg[2] + $arg[3] + $arg[4] ) / 5;     //exercie3
        

    }
?>



<?php
function formulaire(){
        if (!isset($_SESSION["Logged"])) {
            ?>
                <form method="POST">
                <label for="nom">utilisateur :</label>
                    <input type="nom" name="nom" id="nom" value="" />    
                    <p>
                        <label for="password">Mot de passe:</label>
                        <input type="password" name="password" id="password" value="" />
                        <input type="submit" name="submit" value="connection" />
                    </p>
            </form>
            <?php
                if(isset($_POST["submit"])) {
                    if($_POST['nom'] === "Julien" && $_POST['password'] === "1234") {
                           return "OK";
                        }else{
                            return "";
                        }
                    }
        }
    }
?>
