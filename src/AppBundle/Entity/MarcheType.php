<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarcheType
 *
 * @ORM\Table(name="marche_type", indexes={@ORM\Index(name="id_marche_type", columns={"id_marche_type"})})
 * @ORM\Entity
 */
class MarcheType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_marche_type", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarcheType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_en", type="string", length=45, nullable=true)
     */
    private $nomEn;



    /**
     * Get idMarcheType.
     *
     * @return int
     */
    public function getIdMarcheType()
    {
        return $this->idMarcheType;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return MarcheType
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
     * Set nomEn.
     *
     * @param string|null $nomEn
     *
     * @return MarcheType
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
