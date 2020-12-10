<nav>
    <ul>
        <li class="deroulant"><a>web</a>
            <ul class="sous">
                <li><a data-href="web/exo1.php"> exercice 1 </a></li>
                <li><a data-href="web/exercice2.php">exercice 2 </a></li>
                <li><a data-href="web/exercice3.php">exercice 3 </a></li>
                <li><a data-href="web/exercice 1 css/exercie 1 du css.php">exercice 1 css </a> </li>
                <li><a data-href="web/exercice2 css/exercice 2 du css.php">exercice 2 css </a></li>
                <li><a data-href="web/exercice 3 css/exercice 3 html du css.php">exercice 3 css </a></li>
                <li><a data-href="web/exercice 4 css/exercice 4 html du css.php">exercice 4 css </a></li>
                <li><a data-href="web/exercice 1a/exercice 1a html.php">exercice 1 a </a></li>
                <li><a data-href="web/exercice 2a/exercice 2a html.php">exercice 2 a </a> </li>
                <li><a data-href="web/exercice 3a/exercice 3a html.php">exercice 3 a </a></li>
                <li><a data-href="web/exercice 6/exercice 6 html.php">exercice 6 </a></div>
                </li>
                <li><a data-href="mon-site-internet/menu.php"> mon site final html</a></li>

            </ul>
        </li>
        <li class="deroulant"><a>php</a>
            <ul class="sous">
                <li><a data-href="php/exercice 1/exercice1.php">exercice1 php</a></li>
                <li><a data-href="php/exercice 2.1/exercice2.1.php">exercice2.1 php</a></li>
                <li><a data-href="php/exercice2.2/exercice2.2.php">exercice2.2 php</a></li>
                <li><a data-href="php/exercice3/exercice3.php">exercice3 php</a></li>
                <li><a data-href="php/exercice4/exercice4.php">exercice4 php</a></li>
                <li><a data-href="php/exercice5/exercice5.php">exercice5 php</a></li>
                <li><a data-href="php/exercice6/exercice6.php">exercice6 php</a></li>
                <li><a data-href="php/exercice 7/php7.php">exercice7 php</a></li>
                <li><a data-href="php/final/final.php">exercice final php</a></li>

            </ul>
        </li>
        <li class="deroulant"><a>php 2</a>
            <ul class="sous">
                <li><a data-href="PHP_Partie2_Exo1.php">exercice1 php2</a></li>
                <li><a data-href="PHP_Partie2_exo2.php">exercice2 php2</a></li>
                <li><a data-href="PHP_Partie2_exo3.php">exercice3 php2</a></li>
                <li><a data-href="PHP_Partie2_exoFinal.php">exercice4 php2</a></li>
                <li><a data-href="fonction.php">les fonctions</a></div>

            </ul>
        </li>
        <li class="deroulant"><a>BDD TD1</a>
            <ul class="sous">
                <li><a data-href="BDD_TD1_Exo1.php">exercice 1 </a></li>
                <li><a data-href="BDD_TD1_Exo2.php">exercie 2</a></li>
                <li><a data-href="BDD_TD1_Exo3.php">exercie 3</a></li>
                <li><a data-href="BDD_TD1_Exo4.php">exercice 4 </a></li>
                <li><a data-href="BDD_TD1_Exo5.php">exercie 5</a></li>
                <li><a data-href="BDD_TD1_Exo6.php">exercie 6</a></li>
                <li><a data-href="BDD_TD1_Exo7.php">exercie 7</a></li>
            </ul>
        </li>
        <li class="deroulant"><a>BDD TD2</a> >
            <ul class="sous">
                <li><a data-href="BDD_TD2_Exo1.php">exercice 1 </a></li>
                <li><a data-href="BDD_TD2_Exo2.php">exercie 2</a></li>
                <li><a data-href="BDD_TD2_Exo3.php">exercie 3</a></li>

            </ul>
        </li>
        <li class="deroulant"><a>BDD TD3</a> >
            <ul class="sous">
                <li><a data-href="SQL_TD3_Exo2.php">exercice 2 </a></li>


            </ul>
        </li>
        <li class="deroulant"><a>BDD TD4</a> >
            <ul class="sous">
                <li><a data-href="SQL_TD4_Exo1.php">exercice 1 </a></li>
                <li><a data-href="SQL_TD4_Exo2.php">exercice 2 </a></li>
                <li><a data-href="SQL_TD4_Exo3.php">exercice 3 </a></li>


            </ul>
        </li>
    </ul>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script type="text/javascript">

    const origine    = "TD_Php_Mysql";
    const current = window.location.href.split("/");

    current.splice (
            current.indexOf(origine)+1,
            current.length
    )


    $("a[data-href]").click(function(to) {

        window.location.assign(
            current.join("/") +"/"+ to.target.dataset.href
        );
        
    })
</script>