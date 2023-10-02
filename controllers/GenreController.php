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
use Models\Managers\GenreManager;

// class HomeController hérite de la classe AbstractController et implémente ControllerInterface.
class GenreController extends AbstractController implements ControllerInterface
{

    public function findAllGenre()
    {
        $genreManager = new GenreManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/genre/listGenres.php",
                "data" =>
                [
                    "genre" => $genreManager->findAll(['libelle', "ASC"]),
                ]
            ];
    }

    public function detailGenre($id)
    {
        $genreManager = new GenreManager();
        $filmManager = new FilmManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/genre/detailGenre.php",
                "data" =>
                [
                    "genres" => $genreManager->findOneById($id),
                    "films" => $filmManager->findMovieByGenre($id),
                ]
            ];
    }
}
