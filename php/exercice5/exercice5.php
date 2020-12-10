
<?php require "../../menu.php";
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../../menu.css">
</head>

<body>

<form action="" method="POST">

    <input type="text" name="text">
    <input type="submit">

</form>
    <?php
  
  if(isset($_POST['text'])){
    echo "<span class='text'>".$_POST['text']. "</span>";
  }

highlight_file(__FILE__);





?>
</body>





</html>