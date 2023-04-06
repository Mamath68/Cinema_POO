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

        $sql = "SELECT f.id_film, f.titre, f.img ,DATE_FORMAT(f.date_sortie, '%d/%m/%Y') AS date_sortie, TIME_FORMAT(SEC_TO_TIME(f.duree*60),'%Hh%i') AS duree_du_film, f.synopsis, CONCAT(re.prenom,' ',re.nom) as nom_realisateur
        FROM film f
        INNER JOIN realisateur re
        ON re.id_realisateur = f.id_realisateur
        Where f.id_film = :id";

        $sql2 = "SELECT CONCAT(a.prenom,' ',a.nom) as nom_acteur, CONCAT(ro.prenom,' ' ,ro.nom) AS nom_role
        FROM casting c
        INNER JOIN film f
        ON f.id_film = c.id_film
        INNER JOIN acteur a
        ON a.id_acteur = c.id_acteur
        INNER JOIN role ro
        ON ro.id_role = c.id_role
        Where f.id_film = :id";

        $sql3 = "SELECT f.id_film, g.libelle
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
}