<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndiceBoursier
 *
 * @ORM\Table(name="indice_boursier", indexes={@ORM\Index(name="idx_nom", columns={"Nom"})})
 * @ORM\Entity
 */
class IndiceBoursier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_indice_boursier", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIndiceBoursier;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_en", type="string", length=255, nullable=true)
     */
    private $nomEn;



    /**
     * Get idIndiceBoursier.
     *
     * @return int
     */
    public function getIdIndiceBoursier()
    {
        return $this->idIndiceBoursier;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return IndiceBoursier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nomEn.
     *
     * @param string|null $nomEn
     *
     * @return IndiceBoursier
     */
    public function setNomEn($nomEn = null)
    {
        $this->nomEn = $nomEn;

        return $this;
    }

    /**
     * Get nomEn.
     *
     * @return string|null
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }
}
