<?php

// Ouvre le namespace Controller
namespace Controllers;

// fait appel a Session dans le namespace Core
use Core\Session;
// fait appel a AbstractController dans le namespace Core
use Core\AbstractController;
// fait appel a ControllerInterface dans le namespace Core
use Core\ControllerInterface;
// use Models\Managers\FilmManager;
use Models\Managers\GenreManager;
// use Models\Managers\RealisateurManager;

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

    public function findMovieById($id)
    {
        $genreManager = new GenreManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/genre/detailGenre.php",
                "data" =>
                [
                    "genre" => $genreManager->findMovieByGenre($id),
                ]
            ];
    }
}
