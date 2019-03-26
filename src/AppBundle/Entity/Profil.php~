<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 *
 * @ORM\Table(name="profil", indexes={@ORM\Index(name="idx_profil", columns={"libelle"})})
 * @ORM\Entity
 */
class Profil
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_profil", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfil;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;



    /**
     * Get idProfil.
     *
     * @return int
     */
    public function getIdProfil()
    {
        return $this->idProfil;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return Profil
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
