<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateQuestionnaire
 *
 * @ORM\Table(name="date_questionnaire", uniqueConstraints={@ORM\UniqueConstraint(name="qdate_UNIQUE", columns={"qdate"})}, indexes={@ORM\Index(name="idx_default", columns={"liste_default"})})
 * @ORM\Entity
 */
class DateQuestionnaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_date", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="qdate", type="date", nullable=true)
     */
    private $qdate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="liste_default", type="boolean", nullable=true)
     */
    private $listeDefault;



    /**
     * Get idDate.
     *
     * @return int
     */
    public function getIdDate()
    {
        return $this->idDate;
    }

    /**
     * Set qdate.
     *
     * @param \DateTime|null $qdate
     *
     * @return DateQuestionnaire
     */
    public function setQdate($qdate = null)
    {
        $this->qdate = $qdate;

        return $this;
    }

    /**
     * Get qdate.
     *
     * @return \DateTime|null
     */
    public function getQdate()
    {
        return $this->qdate;
    }

    /**
     * Set listeDefault.
     *
     * @param bool|null $listeDefault
     *
     * @return DateQuestionnaire
     */
    public function setListeDefault($listeDefault = null)
    {
        $this->listeDefault = $listeDefault;

        return $this;
    }

    /**
     * Get listeDefault.
     *
     * @return bool|null
     */
    public function getListeDefault()
    {
        return $this->listeDefault;
    }
}
