<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactType
 *
 * @ORM\Table(name="contact_type", indexes={@ORM\Index(name="idx_libelle", columns={"libelle"})})
 * @ORM\Entity
 */
class ContactType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contact_type", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContactType;

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
     * Get idContactType.
     *
     * @return int
     */
    public function getIdContactType()
    {
        return $this->idContactType;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return ContactType
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
     * @return ContactType
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
