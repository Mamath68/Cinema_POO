<?php

require_once "bdd/DAO.php";
class RealisateurController
{

    public function findAll()
    {
        $dao = new DAO();

        $sql = "SELECT r.id_realisateur,CONCAT(r.prenom,' ',r.nom) as nom_realisateur,DATE_FORMAT(r.date_naissance,'%d/%m/%Y') as date_naissance,
        r.nationalite
        FROM realisateur r";

        $realisateurs = $dao->executerRequete($sql);

        require "view/realisateur/listRealisateurs.php";
    }
}