<?php

require_once "bdd/DAO.php";
class RoleController
{
    public function findAll()
    {
        $dao = new DAO();

        $sql = "SELECT r.id_role,r.prenom, r.nom
        FROM role r";

        $roles = $dao->executerRequete($sql);

        require "view/role/listRoles.php";
    }

    public function findOneById($id)
    {
        $dao = new DAO();

        $sql = "SELECT r.id_role,r.prenom, r.nom
        FROM role r
        Where r.id_role = :id";

        $role = $dao->executerRequete($sql, ['id' => $id]);

        require "view/role/detailRole.php";
    }
}