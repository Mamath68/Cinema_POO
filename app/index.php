<?php

// je demande le fichier physique ou j'utilise un autoloader 

require_once "controller/FilmController.php";
require_once "controller/ActeurController.php";
require_once "controller/AccueilController.php";
require_once "controller/RealisateurController.php";
require_once "controller/GenreController.php";
require_once "controller/RoleController.php";

// j'instancie les controlleurs 
$ctrlFilm = new FilmController();
$ctrlAccueil = new AccueilController();
$ctrlActeur = new ActeurController();
$ctrlRealisateur = new RealisateurController();
$ctrlGenres = new GenreController();
$ctrlRoles = new RoleController();

// je switch entre difféents case 
// si j'ai une "action "dans l'URL , cette action donnera accès à un controlleur et à la fonction demandée (si elle existe) 
if (isset($_GET['action'])) {
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // car possible d'injecter du code malveillant dans l'URL 
    switch ($_GET['action']) {
        case "listFilms":
            $ctrlFilm->findAll();
            break;
        // case "detailFilm":
        //     $ctrlFilm->findOneById($id);
        //     break;
        case "listActeurs":
            $ctrlActeur->findAll();
            break;
        case "listRealisateurs":
            $ctrlRealisateur->findAll();
            break;
        case "listGenres":
            $ctrlGenres->findAll();
            break;
        case "listRoles":
            $ctrlRoles->findAll();
            break;
        default:
            $ctrlAccueil->pageAccueil();
            break;
    }
} else {
    $ctrlAccueil->pageAccueil();
    // ma page par défault si l'action demandée n'est pas trouvée 
}