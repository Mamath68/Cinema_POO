<?php

// Ouvre le namespace Controller
namespace Controllers;

// fait appel a Session dans le namespace Core
use Core\Session;
// fait appel a AbstractController dans le namespace Core
use Core\AbstractController;
// fait appel a ControllerInterface dans le namespace Core
use Core\ControllerInterface;
use Models\Managers\FilmManager;
// use Models\Managers\CastingManager;
// use Models\Managers\GenreManager;
use Models\Managers\RealisateurManager;

// class HomeController hérite de la classe AbstractController et implémente ControllerInterface.
class RealisateurController extends AbstractController implements ControllerInterface
{
    public function findAllRealisateur()
    {
        $realisateurManager = new RealisateurManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/realisateur/listRealisateurs.php",
                "data" =>
                [
                    "realisateur" => $realisateurManager->findAll(),
                ]
            ];
    }

    public function detailRealisateur($id){
        $realisateurManager = new RealisateurManager();
        $filmManager = new FilmManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/Realisateur/detailRealisateur.php",
                "data" =>
                [
                    "realisateur" => $realisateurManager->findOneById($id),
                    "films" => $filmManager->findFilmByRealisateur($id),
                ]
            ];
    }
}
