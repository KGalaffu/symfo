<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExemplairesRepository")
 */
class Exemplaires
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumLivres;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $livres;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumLivres(): ?int
    {
        return $this->NumLivres;
    }

    public function setNumLivres(int $NumLivres): self
    {
        $this->NumLivres = $NumLivres;

        return $this;
    }

    public function getLivres(): ?Livres
    {
        return $this->livres;
    }

    public function setLivres(?Livres $livres): self
    {
        $this->livres = $livres;

        return $this;
    }
}
