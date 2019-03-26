<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAppartenanceSectorielle
 *
 * @ORM\Table(name="type_appartenance_sectorielle", indexes={@ORM\Index(name="idx_nom", columns={"nom"})})
 * @ORM\Entity
 */
class TypeAppartenanceSectorielle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_en", type="string", length=255, nullable=true)
     */
    private $nomEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=4, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_en", type="string", length=4, nullable=true)
     */
    private $codeEn;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return TypeAppartenanceSectorielle
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
     * @return TypeAppartenanceSectorielle
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

    /**
     * Set code.
     *
     * @param string|null $code
     *
     * @return TypeAppartenanceSectorielle
     */
    public function setCode($code = null)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set codeEn.
     *
     * @param string|null $codeEn
     *
     * @return TypeAppartenanceSectorielle
     */
    public function setCodeEn($codeEn = null)
    {
        $this->codeEn = $codeEn;

        return $this;
    }

    /**
     * Get codeEn.
     *
     * @return string|null
     */
    public function getCodeEn()
    {
        return $this->codeEn;
    }
}
