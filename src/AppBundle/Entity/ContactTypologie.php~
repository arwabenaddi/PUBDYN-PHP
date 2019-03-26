<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactTypologie
 *
 * @ORM\Table(name="contact_typologie", indexes={@ORM\Index(name="index2", columns={"libelle"})})
 * @ORM\Entity
 */
class ContactTypologie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contact_typologie", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContactTypologie;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_en", type="string", length=255, nullable=true)
     */
    private $libelleEn;



    /**
     * Get idContactTypologie.
     *
     * @return int
     */
    public function getIdContactTypologie()
    {
        return $this->idContactTypologie;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return ContactTypologie
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

    /**
     * Set libelleEn.
     *
     * @param string|null $libelleEn
     *
     * @return ContactTypologie
     */
    public function setLibelleEn($libelleEn = null)
    {
        $this->libelleEn = $libelleEn;

        return $this;
    }

    /**
     * Get libelleEn.
     *
     * @return string|null
     */
    public function getLibelleEn()
    {
        return $this->libelleEn;
    }
}
