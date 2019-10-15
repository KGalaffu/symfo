<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LivresLocationRepository")
 */
class LivresLocation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DatesLocation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Patient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Patient;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Livre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatesLocation(): ?\DateTimeInterface
    {
        return $this->DatesLocation;
    }

    public function setDatesLocation(\DateTimeInterface $DatesLocation): self
    {
        $this->DatesLocation = $DatesLocation;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->Patient;
    }

    public function setPatient(?Patient $Patient): self
    {
        $this->Patient = $Patient;

        return $this;
    }

    public function getLivre(): ?Livres
    {
        return $this->Livre;
    }

    public function setLivre(?Livres $Livre): self
    {
        $this->Livre = $Livre;

        return $this;
    }
}
