<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\StructureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StructureRepository::class)]
#[ApiResource]
class Structure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $mission = null;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Matériel::class)]
    private Collection $materiel;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Etude::class)]
    private Collection $etudes;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Solutions::class)]
    private Collection $solutions;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Besoin::class)]
    private Collection $besoin;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: Recommandation::class)]
    private Collection $recommandation;

    #[ORM\OneToMany(mappedBy: 'structure', targetEntity: ResultatAudit::class)]
    private Collection $resultatAudit;

    public function __construct()
    {
        $this->materiel = new ArrayCollection();
        $this->etudes = new ArrayCollection();
        $this->solutions = new ArrayCollection();
        $this->besoin = new ArrayCollection();
        $this->recommandation = new ArrayCollection();
        $this->resultatAudit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMission(): ?string
    {
        return $this->mission;
    }

    public function setMission(string $mission): static
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * @return Collection<int, Matériel>
     */
    public function getMateriel(): Collection
    {
        return $this->materiel;
    }

    public function addMateriel(Matériel $materiel): static
    {
        if (!$this->materiel->contains($materiel)) {
            $this->materiel->add($materiel);
            $materiel->setStructure($this);
        }

        return $this;
    }

    public function removeMateriel(Matériel $materiel): static
    {
        if ($this->materiel->removeElement($materiel)) {
            // set the owning side to null (unless already changed)
            if ($materiel->getStructure() === $this) {
                $materiel->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Etude>
     */
    public function getEtudes(): Collection
    {
        return $this->etudes;
    }

    public function addEtude(Etude $etude): static
    {
        if (!$this->etudes->contains($etude)) {
            $this->etudes->add($etude);
            $etude->setStructure($this);
        }

        return $this;
    }

    public function removeEtude(Etude $etude): static
    {
        if ($this->etudes->removeElement($etude)) {
            // set the owning side to null (unless already changed)
            if ($etude->getStructure() === $this) {
                $etude->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Solutions>
     */
    public function getSolutions(): Collection
    {
        return $this->solutions;
    }

    public function addSolution(Solutions $solution): static
    {
        if (!$this->solutions->contains($solution)) {
            $this->solutions->add($solution);
            $solution->setStructure($this);
        }

        return $this;
    }

    public function removeSolution(Solutions $solution): static
    {
        if ($this->solutions->removeElement($solution)) {
            // set the owning side to null (unless already changed)
            if ($solution->getStructure() === $this) {
                $solution->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Besoin>
     */
    public function getBesoin(): Collection
    {
        return $this->besoin;
    }

    public function addBesoin(Besoin $besoin): static
    {
        if (!$this->besoin->contains($besoin)) {
            $this->besoin->add($besoin);
            $besoin->setStructure($this);
        }

        return $this;
    }

    public function removeBesoin(Besoin $besoin): static
    {
        if ($this->besoin->removeElement($besoin)) {
            // set the owning side to null (unless already changed)
            if ($besoin->getStructure() === $this) {
                $besoin->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Recommandation>
     */
    public function getRecommandation(): Collection
    {
        return $this->recommandation;
    }

    public function addRecommandation(Recommandation $recommandation): static
    {
        if (!$this->recommandation->contains($recommandation)) {
            $this->recommandation->add($recommandation);
            $recommandation->setStructure($this);
        }

        return $this;
    }

    public function removeRecommandation(Recommandation $recommandation): static
    {
        if ($this->recommandation->removeElement($recommandation)) {
            // set the owning side to null (unless already changed)
            if ($recommandation->getStructure() === $this) {
                $recommandation->setStructure(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ResultatAudit>
     */
    public function getResultatAudit(): Collection
    {
        return $this->resultatAudit;
    }

    public function addResultatAudit(ResultatAudit $resultatAudit): static
    {
        if (!$this->resultatAudit->contains($resultatAudit)) {
            $this->resultatAudit->add($resultatAudit);
            $resultatAudit->setStructure($this);
        }

        return $this;
    }

    public function removeResultatAudit(ResultatAudit $resultatAudit): static
    {
        if ($this->resultatAudit->removeElement($resultatAudit)) {
            // set the owning side to null (unless already changed)
            if ($resultatAudit->getStructure() === $this) {
                $resultatAudit->setStructure(null);
            }
        }

        return $this;
    }
}
