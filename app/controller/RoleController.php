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
}