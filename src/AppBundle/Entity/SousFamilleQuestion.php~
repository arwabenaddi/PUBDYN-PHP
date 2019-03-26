<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousFamilleQuestion
 *
 * @ORM\Table(name="sous_famille_question", indexes={@ORM\Index(name="fk_sous_famille_question_referentiel1_idx", columns={"id_referentiel"}), @ORM\Index(name="fk_sous_famille_question_question1_idx", columns={"id_question"}), @ORM\Index(name="index5", columns={"ordre"}), @ORM\Index(name="fk_sous_famille_question_sous_famille1_idx", columns={"id_sous_famille"})})
 * @ORM\Entity
 */
class SousFamilleQuestion
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ordre;

    /**
     * @var \AppBundle\Entity\Question
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_question", referencedColumnName="id_question")
     * })
     */
    private $idQuestion;

    /**
     * @var \AppBundle\Entity\Referentiel
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_referentiel", referencedColumnName="id_referentiel")
     * })
     */
    private $idReferentiel;

    /**
     * @var \AppBundle\Entity\SousFamille
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\SousFamille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sous_famille", referencedColumnName="id_sous_famille")
     * })
     */
    private $idSousFamille;



    /**
     * Set ordre.
     *
     * @param int|null $ordre
     *
     * @return SousFamilleQuestion
     */
    public function setOrdre($ordre = null)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre.
     *
     * @return int|null
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set idQuestion.
     *
     * @param \AppBundle\Entity\Question $idQuestion
     *
     * @return SousFamilleQuestion
     */
    public function setIdQuestion(\AppBundle\Entity\Question $idQuestion)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Get idQuestion.
     *
     * @return \AppBundle\Entity\Question
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Set idReferentiel.
     *
     * @param \AppBundle\Entity\Referentiel $idReferentiel
     *
     * @return SousFamilleQuestion
     */
    public function setIdReferentiel(\AppBundle\Entity\Referentiel $idReferentiel)
    {
        $this->idReferentiel = $idReferentiel;

        return $this;
    }

    /**
     * Get idReferentiel.
     *
     * @return \AppBundle\Entity\Referentiel
     */
    public function getIdReferentiel()
    {
        return $this->idReferentiel;
    }

    /**
     * Set idSousFamille.
     *
     * @param \AppBundle\Entity\SousFamille $idSousFamille
     *
     * @return SousFamilleQuestion
     */
    public function setIdSousFamille(\AppBundle\Entity\SousFamille $idSousFamille)
    {
        $this->idSousFamille = $idSousFamille;

        return $this;
    }

    /**
     * Get idSousFamille.
     *
     * @return \AppBundle\Entity\SousFamille
     */
    public function getIdSousFamille()
    {
        return $this->idSousFamille;
    }
}
