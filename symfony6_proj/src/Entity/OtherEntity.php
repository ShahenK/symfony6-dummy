<?php

namespace App\Entity;

use App\Repository\OtherEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OtherEntityRepository::class)]
class OtherEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: SomeEntity::class, mappedBy: 'otherEntities')]
    private Collection $someEntites;

    public function __construct()
    {
        $this->someEntites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, SomeEntity>
     */
    public function getSomeEntites(): Collection
    {
        return $this->someEntites;
    }

    public function addSomeEntite(SomeEntity $someEntite): self
    {
        if (!$this->someEntites->contains($someEntite)) {
            $this->someEntites->add($someEntite);
            $someEntite->addOtherEntity($this);
        }

        return $this;
    }

    public function removeSomeEntite(SomeEntity $someEntite): self
    {
        if ($this->someEntites->removeElement($someEntite)) {
            $someEntite->removeOtherEntity($this);
        }

        return $this;
    }
}
