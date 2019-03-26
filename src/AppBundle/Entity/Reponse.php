<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", uniqueConstraints={@ORM\UniqueConstraint(name="idx_uniq", columns={"id_societe", "id_date", "id_question"})}, indexes={@ORM\Index(name="fk_reponse_question1_idx", columns={"id_question"}), @ORM\Index(name="fk_reponse_date_questionnaire1_idx", columns={"id_date"}), @ORM\Index(name="fk_reponse_societes1_idx", columns={"id_societe"}), @ORM\Index(name="fk_reponse_sources1_idx", columns={"id_source"}), @ORM\Index(name="fk_reponse_users1_idx", columns={"id_user"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reponse", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReponse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valeur", type="string", length=255, nullable=true)
     */
    private $valeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_analyste", type="text", length=65535, nullable=true)
     */
    private $commentaireAnalyste;

    /**
     * @var \AppBundle\Entity\DateQuestionnaire
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DateQuestionnaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_date", referencedColumnName="id_date")
     * })
     */
    private $idDate;

    /**
     * @var \AppBundle\Entity\Question
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_question", referencedColumnName="id_question")
     * })
     */
    private $idQuestion;

    /**
     * @var \AppBundle\Entity\Societes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Societes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     * })
     */
    private $idSociete;

    /**
     * @var \AppBundle\Entity\Sources
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_source", referencedColumnName="id_source")
     * })
     */
    private $idSource;

    /**
     * @var \AppBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_users")
     * })
     */
    private $idUser;



    /**
     * Get idReponse.
     *
     * @return int
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Set valeur.
     *
     * @param string|null $valeur
     *
     * @return Reponse
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

    /**
     * Set commentaire.
     *
     * @param string|null $commentaire
     *
     * @return Reponse
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
     * Set commentaireAnalyste.
     *
     * @param string|null $commentaireAnalyste
     *
     * @return Reponse
     */
    public function setCommentaireAnalyste($commentaireAnalyste = null)
    {
        $this->commentaireAnalyste = $commentaireAnalyste;

        return $this;
    }

    /**
     * Get commentaireAnalyste.
     *
     * @return string|null
     */
    public function getCommentaireAnalyste()
    {
        return $this->commentaireAnalyste;
    }

    /**
     * Set idDate.
     *
     * @param \AppBundle\Entity\DateQuestionnaire|null $idDate
     *
     * @return Reponse
     */
    public function setIdDate(\AppBundle\Entity\DateQuestionnaire $idDate = null)
    {
        $this->idDate = $idDate;

        return $this;
    }

    /**
     * Get idDate.
     *
     * @return \AppBundle\Entity\DateQuestionnaire|null
     */
    public function getIdDate()
    {
        return $this->idDate;
    }

    /**
     * Set idQuestion.
     *
     * @param \AppBundle\Entity\Question|null $idQuestion
     *
     * @return Reponse
     */
    public function setIdQuestion(\AppBundle\Entity\Question $idQuestion = null)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Get idQuestion.
     *
     * @return \AppBundle\Entity\Question|null
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Set idSociete.
     *
     * @param \AppBundle\Entity\Societes|null $idSociete
     *
     * @return Reponse
     */
    public function setIdSociete(\AppBundle\Entity\Societes $idSociete = null)
    {
        $this->idSociete = $idSociete;

        return $this;
    }

    /**
     * Get idSociete.
     *
     * @return \AppBundle\Entity\Societes|null
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }

    /**
     * Set idSource.
     *
     * @param \AppBundle\Entity\Sources|null $idSource
     *
     * @return Reponse
     */
    public function setIdSource(\AppBundle\Entity\Sources $idSource = null)
    {
        $this->idSource = $idSource;

        return $this;
    }

    /**
     * Get idSource.
     *
     * @return \AppBundle\Entity\Sources|null
     */
    public function getIdSource()
    {
        return $this->idSource;
    }

    /**
     * Set idUser.
     *
     * @param \AppBundle\Entity\Users|null $idUser
     *
     * @return Reponse
     */
    public function setIdUser(\AppBundle\Entity\Users $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser.
     *
     * @return \AppBundle\Entity\Users|null
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
