<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntreeRepository")
 */
class Entree
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
    private $numeroEntree;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEntree;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroEntree(): ?string
    {
        return $this->numeroEntree;
    }

    public function setNumeroEntree(string $numeroEntree): self
    {
        $this->numeroEntree = $numeroEntree;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->dateEntree;
    }

    public function setDateEntree(\DateTimeInterface $dateEntree): self
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }
}
