<?php require "../../menu.php";
?>

<html>
<head>
<link rel="stylesheet" href="../../menu.css">
</head>
<body>
    
<?php
$array=[ 
[ "nom"=> "vic",
   "prenom" =>"tim",
   "motDePass" => "4111",
],
[
"nom" => "chirac",
"prenom" =>"jacque",
"motDePass" => "4112",
],
[
    "nom"=> "poutine",
   "prenom" =>"maurice",
   "motDePass" => "4113",
],
[
    "nom"=> "macron",
   "prenom" =>"brigitte",
   "motDePass" => "4114",
],
[
    "nom"=> "LePen",
   "prenom" =>"marine",
   "motDePass" => "4115",
]
];
echo '<table border="1">';
for($i=0;$i<5;$i++)
{
    echo '<tr><td>'.$array[$i]["nom"].' '.$array[$i]["prenom"].' '.$array[$i]["motDePass"].' '. '</td></tr>';
}
echo "</table>";
highlight_file(__FILE__);
?>
</body>


</html>