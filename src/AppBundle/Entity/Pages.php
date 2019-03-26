<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="pages", indexes={@ORM\Index(name="idx_titre", columns={"titre"})})
 * @ORM\Entity
 */
class Pages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_page", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;



    /**
     * Get idPage.
     *
     * @return int
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set titre.
     *
     * @param string|null $titre
     *
     * @return Pages
     */
    public function setTitre($titre = null)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string|null
     */
    public function getTitre()
    {
        return $this->titre;
    }
}
