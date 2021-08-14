<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
#[ApiResource(
    collectionOperations: ['get', 'post'],
    itemOperations: ['get'],
)]
class Annonce
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
     * @ORM\Column(type="datetime")
     */
    private $DateEtHeureDepart;

    /**
     * @ORM\Column(type="float")
     */
    private $PrixTrajet;

    /**
     * @ORM\Column(type="integer")
     */
    private $NombrePlaceDisponible;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomChauffeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeVehicule;

    /**
     * @ORM\Column(type="date")
     */
    private $DatePublication;

    /**
     * @ORM\Column(type="date")
     */
    private $DateExpiration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EtatAnnonce;

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

    public function getDateEtHeureDepart(): ?\DateTimeInterface
    {
        return $this->DateEtHeureDepart;
    }

    public function setDateEtHeureDepart(\DateTimeInterface $DateEtHeureDepart): self
    {
        $this->DateEtHeureDepart = $DateEtHeureDepart;

        return $this;
    }

    public function getPrixTrajet(): ?float
    {
        return $this->PrixTrajet;
    }

    public function setPrixTrajet(float $PrixTrajet): self
    {
        $this->PrixTrajet = $PrixTrajet;

        return $this;
    }

    public function getNombrePlaceDisponible(): ?int
    {
        return $this->NombrePlaceDisponible;
    }

    public function setNombrePlaceDisponible(int $NombrePlaceDisponible): self
    {
        $this->NombrePlaceDisponible = $NombrePlaceDisponible;

        return $this;
    }

    public function getNomChauffeur(): ?string
    {
        return $this->NomChauffeur;
    }

    public function setNomChauffeur(string $NomChauffeur): self
    {
        $this->NomChauffeur = $NomChauffeur;

        return $this;
    }

    public function getTypeVehicule(): ?string
    {
        return $this->TypeVehicule;
    }

    public function setTypeVehicule(string $TypeVehicule): self
    {
        $this->TypeVehicule = $TypeVehicule;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->DatePublication;
    }

    public function setDatePublication(\DateTimeInterface $DatePublication): self
    {
        $this->DatePublication = $DatePublication;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->DateExpiration;
    }

    public function setDateExpiration(\DateTimeInterface $DateExpiration): self
    {
        $this->DateExpiration = $DateExpiration;

        return $this;
    }

    public function getEtatAnnonce(): ?string
    {
        return $this->EtatAnnonce;
    }

    public function setEtatAnnonce(string $EtatAnnonce): self
    {
        $this->EtatAnnonce = $EtatAnnonce;

        return $this;
    }
}
