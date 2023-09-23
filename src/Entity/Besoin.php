<?php

namespace App\Entity;

use App\Repository\BesoinRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;


#[ORM\Entity(repositoryClass: BesoinRepository::class)]
#[ApiResource]
class Besoin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $besoin_num = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    #[ORM\Column(length: 1000)]
    private ?string $details = null;

    #[ORM\Column(length: 3000)]
    private ?string $MissionCouverte = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $DocAnnexes = null;

    #[ORM\ManyToOne(inversedBy: 'besoin')]
    private ?Structure $structure = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBesoinNum(): ?float
    {
        return $this->besoin_num;
    }

    public function setBesoinNum(float $besoin_num): static
    {
        $this->besoin_num = $besoin_num;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): static
    {
        $this->details = $details;

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
