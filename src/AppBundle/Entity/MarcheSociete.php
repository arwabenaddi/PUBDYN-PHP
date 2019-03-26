<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarcheSociete
 *
 * @ORM\Table(name="marche_societe", indexes={@ORM\Index(name="fk_marche_societe_marches1_idx", columns={"id_marches"}), @ORM\Index(name="fk_marche_societe_marches2_idx", columns={"id_marche_type"}), @ORM\Index(name="IDX_E475E9FAC7F894CD", columns={"id_societe"})})
 * @ORM\Entity
 */
class MarcheSociete
{
    /**
     * @var \AppBundle\Entity\Marches
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Marches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marches", referencedColumnName="id_marche")
     * })
     */
    private $idMarches;

    /**
     * @var \AppBundle\Entity\Marches
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Marches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marche_type", referencedColumnName="id_marche_type")
     * })
     */
    private $idMarcheType;

    /**
     * @var \AppBundle\Entity\Societes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Societes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     * })
     */
    private $idSociete;



    /**
     * Set idMarches.
     *
     * @param \AppBundle\Entity\Marches $idMarches
     *
     * @return MarcheSociete
     */
    public function setIdMarches(\AppBundle\Entity\Marches $idMarches)
    {
        $this->idMarches = $idMarches;

        return $this;
    }

    /**
     * Get idMarches.
     *
     * @return \AppBundle\Entity\Marches
     */
    public function getIdMarches()
    {
        return $this->idMarches;
    }

    /**
     * Set idMarcheType.
     *
     * @param \AppBundle\Entity\Marches $idMarcheType
     *
     * @return MarcheSociete
     */
    public function setIdMarcheType(\AppBundle\Entity\Marches $idMarcheType)
    {
        $this->idMarcheType = $idMarcheType;

        return $this;
    }

    /**
     * Get idMarcheType.
     *
     * @return \AppBundle\Entity\Marches
     */
    public function getIdMarcheType()
    {
        return $this->idMarcheType;
    }

    /**
     * Set idSociete.
     *
     * @param \AppBundle\Entity\Societes $idSociete
     *
     * @return MarcheSociete
     */
    public function setIdSociete(\AppBundle\Entity\Societes $idSociete)
    {
        $this->idSociete = $idSociete;

        return $this;
    }

    /**
     * Get idSociete.
     *
     * @return \AppBundle\Entity\Societes
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }
}
