<?php

namespace Models\Entities;

use Core\Entity;

final class Roles extends Entity
{

    private $id;
    private $prenom;
    private $nom;

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

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = ucfirst($prenom);
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = ucfirst($nom);
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getPrenom() . " " . $this->getNom();
    }
}
