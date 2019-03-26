<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="famille", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"code"})})
 * @ORM\Entity
 */
class Famille
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_famille", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFamille;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_en", type="string", length=255, nullable=true)
     */
    private $libelleEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=true)
     */
    private $code;



    /**
     * Get idFamille.
     *
     * @return int
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }

    /**
     * Set libelle.
     *
     * @param string|null $libelle
     *
     * @return Famille
     */
    public function setLibelle($libelle = null)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle.
     *
     * @return string|null
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
     * @return Famille
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
     * Set code.
     *
     * @param string|null $code
     *
     * @return Famille
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
