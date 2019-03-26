<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marches
 *
 * @ORM\Table(name="marches", indexes={@ORM\Index(name="idx_marche", columns={"Marche"}), @ORM\Index(name="marche_type", columns={"id_marche_type"})})
 * @ORM\Entity
 */
class Marches
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_marche", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMarche;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeMarche", type="string", length=3, nullable=false)
     */
    private $codemarche;

    /**
     * @var string
     *
     * @ORM\Column(name="Marche", type="string", length=255, nullable=false)
     */
    private $marche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marche_en", type="string", length=255, nullable=true)
     */
    private $marcheEn;

    /**
     * @var \AppBundle\Entity\MarcheType
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMarcheType;



    /**
     * Set idMarche.
     *
     * @param int $idMarche
     *
     * @return Marches
     */
    public function setIdMarche($idMarche)
    {
        $this->idMarche = $idMarche;

        return $this;
    }

    /**
     * Get idMarche.
     *
     * @return int
     */
    public function getIdMarche()
    {
        return $this->idMarche;
    }

    /**
     * Set codemarche.
     *
     * @param string $codemarche
     *
     * @return Marches
     */
    public function setCodemarche($codemarche)
    {
        $this->codemarche = $codemarche;

        return $this;
    }

    /**
     * Get codemarche.
     *
     * @return string
     */
    public function getCodemarche()
    {
        return $this->codemarche;
    }

    /**
     * Set marche.
     *
     * @param string $marche
     *
     * @return Marches
     */
    public function setMarche($marche)
    {
        $this->marche = $marche;

        return $this;
    }

    /**
     * Get marche.
     *
     * @return string
     */
    public function getMarche()
    {
        return $this->marche;
    }

    /**
     * Set marcheEn.
     *
     * @param string|null $marcheEn
     *
     * @return Marches
     */
    public function setMarcheEn($marcheEn = null)
    {
        $this->marcheEn = $marcheEn;

        return $this;
    }

    /**
     * Get marcheEn.
     *
     * @return string|null
     */
    public function getMarcheEn()
    {
        return $this->marcheEn;
    }

    /**
     * Set idMarcheType.
     *
     * @param \AppBundle\Entity\MarcheType $idMarcheType
     *
     * @return Marches
     */
    public function setIdMarcheType(\AppBundle\Entity\MarcheType $idMarcheType)
    {
        $this->idMarcheType = $idMarcheType;

        return $this;
    }

    /**
     * Get idMarcheType.
     *
     * @return \AppBundle\Entity\MarcheType
     */
    public function getIdMarcheType()
    {
        return $this->idMarcheType;
    }
}
