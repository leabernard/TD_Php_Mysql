<?php   
require "../menu.php";
?>





<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="menu.css" />  <!--titre du site ainsi que le liens vers le css-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../menu.css">
    <!--pour que les accend soit afficher-->
    <title>site de Léa</title>


</head>

<body>
     
    <div class="espace"></div>
    <div class="bandeau"> <!--classe qui es relier au css pour faire un bandeau dans le menu pour y mettre les boutons-->



        <center class="bouton">
            <a href="cvFr.html">
                <!--bouton du CV avec la balise from et l'action du bouton qui est le lien vers la page du cv-->
                <button class="bouton1" type="button">CV</button>
            </a>

            <a href="VTT.html">
                <button class="bouton1"> type de VTT </button>
            </a>


            <a href="discipline.html">
                <button class="bouton1"> type de discipline </button>
            </a>
            <a href="protection.html">
                <button class="bouton1"> protection </button>  <!--bouton protection qui est relier a la page html protection il apparait dans le menu avec les autres bouton-->
            </a>

            <a href="compétitions.html">
                <button class="bouton1"> compétitions/événements </button>
            </a>

            <a href="pratiquer.html">
                <button class="bouton1"> où le pratiquer </button>
            </a>
            <a href="rideur.html">
                <button class="bouton1">les rideurs</button>
            </a>
            <a href="video.html">
                <button class="bouton1"> photo/ vidéo </button>
            </a>
            <a href="Form.html">
                <button class="bouton1">  Me contacter </button>
            </a>

        </center>

    </div>
    <div class="theme"> 
            <p> Mon site internet va parler du VTT </p>
            <p>on va d'abord parler différents type de VTT et des protections  </p>
            <p>puis de des disclipline lier au VTT ainsi que les compétitions liers </p>          <!--le sujet sur quoi mon site va parler-->
            <p>et nous finirons par parler des rideurs les plus connu et ou pratiquer ces sports .</p>
        </div>

    <div class="footer">
        <H1> Me contacter </H1>   <!--bas de page avec mon adresse mail en gras -->
        <div class="pied"><strong><span> mon adresse mail: lbernard@la-providence.net</span></strong></div>

    </div>




</html>