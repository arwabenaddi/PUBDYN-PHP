<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", uniqueConstraints={@ORM\UniqueConstraint(name="code_UNIQUE", columns={"code"})}, indexes={@ORM\Index(name="fk_question_default_reponse1_idx", columns={"id_default_reponse"}), @ORM\Index(name="idx_libelle", columns={"libelle"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_question", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="text", length=65535, nullable=false)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_en", type="text", length=65535, nullable=true)
     */
    private $libelleEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_ligne", type="string", length=16, nullable=true)
     */
    private $idLigne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="suffixe", type="string", length=16, nullable=true)
     */
    private $suffixe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aide", type="text", length=65535, nullable=true)
     */
    private $aide;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aide_en", type="text", length=65535, nullable=true)
     */
    private $aideEn;

    /**
     * @var \AppBundle\Entity\DefaultReponse
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DefaultReponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_default_reponse", referencedColumnName="id_default_reponse")
     * })
     */
    private $idDefaultReponse;



    /**
     * Get idQuestion.
     *
     * @return int
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return Question
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set libelleEn.
     *
     * @param string|null $libelleEn
     *
     * @return Question
     */
    public function setLibelleEn($libelleEn = null)
    {
        $this->libelleEn = $libelleEn;

        return $this;
    }

    /**
     * Get libelleEn.
     *
     * @return string|null
     */
    public function getLibelleEn()
    {
        return $this->libelleEn;
    }

    /**
     * Set code.
     *
     * @param string|null $code
     *
     * @return Question
     */
    public function setCode($code = null)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set idLigne.
     *
     * @param string|null $idLigne
     *
     * @return Question
     */
    public function setIdLigne($idLigne = null)
    {
        $this->idLigne = $idLigne;

        return $this;
    }

    /**
     * Get idLigne.
     *
     * @return string|null
     */
    public function getIdLigne()
    {
        return $this->idLigne;
    }

    /**
     * Set suffixe.
     *
     * @param string|null $suffixe
     *
     * @return Question
     */
    public function setSuffixe($suffixe = null)
    {
        $this->suffixe = $suffixe;

        return $this;
    }

    /**
     * Get suffixe.
     *
     * @return string|null
     */
    public function getSuffixe()
    {
        return $this->suffixe;
    }

    /**
     * Set aide.
     *
     * @param string|null $aide
     *
     * @return Question
     */
    public function setAide($aide = null)
    {
        $this->aide = $aide;

        return $this;
    }

    /**
     * Get aide.
     *
     * @return string|null
     */
    public function getAide()
    {
        return $this->aide;
    }

    /**
     * Set aideEn.
     *
     * @param string|null $aideEn
     *
     * @return Question
     */
    public function setAideEn($aideEn = null)
    {
        $this->aideEn = $aideEn;

        return $this;
    }

    /**
     * Get aideEn.
     *
     * @return string|null
     */
    public function getAideEn()
    {
        return $this->aideEn;
    }

    /**
     * Set idDefaultReponse.
     *
     * @param \AppBundle\Entity\DefaultReponse|null $idDefaultReponse
     *
     * @return Question
     */
    public function setIdDefaultReponse(\AppBundle\Entity\DefaultReponse $idDefaultReponse = null)
    {
        $this->idDefaultReponse = $idDefaultReponse;

        return $this;
    }

    /**
     * Get idDefaultReponse.
     *
     * @return \AppBundle\Entity\DefaultReponse|null
     */
    public function getIdDefaultReponse()
    {
        return $this->idDefaultReponse;
    }
}
