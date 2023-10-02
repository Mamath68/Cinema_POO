<?php

namespace Models\Entities;

use Core\Entity;

final class Acteurs extends Entity
{

    private $id;
    private $firstname;
    private $name;
    private $sexe;
    private $img;
    private \DateTime $dateNaissance;
    private \DateTime $dateDeces;
    private $nationalite;

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

    public function getDateNaissance()
    {
        return $this->dateNaissance->format("d/m/Y");
    }

    public function setDateNaissance()
    {
        $this->dateNaissance = new \DateTime;
        return $this;
    }
    public function getDateDeces()
    {
        return $this->dateDeces->format("d/m/Y");
    }

    public function setDateDeces()
    {
        $this->dateDeces = new \DateTime;
        return $this;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getNationalite()
    {
        return $this->nationalite;
    }

    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getDateNaissance() . " " . $this->getDateDeces() . " " . $this->getFirstname() . " " . $this->getName() . " " . $this->getSexe() . " " . $this->getImg() . " " . $this->getNationalite();
    }
}
