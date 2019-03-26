<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndiceDate
 *
 * @ORM\Table(name="indice_date", indexes={@ORM\Index(name="idx_date", columns={"idxdate"})})
 * @ORM\Entity
 */
class IndiceDate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_date", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="idxdate", type="date", nullable=true)
     */
    private $idxdate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Indice", inversedBy="idDate")
     * @ORM\JoinTable(name="indice_date_indice",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_date", referencedColumnName="id_date")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_indice", referencedColumnName="id_indice")
     *   }
     * )
     */
    private $idIndice;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idIndice = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idDate.
     *
     * @return int
     */
    public function getIdDate()
    {
        return $this->idDate;
    }

    /**
     * Set idxdate.
     *
     * @param \DateTime|null $idxdate
     *
     * @return IndiceDate
     */
    public function setIdxdate($idxdate = null)
    {
        $this->idxdate = $idxdate;

        return $this;
    }

    /**
     * Get idxdate.
     *
     * @return \DateTime|null
     */
    public function getIdxdate()
    {
        return $this->idxdate;
    }

    /**
     * Add idIndice.
     *
     * @param \AppBundle\Entity\Indice $idIndice
     *
     * @return IndiceDate
     */
    public function addIdIndice(\AppBundle\Entity\Indice $idIndice)
    {
        $this->idIndice[] = $idIndice;

        return $this;
    }

    /**
     * Remove idIndice.
     *
     * @param \AppBundle\Entity\Indice $idIndice
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdIndice(\AppBundle\Entity\Indice $idIndice)
    {
        return $this->idIndice->removeElement($idIndice);
    }

    /**
     * Get idIndice.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdIndice()
    {
        return $this->idIndice;
    }
}
