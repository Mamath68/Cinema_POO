<?php

require_once "bdd/DAO.php";
class ActeurController
{

    public function findAll()
    {
        $dao = new DAO();

        $sql = "SELECT a.id_acteur,CONCAT(a.prenom,' ',a.nom) as nom_acteur,DATE_FORMAT(a.date_naissance,'%d/%m/%Y') as date_naissance,
        a.nationalite
        FROM acteur a";

        $acteurs = $dao->executerRequete($sql);

        require "view/acteur/listActeurs.php";
    }
}