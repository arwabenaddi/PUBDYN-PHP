<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousFamilleStyle
 *
 * @ORM\Table(name="sous_famille_style", indexes={@ORM\Index(name="fk_question_style_type_appartenance_sectorielle1_idx", columns={"id_type_app_sect"}), @ORM\Index(name="fk_sous_famille_style_referentiel1_idx", columns={"id_referentiel"}), @ORM\Index(name="fk_sous_famille_style_sous_famille1_idx", columns={"id_sous_famille"})})
 * @ORM\Entity
 */
class SousFamilleStyle
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
     * @ORM\Column(name="style", type="text", length=65535, nullable=true)
     */
    private $style;

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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set style.
     *
     * @param string|null $style
     *
     * @return SousFamilleStyle
     */
    public function setStyle($style = null)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style.
     *
     * @return string|null
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set idTypeAppSect.
     *
     * @param \AppBundle\Entity\TypeAppartenanceSectorielle|null $idTypeAppSect
     *
     * @return SousFamilleStyle
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

    /**
     * Set idReferentiel.
     *
     * @param \AppBundle\Entity\Referentiel|null $idReferentiel
     *
     * @return SousFamilleStyle
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
     * @return SousFamilleStyle
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
}
