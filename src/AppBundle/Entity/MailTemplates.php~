<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailTemplates
 *
 * @ORM\Table(name="mail_templates", indexes={@ORM\Index(name="idx_titre", columns={"titre"})})
 * @ORM\Entity
 */
class MailTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mail_templates", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMailTemplates;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu", type="blob", length=65535, nullable=true)
     */
    private $contenu;



    /**
     * Get idMailTemplates.
     *
     * @return int
     */
    public function getIdMailTemplates()
    {
        return $this->idMailTemplates;
    }

    /**
     * Set titre.
     *
     * @param string|null $titre
     *
     * @return MailTemplates
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

    /**
     * Set contenu.
     *
     * @param string|null $contenu
     *
     * @return MailTemplates
     */
    public function setContenu($contenu = null)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu.
     *
     * @return string|null
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
