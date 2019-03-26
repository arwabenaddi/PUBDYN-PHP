<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FamilleQuestion
 *
 * @ORM\Table(name="famille_question", indexes={@ORM\Index(name="fk_famille_question_referentiel1_idx", columns={"id_referentiel"}), @ORM\Index(name="fk_famille_question_question1_idx", columns={"id_question"}), @ORM\Index(name="index5", columns={"ordre"}), @ORM\Index(name="fk_famille_question_famille1_idx", columns={"id_famille"})})
 * @ORM\Entity
 */
class FamilleQuestion
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $ordre;

    /**
     * @var \AppBundle\Entity\Famille
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Famille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_famille", referencedColumnName="id_famille")
     * })
     */
    private $idFamille;

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
     * Set ordre.
     *
     * @param int|null $ordre
     *
     * @return FamilleQuestion
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
     * Set idFamille.
     *
     * @param \AppBundle\Entity\Famille $idFamille
     *
     * @return FamilleQuestion
     */
    public function setIdFamille(\AppBundle\Entity\Famille $idFamille)
    {
        $this->idFamille = $idFamille;

        return $this;
    }

    /**
     * Get idFamille.
     *
     * @return \AppBundle\Entity\Famille
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }

    /**
     * Set idQuestion.
     *
     * @param \AppBundle\Entity\Question $idQuestion
     *
     * @return FamilleQuestion
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
     * @return FamilleQuestion
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
}
