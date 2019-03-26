<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicePdf
 *
 * @ORM\Table(name="indice_pdf", indexes={@ORM\Index(name="idx_nom", columns={"nom_pdf"})})
 * @ORM\Entity
 */
class IndicePdf
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_indice_pdf", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIndicePdf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_pdf", type="date", nullable=false)
     */
    private $datePdf;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pdf", type="string", length=255, nullable=false)
     */
    private $nomPdf = '';



    /**
     * Get idIndicePdf.
     *
     * @return int
     */
    public function getIdIndicePdf()
    {
        return $this->idIndicePdf;
    }

    /**
     * Set datePdf.
     *
     * @param \DateTime $datePdf
     *
     * @return IndicePdf
     */
    public function setDatePdf($datePdf)
    {
        $this->datePdf = $datePdf;

        return $this;
    }

    /**
     * Get datePdf.
     *
     * @return \DateTime
     */
    public function getDatePdf()
    {
        return $this->datePdf;
    }

    /**
     * Set nomPdf.
     *
     * @param string $nomPdf
     *
     * @return IndicePdf
     */
    public function setNomPdf($nomPdf)
    {
        $this->nomPdf = $nomPdf;

        return $this;
    }

    /**
     * Get nomPdf.
     *
     * @return string
     */
    public function getNomPdf()
    {
        return $this->nomPdf;
    }
}
