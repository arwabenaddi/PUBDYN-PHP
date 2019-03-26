<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeModeleAffichage
 *
 * @ORM\Table(name="type_modele_affichage")
 * @ORM\Entity
 */
class TypeModeleAffichage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_type_modele_affichage", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeModeleAffichage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;



    /**
     * Get idTypeModeleAffichage.
     *
     * @return int
     */
    public function getIdTypeModeleAffichage()
    {
        return $this->idTypeModeleAffichage;
    }

    /**
     * Set label.
     *
     * @param string|null $label
     *
     * @return TypeModeleAffichage
     */
    public function setLabel($label = null)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label.
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
}
