<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSocietesDates
 *
 * @ORM\Table(name="user_societes_dates", indexes={@ORM\Index(name="fk_user_societes_societes1_idx", columns={"id_societe"}), @ORM\Index(name="fk_user_societes_date_questionnaire1_idx", columns={"id_date"}), @ORM\Index(name="fk_user_societes_users1", columns={"id_users"})})
 * @ORM\Entity
 */
class UserSocietesDates
{
    /**
     * @var bool|null
     *
     * @ORM\Column(name="acl", type="boolean", nullable=true)
     */
    private $acl = '0';

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
     * @var \AppBundle\Entity\Users
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_users", referencedColumnName="id_users")
     * })
     */
    private $idUsers;



    /**
     * Set acl.
     *
     * @param bool|null $acl
     *
     * @return UserSocietesDates
     */
    public function setAcl($acl = null)
    {
        $this->acl = $acl;

        return $this;
    }

    /**
     * Get acl.
     *
     * @return bool|null
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
     * Set idDate.
     *
     * @param \AppBundle\Entity\DateQuestionnaire $idDate
     *
     * @return UserSocietesDates
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
     * @return UserSocietesDates
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

    /**
     * Set idUsers.
     *
     * @param \AppBundle\Entity\Users $idUsers
     *
     * @return UserSocietesDates
     */
    public function setIdUsers(\AppBundle\Entity\Users $idUsers)
    {
        $this->idUsers = $idUsers;

        return $this;
    }

    /**
     * Get idUsers.
     *
     * @return \AppBundle\Entity\Users
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }
}
