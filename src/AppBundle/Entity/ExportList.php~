<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExportList
 *
 * @ORM\Table(name="export_list", indexes={@ORM\Index(name="idx_libelle", columns={"libelle"})})
 * @ORM\Entity
 */
class ExportList
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_export_list", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExportList;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Societes", inversedBy="idExportList")
     * @ORM\JoinTable(name="export_list_societe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_export_list", referencedColumnName="id_export_list")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     *   }
     * )
     */
    private $idSociete;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSociete = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idExportList.
     *
     * @return int
     */
    public function getIdExportList()
    {
        return $this->idExportList;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return ExportList
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add idSociete.
     *
     * @param \AppBundle\Entity\Societes $idSociete
     *
     * @return ExportList
     */
    public function addIdSociete(\AppBundle\Entity\Societes $idSociete)
    {
        $this->idSociete[] = $idSociete;

        return $this;
    }

    /**
     * Remove idSociete.
     *
     * @param \AppBundle\Entity\Societes $idSociete
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdSociete(\AppBundle\Entity\Societes $idSociete)
    {
        return $this->idSociete->removeElement($idSociete);
    }

    /**
     * Get idSociete.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }
}
