<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays", indexes={@ORM\Index(name="idx_nom", columns={"nom_pays"})})
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pays", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_pays", type="string", length=255, nullable=true)
     */
    private $nomPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_pays_en", type="string", length=255, nullable=true)
     */
    private $nomPaysEn;



    /**
     * Get idPays.
     *
     * @return int
     */
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * Set nomPays.
     *
     * @param string|null $nomPays
     *
     * @return Pays
     */
    public function setNomPays($nomPays = null)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    /**
     * Get nomPays.
     *
     * @return string|null
     */
    public function getNomPays()
    {
        return $this->nomPays;
    }

    /**
     * Set nomPaysEn.
     *
     * @param string|null $nomPaysEn
     *
     * @return Pays
     */
    public function setNomPaysEn($nomPaysEn = null)
    {
        $this->nomPaysEn = $nomPaysEn;

        return $this;
    }

    /**
     * Get nomPaysEn.
     *
     * @return string|null
     */
    public function getNomPaysEn()
    {
        return $this->nomPaysEn;
    }
}
