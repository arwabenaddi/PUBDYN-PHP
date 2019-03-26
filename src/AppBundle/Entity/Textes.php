<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Textes
 *
 * @ORM\Table(name="textes", uniqueConstraints={@ORM\UniqueConstraint(name="idx_profil_page_uniq", columns={"id_profil", "id_page", "lang"})}, indexes={@ORM\Index(name="fk_textes_pages1_idx", columns={"id_page"}), @ORM\Index(name="idx_lang", columns={"lang"}), @ORM\Index(name="fk_textes_profil1_idx", columns={"id_profil"})})
 * @ORM\Entity
 */
class Textes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_textes", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTextes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=true)
     */
    private $texte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lang", type="boolean", nullable=true)
     */
    private $lang;

    /**
     * @var \AppBundle\Entity\Pages
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_page", referencedColumnName="id_page")
     * })
     */
    private $idPage;

    /**
     * @var \AppBundle\Entity\Profil
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Profil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profil", referencedColumnName="id_profil")
     * })
     */
    private $idProfil;



    /**
     * Get idTextes.
     *
     * @return int
     */
    public function getIdTextes()
    {
        return $this->idTextes;
    }

    /**
     * Set texte.
     *
     * @param string|null $texte
     *
     * @return Textes
     */
    public function setTexte($texte = null)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte.
     *
     * @return string|null
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set lang.
     *
     * @param bool|null $lang
     *
     * @return Textes
     */
    public function setLang($lang = null)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang.
     *
     * @return bool|null
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set idPage.
     *
     * @param \AppBundle\Entity\Pages|null $idPage
     *
     * @return Textes
     */
    public function setIdPage(\AppBundle\Entity\Pages $idPage = null)
    {
        $this->idPage = $idPage;

        return $this;
    }

    /**
     * Get idPage.
     *
     * @return \AppBundle\Entity\Pages|null
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set idProfil.
     *
     * @param \AppBundle\Entity\Profil|null $idProfil
     *
     * @return Textes
     */
    public function setIdProfil(\AppBundle\Entity\Profil $idProfil = null)
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    /**
     * Get idProfil.
     *
     * @return \AppBundle\Entity\Profil|null
     */
    public function getIdProfil()
    {
        return $this->idProfil;
    }
}
