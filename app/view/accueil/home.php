<?php ob_start()
    ?>
<h1>Bienvenu sur ma page d'Accueil</h1>


<?php

$title = "Accueil";
$contenu = ob_get_clean(); //temporisation de sortie

require("view/layout.php");