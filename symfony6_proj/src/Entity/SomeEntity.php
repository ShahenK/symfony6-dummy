<?php

namespace App\Entity;

use App\Repository\SomeEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SomeEntityRepository::class)]
class SomeEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3)]
    private ?string $title = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $amountOfEntity = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeInterface $insertDate = null;

    #[ORM\ManyToMany(targetEntity: OtherEntity::class, inversedBy: 'someEntites')]
    private Collection $otherEntities;

    public function __construct()
    {
        $this->otherEntities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAmountOfEntity(): ?int
    {
        return $this->amountOfEntity;
    }

    public function setAmountOfEntity(?int $amountOfEntity): self
    {
        $this->amountOfEntity = $amountOfEntity;

        return $this;
    }

    public function getInsertDate(): ?\DateTimeInterface
    {
        return $this->insertDate;
    }

    public function setInsertDate(\DateTimeInterface $insertDate): self
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    /**
     * @return Collection<int, OtherEntity>
     */
    public function getOtherEntities(): Collection
    {
        return $this->otherEntities;
    }

    public function addOtherEntity(OtherEntity $otherEntity): self
    {
        if (!$this->otherEntities->contains($otherEntity)) {
            $this->otherEntities->add($otherEntity);
        }

        return $this;
    }

    public function removeOtherEntity(OtherEntity $otherEntity): self
    {
        $this->otherEntities->removeElement($otherEntity);

        return $this;
    }
}
