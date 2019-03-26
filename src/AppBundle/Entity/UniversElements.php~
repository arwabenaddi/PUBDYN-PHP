<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UniversElements
 *
 * @ORM\Table(name="univers_elements", indexes={@ORM\Index(name="name", columns={"name", "element"})})
 * @ORM\Entity
 */
class UniversElements
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_univers_elements", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUniversElements;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=16, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="element", type="string", length=16, nullable=false)
     */
    private $element;



    /**
     * Get idUniversElements.
     *
     * @return int
     */
    public function getIdUniversElements()
    {
        return $this->idUniversElements;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return UniversElements
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set element.
     *
     * @param string $element
     *
     * @return UniversElements
     */
    public function setElement($element)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get element.
     *
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }
}
