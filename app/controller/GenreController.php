<?php

require_once "bdd/DAO.php";
class GenreController
{

    public function findAll()
    {
        $dao = new DAO();

        $sql = "SELECT g.id_genre,g.libelle
        FROM genre g";

        $genres = $dao->executerRequete($sql);
        require "view/genre/listGenres.php";
    }

    public function findOneById($id)
    {
        $dao = new DAO();

        $sql = "SELECT g.id_genre,g.libelle
        FROM genre g
        Where g.id_genre = :id";

        $sql2 = "SELECT f.id_film ,f.titre
        FROM genre g
        INNER JOIN lien_genre_film lgf
        ON g.id_genre = lgf.id_genre
        INNER JOIN film f
        ON f.id_film = lgf.id_film
        Where g.id_genre = :id";

        $genre = $dao->executerRequete($sql, ['id' => $id]);
        $film = $dao->executerRequete($sql2, ['id' => $id]);

        require "view/genre/detailGenre.php";
    }
}