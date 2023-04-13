<?php
require_once "bdd/DAO.php";
class FilmController
{
    public function findAll()
    {
        $dao = new DAO();

        $sql = "SELECT f.id_film,f.titre,f.img
        FROM film f";

        $films = $dao->executerRequete($sql);

        require "view/film/listFilms.php";
    }
    public function findOneById($id)
    {
        $dao = new DAO();

        $sql = "SELECT f.id_film, f.titre, f.img ,DATE_FORMAT(f.date_sortie, '%d/%m/%Y') AS date_sortie, TIME_FORMAT(SEC_TO_TIME(f.duree*60),'%Hh%i') AS duree_du_film, f.synopsis, f.note, re.id_realisateur, CONCAT(re.prenom,' ',re.nom) as nom_realisateur
        FROM film f
        INNER JOIN realisateur re
        ON re.id_realisateur = f.id_realisateur
        Where f.id_film = :id";

        $sql2 = "SELECT a.id_acteur,CONCAT(a.prenom,' ',a.nom) as nom_acteur, CONCAT(ro.prenom,' ' ,ro.nom) AS nom_role
        FROM casting c
        INNER JOIN film f
        ON f.id_film = c.id_film
        INNER JOIN acteur a
        ON a.id_acteur = c.id_acteur
        INNER JOIN role ro
        ON ro.id_role = c.id_role
        Where f.id_film = :id";

        $sql3 = "SELECT f.id_film,g.id_genre,g.libelle
        FROM genre g
        INNER JOIN lien_genre_film lgf
        ON g.id_genre = lgf.id_genre
        INNER JOIN film f
        ON f.id_film = lgf.id_film
        Where f.id_film = :id";

        $film = $dao->executerRequete($sql, ['id' => $id]);
        $casting = $dao->executerRequete($sql2, ['id' => $id]);
        $genre = $dao->executerRequete($sql3, ['id' => $id]);

        require "view/film/detailFilm.php";
    }
    //fonction pour gérer le traitement de la requête d'ajout de film 
    public function addInput()
    {
        if (isset($_POST['submit'])) {
            $titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $img = filter_input(INPUT_POST, "img", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $duree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_NUMBER_INT);
            $date_sortie = $_POST['date_sortie'];
            $note = filter_input(INPUT_POST, "note", FILTER_SANITIZE_NUMBER_FLOAT);
            $synopsis = filter_input(INPUT_POST, "synopsis", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $realisateurs = $_POST['id_realisateur'];

            if ($titre && $img && $duree && $note && $synopsis && $realisateurs) {
                $dao = new DAO();

                $sql = "INSERT INTO film (titre, img ,date_sortie, duree, synopsis, note, id_realisateur) VALUES (:titre,:img,:date_sortie, :duree, :synopsis, :note, :id_realisateur)";

                $params = [
                    "titre" => $titre,
                    "img" => $img,
                    "date_sortie" => $date_sortie,
                    "duree" => $duree,
                    "synopsis" => $synopsis,
                    "note" => $note,
                    "id_realisateur" => $realisateurs
                ];
                $films = $dao->executerRequete($sql, $params);
                echo "vous avez ajouté un film avec succès";
                header('Location:index.php?action=listFilms');
            } else {
                echo "Erreur 404 ";
            }
        } else {
            echo "Pikachu";
        }
    }
    public function addReal()
    {
        $dao = new DAO();

        $sql = "SELECT r.id_realisateur, r.prenom, r.nom
        from realisateur r";
        $realisateurs = $dao->executerRequete($sql);

        require "view/accueil/home.php";
    }
    public function delFilm($id)
    {
        $dao = new DAO();

        $sql = "DELETE FROM film f WHERE f.id_film = :id";
        $sql2 = "DELETE FROM casting c WHERE c.id_film = :id";
        $sql3 = "DELETE FROM lien_genre_film lgf WHERE lgf.id_film = :id";

        $params = ['id' => $id];
        $casting = $dao->executerRequete($sql2, $params);
        $lgf = $dao->executerRequete($sql3, $params);
        $films = $dao->executerRequete($sql, $params);
        header('Location:index.php?action=listFilms');
    }

}