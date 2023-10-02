<?php

namespace Models\Entities;

use Core\Entity;
use DateTime;

final class Realisateurs extends Entity
{

    private $id;
    private $realisateur;
    private $img;
    private $sexe;
    private DateTime $dateNaissance;
    private DateTime $dateMort;
    private $Nationalite;

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
        $this->dateNaissance = new DateTime() ;

    }

    public function getDateMort()
    {
        return $this->dateMort->format("d/m/Y");
    }

    public function setDateMort()
    {
        $this->dateMort = new DateTime();
    }

    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getNationalite()
    {
        return $this->Nationalite;
    }

    public function setNationalite($Nationalite)
    {
        $this->Nationalite = $Nationalite;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getDateNaissance() . " " . $this->getDateMort() . " " . $this->getRealisateur() . " " . $this->getImg() . " " . $this->getSexe() . " " . $this->getNationalite();
    }

    /**
     * Get the value of dateNaissance
     */ 

}
