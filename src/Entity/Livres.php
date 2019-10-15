<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LivresRepository")
 */
class Livres
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Auteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Resume;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombresLivresAchetes;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DatesDachats;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DatesDemprunt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Dispo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Images;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->Resume;
    }

    public function setResume(string $Resume): self
    {
        $this->Resume = $Resume;

        return $this;
    }

    public function getNombresLivresAchetes(): ?int
    {
        return $this->NombresLivresAchetes;
    }

    public function setNombresLivresAchetes(int $NombresLivresAchetes): self
    {
        $this->NombresLivresAchetes = $NombresLivresAchetes;

        return $this;
    }

    public function getDatesDachats(): ?\DateTimeInterface
    {
        return $this->DatesDachats;
    }

    public function setDatesDachats(\DateTimeInterface $DatesDachats): self
    {
        $this->DatesDachats = $DatesDachats;

        return $this;
    }

    public function getDatesDemprunt(): ?\DateTimeInterface
    {
        return $this->DatesDemprunt;
    }

    public function setDatesDemprunt(\DateTimeInterface $DatesDemprunt): self
    {
        $this->DatesDemprunt = $DatesDemprunt;

        return $this;
    }

    public function getDispo(): ?bool
    {
        return $this->Dispo;
    }

    public function setDispo(bool $Dispo): self
    {
        $this->Dispo = $Dispo;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->Images;
    }

    public function setImages(string $Images): self
    {
        $this->Images = $Images;

        return $this;
    }
}
