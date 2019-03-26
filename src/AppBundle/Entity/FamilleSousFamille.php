<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FamilleSousFamille
 *
 * @ORM\Table(name="famille_sous_famille", indexes={@ORM\Index(name="fk_famille_sous_famille_referentiel1_idx", columns={"id_referentiel"}), @ORM\Index(name="fk_famille_sous_famille_famille1_idx", columns={"id_famille"}), @ORM\Index(name="fk_famille_sous_famille_sous_famille1_idx", columns={"id_sous_famille"}), @ORM\Index(name="index5", columns={"ordre"})})
 * @ORM\Entity
 */
class FamilleSousFamille
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ordre;

    /**
     * @var \AppBundle\Entity\Famille
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Famille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_famille", referencedColumnName="id_famille")
     * })
     */
    private $idFamille;

    /**
     * @var \AppBundle\Entity\Referentiel
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_referentiel", referencedColumnName="id_referentiel")
     * })
     */
    private $idReferentiel;

    /**
     * @var \AppBundle\Entity\SousFamille
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\SousFamille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sous_famille", referencedColumnName="id_sous_famille")
     * })
     */
    private $idSousFamille;



    /**
     * Set ordre.
     *
     * @param int|null $ordre
     *
     * @return FamilleSousFamille
     */
    public function setOrdre($ordre = null)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre.
     *
     * @return int|null
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set idFamille.
     *
     * @param \AppBundle\Entity\Famille $idFamille
     *
     * @return FamilleSousFamille
     */
    public function setIdFamille(\AppBundle\Entity\Famille $idFamille)
    {
        $this->idFamille = $idFamille;

        return $this;
    }

    /**
     * Get idFamille.
     *
     * @return \AppBundle\Entity\Famille
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }

    /**
     * Set idReferentiel.
     *
     * @param \AppBundle\Entity\Referentiel $idReferentiel
     *
     * @return FamilleSousFamille
     */
    public function setIdReferentiel(\AppBundle\Entity\Referentiel $idReferentiel)
    {
        $this->idReferentiel = $idReferentiel;

        return $this;
    }

    /**
     * Get idReferentiel.
     *
     * @return \AppBundle\Entity\Referentiel
     */
    public function getIdReferentiel()
    {
        return $this->idReferentiel;
    }

    /**
     * Set idSousFamille.
     *
     * @param \AppBundle\Entity\SousFamille $idSousFamille
     *
     * @return FamilleSousFamille
     */
    public function setIdSousFamille(\AppBundle\Entity\SousFamille $idSousFamille)
    {
        $this->idSousFamille = $idSousFamille;

        return $this;
    }

    /**
     * Get idSousFamille.
     *
     * @return \AppBundle\Entity\SousFamille
     */
    public function getIdSousFamille()
    {
        return $this->idSousFamille;
    }
}
