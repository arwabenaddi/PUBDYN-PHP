<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousFamillePonderations
 *
 * @ORM\Table(name="sous_famille_ponderations", indexes={@ORM\Index(name="fk_sous_famille_ponderations_sous_famille1_idx", columns={"id_sous_famille"}), @ORM\Index(name="fk_sous_famille_ponderations_referentiel1_idx", columns={"id_referentiel"}), @ORM\Index(name="fk_sous_famille_ponderations_type_appartenance_sectorielle1_idx", columns={"id_type_app_sect"})})
 * @ORM\Entity
 */
class SousFamillePonderations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ponderation", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $ponderation;

    /**
     * @var \AppBundle\Entity\Referentiel
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_referentiel", referencedColumnName="id_referentiel")
     * })
     */
    private $idReferentiel;

    /**
     * @var \AppBundle\Entity\SousFamille
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SousFamille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sous_famille", referencedColumnName="id_sous_famille")
     * })
     */
    private $idSousFamille;

    /**
     * @var \AppBundle\Entity\TypeAppartenanceSectorielle
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeAppartenanceSectorielle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_app_sect", referencedColumnName="id")
     * })
     */
    private $idTypeAppSect;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ponderation.
     *
     * @param string|null $ponderation
     *
     * @return SousFamillePonderations
     */
    public function setPonderation($ponderation = null)
    {
        $this->ponderation = $ponderation;

        return $this;
    }

    /**
     * Get ponderation.
     *
     * @return string|null
     */
    public function getPonderation()
    {
        return $this->ponderation;
    }

    /**
     * Set idReferentiel.
     *
     * @param \AppBundle\Entity\Referentiel|null $idReferentiel
     *
     * @return SousFamillePonderations
     */
    public function setIdReferentiel(\AppBundle\Entity\Referentiel $idReferentiel = null)
    {
        $this->idReferentiel = $idReferentiel;

        return $this;
    }

    /**
     * Get idReferentiel.
     *
     * @return \AppBundle\Entity\Referentiel|null
     */
    public function getIdReferentiel()
    {
        return $this->idReferentiel;
    }

    /**
     * Set idSousFamille.
     *
     * @param \AppBundle\Entity\SousFamille|null $idSousFamille
     *
     * @return SousFamillePonderations
     */
    public function setIdSousFamille(\AppBundle\Entity\SousFamille $idSousFamille = null)
    {
        $this->idSousFamille = $idSousFamille;

        return $this;
    }

    /**
     * Get idSousFamille.
     *
     * @return \AppBundle\Entity\SousFamille|null
     */
    public function getIdSousFamille()
    {
        return $this->idSousFamille;
    }

    /**
     * Set idTypeAppSect.
     *
     * @param \AppBundle\Entity\TypeAppartenanceSectorielle|null $idTypeAppSect
     *
     * @return SousFamillePonderations
     */
    public function setIdTypeAppSect(\AppBundle\Entity\TypeAppartenanceSectorielle $idTypeAppSect = null)
    {
        $this->idTypeAppSect = $idTypeAppSect;

        return $this;
    }

    /**
     * Get idTypeAppSect.
     *
     * @return \AppBundle\Entity\TypeAppartenanceSectorielle|null
     */
    public function getIdTypeAppSect()
    {
        return $this->idTypeAppSect;
    }
}
