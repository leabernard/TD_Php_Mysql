<?php   
require "../../menu.php";
?>




<html>
<head>
    <link rel="stylesheet" href="exercice 6 css.css" />
<link rel="stylesheet" href="../../menu.css">
</head>
<body>
     
<div class="label"> 

        <p>civilité: </p>
         <p> nom : </p>   
         <p> prénom :</p>
         <p>  date de naissance:</p>
         <p> adresse  :  </p>
         <p> téléphone:</p>
         <p> mail: </p>
        </div>
      
      
        <div>
        <input type="radio" id="huey" name="drone" value="huey"
                 checked>
          <label for="huey">Mr</label>
        
        
        <p>
          <input type="radio" id="dewey" name="drone" value="dewey">
          <label for="dewey">Mme</label>
        </p>
        
        <p>
          <input type="radio" id="louie" name="drone" value="louie">
          <label for="louie">Mlle</label>
        </p>
    
       
    </p>

   

    <input type="text" id="name" name="name" required
           minlength="4" maxlength="8" size="10">

       

    <input type="text" id="name" name="name" required
           minlength="4" maxlength="8" size="10">
   
<span>
           <select name="pets" id="pet-select">
               <option value="">--</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="">6</option>
               <option value="">7</option>
               <option value="">8</option>
               <option value="">9</option>
               <option value="">10</option>
               <option value="">11</option>
               <option value="">12</option>
               <option value="">13</option>
               <option value="">14</option>
               <option value="">15</option>
               <option value="">16</option>
               <option value="">17</option>
               <option value="">18</option>
               <option value="">19</option>
               <option value="">20</option>
               <option value="">21</option>
               <option value="">22</option>
               <option value="">23</option>
               <option value="">24</option>
               <option value="">25</option>
               <option value="">26</option>
               <option value="">27</option>
               <option value="">28</option>
               <option value="">29</option>
               <option value="">30</option>
               <option value="">31</option>
           </select>
           

           

    

           <select name="pets" id="pet-select">
               <option value="">--</option>
               <option value="1">janvier</option>
               <option value="2">février</option>
               <option value="3">mars</option>
               <option value="4">avril</option>
               <option value="5">mai</option>
               <option value="">juin</option>
               <option value="">juillet</option>
               <option value="">août</option>
               <option value="">septembre</option>
               <option value="">octobre</option>
               <option value="">novembre</option>
               <option value="">décembre</option>
            
            </select>
        </span>
               

               <input type="text" id="name" name="name" required
                      minlength="4" maxlength="8" size="10">
                    </div>            
    

</body>


















</html>