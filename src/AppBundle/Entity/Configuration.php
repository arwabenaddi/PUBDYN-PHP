<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configuration")
 * @ORM\Entity
 */
class Configuration
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valeur", type="text", length=65535, nullable=true)
     */
    private $valeur;



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
     * Set valeur.
     *
     * @param string|null $valeur
     *
     * @return Configuration
     */
    public function setValeur($valeur = null)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur.
     *
     * @return string|null
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}
