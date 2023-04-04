<?php

require_once "bdd/DAO.php";
class FilmController
{

    public function findAll()
    {
        $dao = new DAO();

        $sql = "SELECT f.id_film,f.titre,/*f.img,*/DATE_FORMAT(f.date_sortie, '%d/%m/%Y') as sortie_date,TIME_FORMAT(SEC_TO_TIME(f.duree*60),'%Hh%i') as duree_film,f.synopsis
        FROM film f";

        $films = $dao->executerRequete($sql);

        require "view/film/listFilms.php";
    }
}