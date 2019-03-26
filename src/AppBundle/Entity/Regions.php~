<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regions
 *
 * @ORM\Table(name="regions", indexes={@ORM\Index(name="id_pays", columns={"id_pays"}), @ORM\Index(name="idx_region", columns={"region"})})
 * @ORM\Entity
 */
class Regions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_region", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=false)
     */
    private $region;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region_en", type="string", length=255, nullable=true)
     */
    private $regionEn;

    /**
     * @var \AppBundle\Entity\Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pays", referencedColumnName="id_pays")
     * })
     */
    private $idPays;



    /**
     * Get idRegion.
     *
     * @return int
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * Set region.
     *
     * @param string $region
     *
     * @return Regions
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set regionEn.
     *
     * @param string|null $regionEn
     *
     * @return Regions
     */
    public function setRegionEn($regionEn = null)
    {
        $this->regionEn = $regionEn;

        return $this;
    }

    /**
     * Get regionEn.
     *
     * @return string|null
     */
    public function getRegionEn()
    {
        return $this->regionEn;
    }

    /**
     * Set idPays.
     *
     * @param \AppBundle\Entity\Pays|null $idPays
     *
     * @return Regions
     */
    public function setIdPays(\AppBundle\Entity\Pays $idPays = null)
    {
        $this->idPays = $idPays;

        return $this;
    }

    /**
     * Get idPays.
     *
     * @return \AppBundle\Entity\Pays|null
     */
    public function getIdPays()
    {
        return $this->idPays;
    }
}
