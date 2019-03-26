<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReferentielFamille
 *
 * @ORM\Table(name="referentiel_famille", indexes={@ORM\Index(name="fk_referentiel_famille_famille1_idx", columns={"id_famille"}), @ORM\Index(name="fk_referentiel_famille_referentiel1_idx", columns={"id_referentiel"})})
 * @ORM\Entity
 */
class ReferentielFamille
{
    /**
     * @var int
     *
     * @ORM\Column(name="ordre", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * Set ordre.
     *
     * @param int $ordre
     *
     * @return ReferentielFamille
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre.
     *
     * @return int
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
     * @return ReferentielFamille
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
     * @return ReferentielFamille
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
}
