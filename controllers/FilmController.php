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
use Models\Managers\RoleManager;
use Models\Managers\ActeurManager;
use Models\Managers\RealisateurManager;

// class HomeController hérite de la classe AbstractController et implémente ControllerInterface.
class FilmController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        return [
            "view" => VIEW_DIR . "home.php",
        ];
    }

    public function findAllMovies()
    {
        $filmManager = new FilmManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/film/listFilms.php",
                "data" =>
                [
                    "film" => $filmManager->findAll(['note', "DESC"]),
                ]
            ];
    }
    public function detailFilm($id)
    {
        $filmManager = new FilmManager();
        $genreManager = new GenreManager();
        $roleManager = new RoleManager();
        $ActeurManager = new ActeurManager();

        return
            [
                "view" => VIEW_DIR . "Cinema/film/detailFilm.php",
                "data" =>
                [
                    "film" => $filmManager->findOneById($id),
                    "genre" => $genreManager->findGenreByMovie($id),
                    "role" => $roleManager->findRoleByMovie($id),
                    "acteur" => $ActeurManager->findActeurByMovie($id),
                ]
            ];
    }
    //fonction pour gérer le traitement de la requête d'ajout de film 
    public function addFilm()
    {
        if (isset($_POST)) {

            $titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $image = filter_input(INPUT_POST, "image", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $dateSortie = filter_input(INPUT_POST, "dateSortie", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $duree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $synopsis = filter_input(INPUT_POST, "synopsis", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $note = filter_input(INPUT_POST, "note", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $realisateur = filter_input(INPUT_POST, "realisateur_id", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($titre && $image && $dateSortie && $duree && $synopsis && $note && $realisateur) {
                $filmManager = new FilmManager();

                $film = !$filmManager->add(
                    [
                        "titre" => $titre,
                        "image" => $image,
                        "dateSortie" => $dateSortie,
                        "duree" => $duree,
                        "synopsis" => $synopsis,
                        "note" => $note,
                        "realisateur_id" => $realisateur
                    ]
                );
                $this->redirectTo("film", "findAllMovies");
                return
                    [
                        "view" => VIEW_DIR . "cinema/addFilm.php",
                        "data" =>
                        [
                            "film" => $film,
                        ]
                    ];
            } 
                
                $filmManager = new FilmManager();
                $realisateur = new RealisateurManager();
                return
                    [
                        "view" => VIEW_DIR . "cinema/addFilm.php",
                        "data" =>
                        [
                            "RendezVous" => $filmManager,
                            "realisateur" => $realisateur->findAll(),
                        ]
                    ];
            }
    }

    public function addFilmForm()
    {
        $realisateur = new RealisateurManager();
        return
            [
                "view" => VIEW_DIR . "cinema/addFilm.php",
                "data" =>
                [
                    "realisateurs" => $realisateur->findAll(),
                ]
            ];
    }
    public function addReal()
    {
        // $dao = new DAO();

        $sql = "SELECT r.id_realisateur, r.prenom, r.nom
        from realisateur r";
        // $realisateurs = $dao->executerRequete($sql);

        require "view/accueil/home.php";
    }
    public function deleteFilm($id)
    {
        $filmManager = new FilmManager();

        if ($filmManager) {
            $filmManager->delete($id);

            $this->redirectTo("film", "findAllMovies");
            return [
                "view" => VIEW_DIR . "cinema/film/listFilms.php",
            ];
        }
    }
}
