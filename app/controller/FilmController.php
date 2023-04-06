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

        $sql = "SELECT f.id_film, f.titre, f.img ,DATE_FORMAT(f.date_sortie, '%d/%m/%Y') AS date_sortie, TIME_FORMAT(SEC_TO_TIME(f.duree*60),'%Hh%i') AS duree_du_film, f.synopsis
        FROM film f
        Where f.id_film = :id";

        $film = $dao->executerRequete($sql, ['id' => $id]);

        require "view/film/detailFilm.php";
    }

}