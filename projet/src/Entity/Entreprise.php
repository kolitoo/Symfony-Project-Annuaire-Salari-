<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EntrepriseRepository::class)]
class Entreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $_id;

    #[ORM\Column(type: 'string', length: 255)]
    //#[Assert\NotBlank()]
    //#[Assert\Lenght(min: 2, max: 50)]
    private $_prenom;

    #[ORM\Column(type: 'string', length: 255)]
    private $_nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $_telephone;

    #[ORM\Column(type: 'string', length: 255)]
    private $_email;

    #[ORM\Column(type: 'string', length: 255)]
    private $_adresse;

    #[ORM\Column(type: 'string', length: 255)]
    private $_poste;

    #[ORM\Column(type: 'string', length: 255)]
    private $_salaire;

    #[ORM\Column(type: 'string', length: 255)]
    private $_datedenaissance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $_id): self
    {
        $this->_id = $_id;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->_prenom;
    }

    public function setPrenom(string $_prenom): self
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->_nom;
    }

    public function setNom(string $_nom): self
    {
        $this->_nom = $_nom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->_telephone;
    }

    public function setTelephone(string $_telephone): self
    {
        $this->_telephone = $_telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->_email;
    }

    public function setEmail(string $_email): self
    {
        $this->_email = $_email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->_adresse;
    }

    public function setAdresse(string $_adresse): self
    {
        $this->_adresse = $_adresse;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->_poste;
    }

    public function setPoste(string $_poste): self
    {
        $this->_poste = $_poste;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->_salaire;
    }

    public function setSalaire(string $_salaire): self
    {
        $this->_salaire = $_salaire;

        return $this;
    }

    public function getDatedenaissance(): ?string
    {
        return $this->_datedenaissance;
    }

    public function setDatedenaissance(string $_datedenaissance): self
    {
        $this->_datedenaissance = $_datedenaissance;

        return $this;
    }
}
