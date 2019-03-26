<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefaultReponse
 *
 * @ORM\Table(name="default_reponse", indexes={@ORM\Index(name="fk_default_reponse_default_reponse_type1_idx", columns={"id_default_reponse_type"}), @ORM\Index(name="idx_libelle", columns={"libelle"})})
 * @ORM\Entity
 */
class DefaultReponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_default_reponse", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDefaultReponse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caracteristiques", type="text", length=65535, nullable=true)
     */
    private $caracteristiques;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caracteristiques_en", type="text", length=65535, nullable=true)
     */
    private $caracteristiquesEn;

    /**
     * @var \AppBundle\Entity\DefaultReponseType
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DefaultReponseType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_default_reponse_type", referencedColumnName="id_default_reponse_type")
     * })
     */
    private $idDefaultReponseType;



    /**
     * Get idDefaultReponse.
     *
     * @return int
     */
    public function getIdDefaultReponse()
    {
        return $this->idDefaultReponse;
    }

    /**
     * Set libelle.
     *
     * @param string|null $libelle
     *
     * @return DefaultReponse
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
     * Set caracteristiques.
     *
     * @param string|null $caracteristiques
     *
     * @return DefaultReponse
     */
    public function setCaracteristiques($caracteristiques = null)
    {
        $this->caracteristiques = $caracteristiques;

        return $this;
    }

    /**
     * Get caracteristiques.
     *
     * @return string|null
     */
    public function getCaracteristiques()
    {
        return $this->caracteristiques;
    }

    /**
     * Set caracteristiquesEn.
     *
     * @param string|null $caracteristiquesEn
     *
     * @return DefaultReponse
     */
    public function setCaracteristiquesEn($caracteristiquesEn = null)
    {
        $this->caracteristiquesEn = $caracteristiquesEn;

        return $this;
    }

    /**
     * Get caracteristiquesEn.
     *
     * @return string|null
     */
    public function getCaracteristiquesEn()
    {
        return $this->caracteristiquesEn;
    }

    /**
     * Set idDefaultReponseType.
     *
     * @param \AppBundle\Entity\DefaultReponseType|null $idDefaultReponseType
     *
     * @return DefaultReponse
     */
    public function setIdDefaultReponseType(\AppBundle\Entity\DefaultReponseType $idDefaultReponseType = null)
    {
        $this->idDefaultReponseType = $idDefaultReponseType;

        return $this;
    }

    /**
     * Get idDefaultReponseType.
     *
     * @return \AppBundle\Entity\DefaultReponseType|null
     */
    public function getIdDefaultReponseType()
    {
        return $this->idDefaultReponseType;
    }
}
