<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class GenreManager extends Manager
{

    protected $className = "Models\Entities\Genres";
    protected $tableName = "genre";

    public function __construct()
    {
        parent::connect();
    }

    public function findGenreByMovie($id)
    {
        $sql = "SELECT f.id_film, f.titre, g.id_genre, g.libelle
        FROM " . $this->tableName . " g
        INNER JOIN liengenrefilm lgf
        ON g.id_genre = lgf.genre_id
        INNER JOIN film f
        ON f.id_film = lgf.film_id
        Where lgf.film_id = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}
