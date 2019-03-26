<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionStyle
 *
 * @ORM\Table(name="question_style", indexes={@ORM\Index(name="fk_question_style_type_appartenance_sectorielle1_idx", columns={"id_type_app_sect"}), @ORM\Index(name="fk_question_style_referentiel1_idx", columns={"id_referentiel"}), @ORM\Index(name="fk_question_style_question1_idx", columns={"id_question"})})
 * @ORM\Entity
 */
class QuestionStyle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="style", type="text", length=65535, nullable=true)
     */
    private $style;

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
     * @var \AppBundle\Entity\Referentiel
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Referentiel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_referentiel", referencedColumnName="id_referentiel")
     * })
     */
    private $idReferentiel;

    /**
     * @var \AppBundle\Entity\TypeAppartenanceSectorielle
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeAppartenanceSectorielle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_app_sect", referencedColumnName="id")
     * })
     */
    private $idTypeAppSect;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set style.
     *
     * @param string|null $style
     *
     * @return QuestionStyle
     */
    public function setStyle($style = null)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style.
     *
     * @return string|null
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set idQuestion.
     *
     * @param \AppBundle\Entity\Question|null $idQuestion
     *
     * @return QuestionStyle
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
     * Set idReferentiel.
     *
     * @param \AppBundle\Entity\Referentiel|null $idReferentiel
     *
     * @return QuestionStyle
     */
    public function setIdReferentiel(\AppBundle\Entity\Referentiel $idReferentiel = null)
    {
        $this->idReferentiel = $idReferentiel;

        return $this;
    }

    /**
     * Get idReferentiel.
     *
     * @return \AppBundle\Entity\Referentiel|null
     */
    public function getIdReferentiel()
    {
        return $this->idReferentiel;
    }

    /**
     * Set idTypeAppSect.
     *
     * @param \AppBundle\Entity\TypeAppartenanceSectorielle|null $idTypeAppSect
     *
     * @return QuestionStyle
     */
    public function setIdTypeAppSect(\AppBundle\Entity\TypeAppartenanceSectorielle $idTypeAppSect = null)
    {
        $this->idTypeAppSect = $idTypeAppSect;

        return $this;
    }

    /**
     * Get idTypeAppSect.
     *
     * @return \AppBundle\Entity\TypeAppartenanceSectorielle|null
     */
    public function getIdTypeAppSect()
    {
        return $this->idTypeAppSect;
    }
}
