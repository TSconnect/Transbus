<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
#[ApiResource]
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LieuDepart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LieuArrivee;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumeroSiege;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieuDepart(): ?string
    {
        return $this->LieuDepart;
    }

    public function setLieuDepart(string $LieuDepart): self
    {
        $this->LieuDepart = $LieuDepart;

        return $this;
    }

    public function getLieuArrivee(): ?string
    {
        return $this->LieuArrivee;
    }

    public function setLieuArrivee(string $LieuArrivee): self
    {
        $this->LieuArrivee = $LieuArrivee;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getNumeroSiege(): ?int
    {
        return $this->NumeroSiege;
    }

    public function setNumeroSiege(int $NumeroSiege): self
    {
        $this->NumeroSiege = $NumeroSiege;

        return $this;
    }
}
