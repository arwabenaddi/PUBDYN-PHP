<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Indice
 *
 * @ORM\Table(name="indice", indexes={@ORM\Index(name="visible", columns={"visible"})})
 * @ORM\Entity
 */
class Indice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_indice", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIndice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="style", type="text", length=65535, nullable=true)
     */
    private $style;

    /**
     * @var string|null
     *
     * @ORM\Column(name="style_header", type="text", length=65535, nullable=true)
     */
    private $styleHeader;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\IndiceDate", mappedBy="idIndice")
     */
    private $idDate;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idDate = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idIndice.
     *
     * @return int
     */
    public function getIdIndice()
    {
        return $this->idIndice;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Indice
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set style.
     *
     * @param string|null $style
     *
     * @return Indice
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
     * Set styleHeader.
     *
     * @param string|null $styleHeader
     *
     * @return Indice
     */
    public function setStyleHeader($styleHeader = null)
    {
        $this->styleHeader = $styleHeader;

        return $this;
    }

    /**
     * Get styleHeader.
     *
     * @return string|null
     */
    public function getStyleHeader()
    {
        return $this->styleHeader;
    }

    /**
     * Set visible.
     *
     * @param bool|null $visible
     *
     * @return Indice
     */
    public function setVisible($visible = null)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible.
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Add idDate.
     *
     * @param \AppBundle\Entity\IndiceDate $idDate
     *
     * @return Indice
     */
    public function addIdDate(\AppBundle\Entity\IndiceDate $idDate)
    {
        $this->idDate[] = $idDate;

        return $this;
    }

    /**
     * Remove idDate.
     *
     * @param \AppBundle\Entity\IndiceDate $idDate
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdDate(\AppBundle\Entity\IndiceDate $idDate)
    {
        return $this->idDate->removeElement($idDate);
    }

    /**
     * Get idDate.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdDate()
    {
        return $this->idDate;
    }
}
