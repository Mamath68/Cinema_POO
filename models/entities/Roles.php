<?php

namespace Models\Entities;

use Core\Entity;

final class Roles extends Entity
{

    private $id;
    private $role;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = ucfirst($role);
    }
    

    public function __toString()
    {
        return $this->getId() . " " . $this->getRole();
    }
}
