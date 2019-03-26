<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocieteDateCommentaire
 *
 * @ORM\Table(name="societe_date_commentaire", indexes={@ORM\Index(name="fk_societe_commentaire_date_questionnaire1_idx", columns={"id_date"}), @ORM\Index(name="IDX_2187D457C7F894CD", columns={"id_societe"})})
 * @ORM\Entity
 */
class SocieteDateCommentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commentaire", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCommentaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="lang", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=16777215, nullable=true)
     */
    private $commentaire;

    /**
     * @var \AppBundle\Entity\DateQuestionnaire
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\DateQuestionnaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_date", referencedColumnName="id_date")
     * })
     */
    private $idDate;

    /**
     * @var \AppBundle\Entity\Societes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Societes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     * })
     */
    private $idSociete;



    /**
     * Set idCommentaire.
     *
     * @param int $idCommentaire
     *
     * @return SocieteDateCommentaire
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;

        return $this;
    }

    /**
     * Get idCommentaire.
     *
     * @return int
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set lang.
     *
     * @param bool $lang
     *
     * @return SocieteDateCommentaire
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang.
     *
     * @return bool
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set commentaire.
     *
     * @param string|null $commentaire
     *
     * @return SocieteDateCommentaire
     */
    public function setCommentaire($commentaire = null)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire.
     *
     * @return string|null
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set idDate.
     *
     * @param \AppBundle\Entity\DateQuestionnaire $idDate
     *
     * @return SocieteDateCommentaire
     */
    public function setIdDate(\AppBundle\Entity\DateQuestionnaire $idDate)
    {
        $this->idDate = $idDate;

        return $this;
    }

    /**
     * Get idDate.
     *
     * @return \AppBundle\Entity\DateQuestionnaire
     */
    public function getIdDate()
    {
        return $this->idDate;
    }

    /**
     * Set idSociete.
     *
     * @param \AppBundle\Entity\Societes $idSociete
     *
     * @return SocieteDateCommentaire
     */
    public function setIdSociete(\AppBundle\Entity\Societes $idSociete)
    {
        $this->idSociete = $idSociete;

        return $this;
    }

    /**
     * Get idSociete.
     *
     * @return \AppBundle\Entity\Societes
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }
}
