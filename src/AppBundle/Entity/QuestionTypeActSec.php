<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionTypeActSec
 *
 * @ORM\Table(name="question_type_act_sec", indexes={@ORM\Index(name="fk_question_type_act_sec_type_appartenance_sectorielle1_idx", columns={"id"}), @ORM\Index(name="fk_question_type_act_sec_referentiel1_idx", columns={"id_referentiel"}), @ORM\Index(name="IDX_80BC519EE62CA5DB", columns={"id_question"})})
 * @ORM\Entity
 */
class QuestionTypeActSec
{
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
     * @var \AppBundle\Entity\TypeAppartenanceSectorielle
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\TypeAppartenanceSectorielle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;



    /**
     * Set idQuestion.
     *
     * @param \AppBundle\Entity\Question $idQuestion
     *
     * @return QuestionTypeActSec
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
     * @return QuestionTypeActSec
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
     * Set id.
     *
     * @param \AppBundle\Entity\TypeAppartenanceSectorielle $id
     *
     * @return QuestionTypeActSec
     */
    public function setId(\AppBundle\Entity\TypeAppartenanceSectorielle $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return \AppBundle\Entity\TypeAppartenanceSectorielle
     */
    public function getId()
    {
        return $this->id;
    }
}
