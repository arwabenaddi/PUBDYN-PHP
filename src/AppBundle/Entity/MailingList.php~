<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailingList
 *
 * @ORM\Table(name="mailing_list", indexes={@ORM\Index(name="idx_libelle", columns={"libelle"})})
 * @ORM\Entity
 */
class MailingList
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mailing_list", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMailingList;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="reply_adress", type="text", length=65535, nullable=false)
     */
    private $replyAdress;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Users", inversedBy="idMailingList")
     * @ORM\JoinTable(name="mailing_list_users",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_mailing_list", referencedColumnName="id_mailing_list")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_users", referencedColumnName="id_users")
     *   }
     * )
     */
    private $idUsers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUsers = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idMailingList.
     *
     * @return int
     */
    public function getIdMailingList()
    {
        return $this->idMailingList;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return MailingList
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
     * Set replyAdress.
     *
     * @param string $replyAdress
     *
     * @return MailingList
     */
    public function setReplyAdress($replyAdress)
    {
        $this->replyAdress = $replyAdress;

        return $this;
    }

    /**
     * Get replyAdress.
     *
     * @return string
     */
    public function getReplyAdress()
    {
        return $this->replyAdress;
    }

    /**
     * Add idUser.
     *
     * @param \AppBundle\Entity\Users $idUser
     *
     * @return MailingList
     */
    public function addIdUser(\AppBundle\Entity\Users $idUser)
    {
        $this->idUsers[] = $idUser;

        return $this;
    }

    /**
     * Remove idUser.
     *
     * @param \AppBundle\Entity\Users $idUser
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdUser(\AppBundle\Entity\Users $idUser)
    {
        return $this->idUsers->removeElement($idUser);
    }

    /**
     * Get idUsers.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }
}
