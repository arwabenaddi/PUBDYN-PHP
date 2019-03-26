<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sources
 *
 * @ORM\Table(name="sources", indexes={@ORM\Index(name="idx_ordre", columns={"ordre"})})
 * @ORM\Entity
 */
class Sources
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_source", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSource;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ordre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=45, nullable=true)
     */
    private $source;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_en", type="string", length=45, nullable=true)
     */
    private $sourceEn;



    /**
     * Get idSource.
     *
     * @return int
     */
    public function getIdSource()
    {
        return $this->idSource;
    }

    /**
     * Set ordre.
     *
     * @param int|null $ordre
     *
     * @return Sources
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
     * Set source.
     *
     * @param string|null $source
     *
     * @return Sources
     */
    public function setSource($source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source.
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set sourceEn.
     *
     * @param string|null $sourceEn
     *
     * @return Sources
     */
    public function setSourceEn($sourceEn = null)
    {
        $this->sourceEn = $sourceEn;

        return $this;
    }

    /**
     * Get sourceEn.
     *
     * @return string|null
     */
    public function getSourceEn()
    {
        return $this->sourceEn;
    }
}
