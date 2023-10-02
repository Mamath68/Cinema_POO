<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class FilmManager extends Manager
{

    protected $className = "Models\Entities\Films";
    protected $tableName = "film";

    public function __construct()
    {
        parent::connect();
    }

    public function findDetailMovie($id)
    {
        $sql = "SELECT f.id_film, f.titre, f.image ,f.dateSortie, TIME_FORMAT(SEC_TO_TIME(f.duree*60),'%Hh%i') AS duree_du_film, f.synopsis, f.note, re.id_realisateur, re.realisateur
        FROM " . $this->tableName . " f
        INNER JOIN realisateur re
        ON re.id_realisateur = f.realisateur_id
        Where f.id_film = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

    public function findFilmByRealisateur($id)
    {
        $sql = "SELECT f.id_film, f.titre
            FROM film f
            inner join realisateur r
            ON r.id_realisateur = f.realisateur_id
            Where r.id_realisateur = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}
