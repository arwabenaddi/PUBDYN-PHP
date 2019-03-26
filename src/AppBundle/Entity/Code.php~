<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Code
 *
 * @ORM\Table(name="code")
 * @ORM\Entity
 */
class Code
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_code", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=32, nullable=true)
     */
    private $nom;



    /**
     * Get idCode.
     *
     * @return int
     */
    public function getIdCode()
    {
        return $this->idCode;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Code
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
}
