<?php

namespace App\Entity;

use App\Repository\ExcelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExcelRepository::class)]
class Excel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bandName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(nullable: true)]
    private ?int $startYear = null;

    #[ORM\Column(nullable: true)]
    private ?int $endYear = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $founders = null;

    #[ORM\Column(nullable: true)]
    private ?int $members = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $musicalMovement = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $prresentation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBandName(): ?string
    {
        return $this->bandName;
    }

    public function setBandName(?string $bandName): self
    {
        $this->bandName = $bandName;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getStartYear(): ?int
    {
        return $this->startYear;
    }

    public function setStartYear(?int $startYear): self
    {
        $this->startYear = $startYear;

        return $this;
    }

    public function getEndYear(): ?int
    {
        return $this->endYear;
    }

    public function setEndYear(?int $endYear): self
    {
        $this->endYear = $endYear;

        return $this;
    }

    public function getFounders(): ?string
    {
        return $this->founders;
    }

    public function setFounders(?string $founders): self
    {
        $this->founders = $founders;

        return $this;
    }

    public function getMembers(): ?int
    {
        return $this->members;
    }

    public function setMembers(?int $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function getMusicalMovement(): ?string
    {
        return $this->musicalMovement;
    }

    public function setMusicalMovement(?string $musicalMovement): self
    {
        $this->musicalMovement = $musicalMovement;

        return $this;
    }

    public function getPrresentation(): ?string
    {
        return $this->prresentation;
    }

    public function setPrresentation(?string $prresentation): self
    {
        $this->prresentation = $prresentation;

        return $this;
    }
}
