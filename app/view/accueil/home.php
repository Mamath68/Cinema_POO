<?php ob_start()
    ?>
<h1>Bienvenue sur ma page d'Accueil</h1>


<?php

$title = "Accueil";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");