<?php

namespace Models\Entities;

use Core\Entity;

final class Acteurs extends Entity
{

    private $id;
    private $acteur;
    private $sexe;
    private $img;
    private \DateTime $dateNaissance;
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

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = new \DateTime($dateNaissance);
        return $this;
    }

    public function getActeur()
    {
        return $this->acteur;
    }

    public function setActeur($acteur)
    {
        $this->acteur = $acteur;
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
        return $this->getId() . " " . $this->getDateNaissance() . " " . $this->getActeur() . " " . $this->getSexe() . " " . $this->getImg() . " " . $this->getNationalite();
    }
}
