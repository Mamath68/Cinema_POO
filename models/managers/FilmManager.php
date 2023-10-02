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
        $sql = "SELECT f.id_film, f.titre, f.image
            FROM film f
            inner join realisateur r
            ON r.id_realisateur = f.realisateur_id
            Where r.id_realisateur = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

    public function findMovieByActeur($id)
    {
        $sql = "SELECT f.id_film, f.titre, f.image
        FROM " . $this->tableName . " f
        INNER JOIN casting c ON c.film_id = f.id_film
        INNER JOIN acteur a ON a.id_acteur = c.acteur_id
        WHERE a.id_acteur = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

    public function findMovieByGenre($id)
    {
        $sql = "SELECT f.id_film, f.titre, f.image
        FROM " . $this->tableName . " f
        INNER JOIN liengenrefilm lgf
        ON f.id_film = lgf.film_id
        INNER JOIN genre g
        ON g.id_genre = lgf.genre_id
        Where g.id_genre = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}
