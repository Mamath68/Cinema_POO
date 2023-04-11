<?php

require_once "bdd/DAO.php";
class ActeurController
{

    public function findAll()
    {
        $dao = new DAO();

        $sql = "SELECT a.id_acteur,CONCAT(a.prenom,' ',a.nom) as nom_acteur, a.img
        FROM acteur a";

        $acteurs = $dao->executerRequete($sql);

        require "view/acteur/listActeurs.php";
    }

    public function findOneById($id)
    {
        $dao = new DAO();

        $sql = "SELECT a.id_acteur,CONCAT(a.prenom,' ',a.nom) as nom_acteur,DATE_FORMAT(a.date_naissance,'%d/%m/%Y') as date_naissance,
        a.nationalite,a.img
        FROM acteur a
        Where a.id_acteur = :id";

        $sql2 = "SELECT f.id_film, CONCAT(ro.prenom,' ',ro.nom) AS nom_role
        FROM casting c
        INNER JOIN film f
        ON f.id_film = c.id_film
        INNER JOIN acteur a
        ON a.id_acteur = c.id_acteur
        INNER JOIN role ro
        ON ro.id_role = c.id_role
        Where a.id_acteur = :id";

        $sql3 = "SELECT f.id_film,f.titre
        FROM film f
        inner join casting c
        ON f.id_film = c.id_film
        INNER JOIN acteur a
        ON a.id_acteur = c.id_acteur
        Where a.id_acteur = :id";

        $acteur = $dao->executerRequete($sql, ['id' => $id]);
        $casting = $dao->executerRequete($sql2, ['id' => $id]);
        $film = $dao->executerRequete($sql3, ['id' => $id]);

        require "view/acteur/detailActeur.php";
    }
}