<?php

namespace App\Entity;

use App\Repository\AboutMeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AboutMeRepository::class)]
class AboutMe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $MaVeille = null;

    #[ORM\Column(length: 255)]
    private ?string $ProjetUrl = null;

    #[ORM\Column(length: 255)]
    private ?string $ProjetImage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ProjetUrlGitHub = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Poursuite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaVeille(): ?string
    {
        return $this->MaVeille;
    }

    public function setMaVeille(string $MaVeille): static
    {
        $this->MaVeille = $MaVeille;

        return $this;
    }

    public function getProjetUrl(): ?string
    {
        return $this->ProjetUrl;
    }

    public function setProjetUrl(string $ProjetUrl): static
    {
        $this->ProjetUrl = $ProjetUrl;

        return $this;
    }

    public function getProjetImage(): ?string
    {
        return $this->ProjetImage;
    }

    public function setProjetImage(string $ProjetImage): static
    {
        $this->ProjetImage = $ProjetImage;

        return $this;
    }

    public function getProjetUrlGitHub(): ?string
    {
        return $this->ProjetUrlGitHub;
    }

    public function setProjetUrlGitHub(?string $ProjetUrlGitHub): static
    {
        $this->ProjetUrlGitHub = $ProjetUrlGitHub;

        return $this;
    }

    public function getPoursuite(): ?string
    {
        return $this->Poursuite;
    }

    public function setPoursuite(string $Poursuite): static
    {
        $this->Poursuite = $Poursuite;

        return $this;
    }
}
