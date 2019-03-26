<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefaultReponseType
 *
 * @ORM\Table(name="default_reponse_type", indexes={@ORM\Index(name="idx_libelle", columns={"libelle_type"})})
 * @ORM\Entity
 */
class DefaultReponseType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_default_reponse_type", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDefaultReponseType;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_type", type="string", length=255, nullable=false)
     */
    private $libelleType;



    /**
     * Get idDefaultReponseType.
     *
     * @return int
     */
    public function getIdDefaultReponseType()
    {
        return $this->idDefaultReponseType;
    }

    /**
     * Set libelleType.
     *
     * @param string $libelleType
     *
     * @return DefaultReponseType
     */
    public function setLibelleType($libelleType)
    {
        $this->libelleType = $libelleType;

        return $this;
    }

    /**
     * Get libelleType.
     *
     * @return string
     */
    public function getLibelleType()
    {
        return $this->libelleType;
    }
}
