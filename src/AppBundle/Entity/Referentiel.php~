<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Referentiel
 *
 * @ORM\Table(name="referentiel", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"code"})}, indexes={@ORM\Index(name="index2", columns={"defaut"}), @ORM\Index(name="index5", columns={"libelle_en"})})
 * @ORM\Entity
 */
class Referentiel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_referentiel", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idReferentiel;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_en", type="string", length=255, nullable=true)
     */
    private $libelleEn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="defaut", type="boolean", nullable=true)
     */
    private $defaut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=true)
     */
    private $code;



    /**
     * Set idReferentiel.
     *
     * @param int $idReferentiel
     *
     * @return Referentiel
     */
    public function setIdReferentiel($idReferentiel)
    {
        $this->idReferentiel = $idReferentiel;

        return $this;
    }

    /**
     * Get idReferentiel.
     *
     * @return int
     */
    public function getIdReferentiel()
    {
        return $this->idReferentiel;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return Referentiel
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
     * @return Referentiel
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

    /**
     * Set defaut.
     *
     * @param bool|null $defaut
     *
     * @return Referentiel
     */
    public function setDefaut($defaut = null)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut.
     *
     * @return bool|null
     */
    public function getDefaut()
    {
        return $this->defaut;
    }

    /**
     * Set code.
     *
     * @param string|null $code
     *
     * @return Referentiel
     */
    public function setCode($code = null)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
}
