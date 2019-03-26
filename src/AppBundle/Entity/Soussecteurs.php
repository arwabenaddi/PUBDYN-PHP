<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soussecteurs
 *
 * @ORM\Table(name="soussecteurs", indexes={@ORM\Index(name="secteur", columns={"id_secteur"}), @ORM\Index(name="idx_soussecteur", columns={"soussecteur"})})
 * @ORM\Entity
 */
class Soussecteurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ssecteur", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSsecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="soussecteur", type="string", length=255, nullable=false)
     */
    private $soussecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="soussecteur_en", type="string", length=255, nullable=false)
     */
    private $soussecteurEn;

    /**
     * @var \AppBundle\Entity\Secteurs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Secteurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_secteur", referencedColumnName="id_secteur")
     * })
     */
    private $idSecteur;



    /**
     * Get idSsecteur.
     *
     * @return int
     */
    public function getIdSsecteur()
    {
        return $this->idSsecteur;
    }

    /**
     * Set soussecteur.
     *
     * @param string $soussecteur
     *
     * @return Soussecteurs
     */
    public function setSoussecteur($soussecteur)
    {
        $this->soussecteur = $soussecteur;

        return $this;
    }

    /**
     * Get soussecteur.
     *
     * @return string
     */
    public function getSoussecteur()
    {
        return $this->soussecteur;
    }

    /**
     * Set soussecteurEn.
     *
     * @param string $soussecteurEn
     *
     * @return Soussecteurs
     */
    public function setSoussecteurEn($soussecteurEn)
    {
        $this->soussecteurEn = $soussecteurEn;

        return $this;
    }

    /**
     * Get soussecteurEn.
     *
     * @return string
     */
    public function getSoussecteurEn()
    {
        return $this->soussecteurEn;
    }

    /**
     * Set idSecteur.
     *
     * @param \AppBundle\Entity\Secteurs|null $idSecteur
     *
     * @return Soussecteurs
     */
    public function setIdSecteur(\AppBundle\Entity\Secteurs $idSecteur = null)
    {
        $this->idSecteur = $idSecteur;

        return $this;
    }

    /**
     * Get idSecteur.
     *
     * @return \AppBundle\Entity\Secteurs|null
     */
    public function getIdSecteur()
    {
        return $this->idSecteur;
    }
}
