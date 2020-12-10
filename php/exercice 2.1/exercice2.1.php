
<?php require "../../menu.php";
?>
<html>

<head>
<link rel="stylesheet" href="../../menu.css">

</head>

<body>


    <?php
  $tableau = array(1, 12, 45, 78, 54);
echo '<table border="1"><tr>';
  for($i=0;$i<5;$i++)
  {
    echo"<td>".$tableau["$i"]."</td>";
    
  }
  echo "</tr></table>";
  


highlight_file(__FILE__);


  ?>
<table border="1" 
    <tr>
     <td rowspan="5"> </td>
     <td>1</td>
    <td>12</td>
    <td>45</td>
    <td>78</td>
    <td>54</td>
    </tr>
</table>

</body>






</html>