<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DocumentsAnnexesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentsAnnexesRepository::class)]
#[ApiResource]
class DocumentsAnnexes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $nomEntite = null;

    #[ORM\Column(nullable: true)]
    private ?int $idEntite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lienRessource = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getNomEntite(): ?string
    {
        return $this->nomEntite;
    }

    public function setNomEntite(string $nomEntite): static
    {
        $this->nomEntite = $nomEntite;

        return $this;
    }

    public function getIdEntite(): ?int
    {
        return $this->idEntite;
    }

    public function setIdEntite(?int $idEntite): static
    {
        $this->idEntite = $idEntite;

        return $this;
    }

    public function getLienRessource(): ?string
    {
        return $this->lienRessource;
    }

    public function setLienRessource(?string $lienRessource): static
    {
        $this->lienRessource = $lienRessource;

        return $this;
    }
}
