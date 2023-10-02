<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class ActeurManager extends Manager
{

    protected $className = "Models\Entities\Acteurs";
    protected $tableName = "acteur";

    public function __construct()
    {
        parent::connect();
    }

    public function findActeurByMovie($id)
    {
        $sql = "SELECT f.id_film, f.titre, a.id_acteur, a.acteur
            FROM " . $this->tableName . " a   
            INNER JOIN casting c
            ON c.acteur_id = a.id_acteur
            INNER JOIN film f 
            ON f.id_film = c.film_id
            INNER JOIN role r
            ON r.id_role = c.role_id
            WHERE f.id_film = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

}