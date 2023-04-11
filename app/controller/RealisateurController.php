<?php

require_once "bdd/DAO.php";
class RealisateurController
{

    public function findAll()
    {
        $dao = new DAO();

        $sql = "SELECT r.id_realisateur , r.img , CONCAT(r.prenom,' ',r.nom) as nom_realisateur
        FROM realisateur r";

        $realisateurs = $dao->executerRequete($sql);

        require "view/realisateur/listRealisateurs.php";
    }

    public function findOneById($id)
    {
        $dao = new DAO();

        $sql = "SELECT r.id_realisateur, r.img, CONCAT(r.prenom,' ',r.nom) as nom_realisateur ,DATE_FORMAT(r.date_naissance,'%d/%m/%Y') as date_naissance, r.nationalite
        FROM realisateur r
        Where r.id_realisateur = :id";

        $sql2 = "SELECT f.id_film, f.titre
        FROM film f
        inner join realisateur r
        on r.id_realisateur = f.id_realisateur
        Where r.id_realisateur = :id";

        $realisateur = $dao->executerRequete($sql, ['id' => $id]);
        $film = $dao->executerRequete($sql2, ['id' => $id]);

        require "view/realisateur/detailRealisateur.php";
    }
}