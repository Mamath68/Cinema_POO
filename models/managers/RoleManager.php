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
        $sql = "SELECT f.id_film, f.titre, r.id_role, r.role
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
    public function findRoleByActeur($id)
    {
        $sql = "SELECT r.id_role, r.role
        FROM " . $this->tableName . " r
        INNER JOIN casting c ON c.role_id = r.id_role
        INNER JOIN acteur a ON a.id_acteur = c.acteur_id
        WHERE a.id_acteur = :id";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}
