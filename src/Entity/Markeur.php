<?php

namespace App\Entity;
use JsonSerializable;
use App\Entity\Markeur;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\MarkeurRepository;

/**
 * @ORM\Entity(repositoryClass=MarkeurRepository::class)
 */
class Markeur implements JsonSerializable
{
    // ... tes autres méthodes et propriétés ...

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'markeTitle' => $this->getMarkeTitle(),
            'longitude'=> $this ->getLongitude(),
            'latitude'=>$this ->getLatitude(),
            'markeImage'=>$this->setMarkeImage(),
            'markerDescription'=>$this->getMarkerDescription(),



            // Ajoute ici toutes les autres propriétés que tu veux inclure dans le JSON
        ];
    }
}

#[ORM\Entity(repositoryClass: MarkeurRepository::class)]
class Markeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $markeTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $markerImage = null;

    #[ORM\Column]
    private ?float $longitude = null;

    #[ORM\Column]
    private ?float $latitude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $markerDescription = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarkeTitle(): ?string
    {
        return $this->markeTitle;
    }

    public function setMarkeTitle(string $markeTitle): static
    {
        $this->markeTitle = $markeTitle;

        return $this;
    }

    public function getMarkerImage(): ?string
    {
        return $this->markerImage;
    }

    public function setMarkerImage(string $markerImage): static
    {
        $this->markerImage = $markerImage;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getMarkerDescription(): ?string
    {
        return $this->markerDescription;
    }

    public function setMarkerDescription(?string $markerDescription): static
    {
        $this->markerDescription = $markerDescription;

        return $this;
    }
}
