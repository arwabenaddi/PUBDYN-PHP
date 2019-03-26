<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprises
 *
 * @ORM\Table(name="entreprises", indexes={@ORM\Index(name="pays", columns={"id_pays"})})
 * @ORM\Entity
 */
class Entreprises
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_entreprise", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires", type="string", length=255, nullable=true)
     */
    private $commentaires;

    /**
     * @var \AppBundle\Entity\Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pays", referencedColumnName="id_pays")
     * })
     */
    private $idPays;



    /**
     * Get idEntreprise.
     *
     * @return int
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Entreprises
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

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
     * Set commentaires.
     *
     * @param string|null $commentaires
     *
     * @return Entreprises
     */
    public function setCommentaires($commentaires = null)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires.
     *
     * @return string|null
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set idPays.
     *
     * @param \AppBundle\Entity\Pays|null $idPays
     *
     * @return Entreprises
     */
    public function setIdPays(\AppBundle\Entity\Pays $idPays = null)
    {
        $this->idPays = $idPays;

        return $this;
    }

    /**
     * Get idPays.
     *
     * @return \AppBundle\Entity\Pays|null
     */
    public function getIdPays()
    {
        return $this->idPays;
    }
}
