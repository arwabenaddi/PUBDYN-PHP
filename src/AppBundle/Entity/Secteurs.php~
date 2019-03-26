<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteurs
 *
 * @ORM\Table(name="secteurs", indexes={@ORM\Index(name="idx_secteur", columns={"secteur"})})
 * @ORM\Entity
 */
class Secteurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_secteur", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur", type="string", length=255, nullable=false)
     */
    private $secteur;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur_en", type="string", length=255, nullable=false)
     */
    private $secteurEn;



    /**
     * Get idSecteur.
     *
     * @return int
     */
    public function getIdSecteur()
    {
        return $this->idSecteur;
    }

    /**
     * Set secteur.
     *
     * @param string $secteur
     *
     * @return Secteurs
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur.
     *
     * @return string
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set secteurEn.
     *
     * @param string $secteurEn
     *
     * @return Secteurs
     */
    public function setSecteurEn($secteurEn)
    {
        $this->secteurEn = $secteurEn;

        return $this;
    }

    /**
     * Get secteurEn.
     *
     * @return string
     */
    public function getSecteurEn()
    {
        return $this->secteurEn;
    }
}
