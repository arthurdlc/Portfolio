<?php

namespace App\Entity;

use App\Repository\CompetencesReseauRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompetencesReseauRepository::class)]
class CompetencesReseau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $niveauComp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNiveauComp(): ?int
    {
        return $this->niveauComp;
    }

    public function setNiveauComp(int $niveauComp): static
    {
        $this->niveauComp = $niveauComp;

        return $this;
    }
}
