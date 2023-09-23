<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\RecommandationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecommandationRepository::class)]
#[ApiResource]
class Recommandation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $recommandation_num = null;

    #[ORM\Column(length: 1000)]
    private ?string $details = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $besoin_couvert = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $structure_couvert = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $DocAnnexes = null;

    #[ORM\ManyToOne(inversedBy: 'recommandation')]
    private ?Structure $structure = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecommandationNum(): ?float
    {
        return $this->recommandation_num;
    }

    public function setRecommandationNum(float $recommandation_num): static
    {
        $this->recommandation_num = $recommandation_num;

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

    public function getBesoinCouvert(): ?string
    {
        return $this->besoin_couvert;
    }

    public function setBesoinCouvert(string $besoin_couvert): static
    {
        $this->besoin_couvert = $besoin_couvert;

        return $this;
    }

    public function getStructureCouvert(): ?string
    {
        return $this->structure_couvert;
    }

    public function setStructureCouvert(string $structure_couvert): static
    {
        $this->structure_couvert = $structure_couvert;

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
