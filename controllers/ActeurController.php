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
use Models\Managers\ActeurManager;
use Models\Managers\RoleManager;

// class HomeController hérite de la classe AbstractController et implémente ControllerInterface.
class ActeurController extends AbstractController implements ControllerInterface
{

    public function findAllActeur()
    {
        $acteurManager = new ActeurManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/acteur/listActeurs.php",
                "data" =>
                [
                    "acteurs" => $acteurManager->findAll(),
                ]
            ];
    }
    public function detailActeur($id)
    {
        $acteurManager = new ActeurManager();
        $filmManager = new FilmManager();
        $roleManager = new RoleManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/acteur/detailActeur.php",
                "data" =>
                [
                    "acteur" => $acteurManager->findOneById($id),
                    "films" => $filmManager->findMovieByActeur($id),
                    "roles" => $roleManager->findRoleByActeur($id),
                ]
            ];
    }
}
