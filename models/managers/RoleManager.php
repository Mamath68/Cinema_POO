<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class RoleManager extends Manager
{

    protected $className = "Models\Entities\Roles";
    protected $tableName = "role";

    public function __construct()
    {
        parent::connect();
    }

    public function findRoleByMovie($id)
    {
        $sql = "SELECT f.id_film, f.titre, r.id_role, r.prenom, r.nom
            FROM " . $this->tableName . " r
            INNER JOIN casting c
            ON r.id_role = c.role_id
            INNER JOIN film f 
            ON f.id_film = c.film_id
            INNER JOIN acteur a
            ON a.id_acteur = c.acteur_id
            WHERE f.id_film = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}