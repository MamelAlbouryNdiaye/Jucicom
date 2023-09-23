<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SolutionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SolutionsRepository::class)]
#[ApiResource]
class Solutions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 3000)]
    private ?string $Description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column(length: 255)]
    private ?string $Etat = null;

    #[ORM\Column(length: 3000)]
    private ?string $MissionCouverte = null;

    #[ORM\Column(length: 255)]
    private ?string $DocAnnexes = null;

    #[ORM\ManyToOne(inversedBy: 'solutions')]
    private ?Structure $structure = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): static
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getMissionCouverte(): ?string
    {
        return $this->MissionCouverte;
    }

    public function setMissionCouverte(string $MissionCouverte): static
    {
        $this->MissionCouverte = $MissionCouverte;

        return $this;
    }

    public function getDocAnnexes(): ?string
    {
        return $this->DocAnnexes;
    }

    public function setDocAnnexes(string $DocAnnexes): static
    {
        $this->DocAnnexes = $DocAnnexes;

        return $this;
    }

    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    public function setStructure(?Structure $structure): static
    {
        $this->structure = $structure;

        return $this;
    }
}
