<?php   
require "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>

    <?php

include "fonction SQL.php";

afficher_requet_select("SELECT * FROM `patient` WHERE 1");

?>
<?php
    highlight_file(__FILE__)
?>
</body>
</html>
