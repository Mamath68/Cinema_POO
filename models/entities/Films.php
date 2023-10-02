<?php

namespace Models\Entities;

use Core\Entity;

final class Films extends Entity
{

    private $id;
    private $titre;
    private $image;
    private $duree;
    private $synopsis;
    private $note;
    private \DateTime $dateSortie;
    private $realisateur;

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

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = ucfirst($titre);
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getDateSortie()
    {
        return $this->dateSortie->format("d/m/Y");
    }

    public function setDateSortie($date)
    {
        $this->dateSortie = new \DateTime($date);
        return $this;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }

    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getTitre() . " " . $this->getImage() . " " . $this->getDateSortie() . " " . $this->getDuree() . " " . $this->getSynopsis() . " " . $this->getNote() . " " . $this->getRealisateur();
    }
}
