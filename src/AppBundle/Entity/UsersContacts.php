<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersContacts
 *
 * @ORM\Table(name="users_contacts", indexes={@ORM\Index(name="fk_users_contacts_societes1_idx", columns={"id_societe"}), @ORM\Index(name="fk_users_contacts_contact1_idx", columns={"id_contact"}), @ORM\Index(name="IDX_48013EA9FA06E4D9", columns={"id_users"})})
 * @ORM\Entity
 */
class UsersContacts
{
    /**
     * @var \AppBundle\Entity\Contact
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Contact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contact", referencedColumnName="id_contact")
     * })
     */
    private $idContact;

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
     * Set idContact.
     *
     * @param \AppBundle\Entity\Contact $idContact
     *
     * @return UsersContacts
     */
    public function setIdContact(\AppBundle\Entity\Contact $idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Get idContact.
     *
     * @return \AppBundle\Entity\Contact
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set idSociete.
     *
     * @param \AppBundle\Entity\Societes $idSociete
     *
     * @return UsersContacts
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
     * @return UsersContacts
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
