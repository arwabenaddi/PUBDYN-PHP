<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="id_societe", columns={"id_societe"}), @ORM\Index(name="fk_contact_contact_typologie1_idx", columns={"id_contact_typologie"}), @ORM\Index(name="idx_mail_status", columns={"mail_status"}), @ORM\Index(name="id_type", columns={"id_type_contact"}), @ORM\Index(name="idx_hash", columns={"nom_hash"}), @ORM\Index(name="id_mail_hash", columns={"mail_hash"})})
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contact", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=448, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=448, nullable=true)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=172, nullable=true)
     */
    private $phone;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_contact", type="boolean", nullable=true)
     */
    private $defaultContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entite", type="string", length=448, nullable=true)
     */
    private $entite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_hash", type="string", length=64, nullable=true, options={"fixed"=true})
     */
    private $nomHash;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mail_status", type="boolean", nullable=true)
     */
    private $mailStatus = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_hash", type="string", length=64, nullable=true, options={"fixed"=true})
     */
    private $mailHash;

    /**
     * @var \AppBundle\Entity\ContactTypologie
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ContactTypologie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contact_typologie", referencedColumnName="id_contact_typologie")
     * })
     */
    private $idContactTypologie;

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
     * @var \AppBundle\Entity\ContactType
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ContactType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_contact", referencedColumnName="id_contact_type")
     * })
     */
    private $idTypeContact;



    /**
     * Get idContact.
     *
     * @return int
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Contact
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set mail.
     *
     * @param string|null $mail
     *
     * @return Contact
     */
    public function setMail($mail = null)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string|null
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set phone.
     *
     * @param string|null $phone
     *
     * @return Contact
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set defaultContact.
     *
     * @param bool|null $defaultContact
     *
     * @return Contact
     */
    public function setDefaultContact($defaultContact = null)
    {
        $this->defaultContact = $defaultContact;

        return $this;
    }

    /**
     * Get defaultContact.
     *
     * @return bool|null
     */
    public function getDefaultContact()
    {
        return $this->defaultContact;
    }

    /**
     * Set entite.
     *
     * @param string|null $entite
     *
     * @return Contact
     */
    public function setEntite($entite = null)
    {
        $this->entite = $entite;

        return $this;
    }

    /**
     * Get entite.
     *
     * @return string|null
     */
    public function getEntite()
    {
        return $this->entite;
    }

    /**
     * Set nomHash.
     *
     * @param string|null $nomHash
     *
     * @return Contact
     */
    public function setNomHash($nomHash = null)
    {
        $this->nomHash = $nomHash;

        return $this;
    }

    /**
     * Get nomHash.
     *
     * @return string|null
     */
    public function getNomHash()
    {
        return $this->nomHash;
    }

    /**
     * Set mailStatus.
     *
     * @param bool|null $mailStatus
     *
     * @return Contact
     */
    public function setMailStatus($mailStatus = null)
    {
        $this->mailStatus = $mailStatus;

        return $this;
    }

    /**
     * Get mailStatus.
     *
     * @return bool|null
     */
    public function getMailStatus()
    {
        return $this->mailStatus;
    }

    /**
     * Set mailHash.
     *
     * @param string|null $mailHash
     *
     * @return Contact
     */
    public function setMailHash($mailHash = null)
    {
        $this->mailHash = $mailHash;

        return $this;
    }

    /**
     * Get mailHash.
     *
     * @return string|null
     */
    public function getMailHash()
    {
        return $this->mailHash;
    }

    /**
     * Set idContactTypologie.
     *
     * @param \AppBundle\Entity\ContactTypologie|null $idContactTypologie
     *
     * @return Contact
     */
    public function setIdContactTypologie(\AppBundle\Entity\ContactTypologie $idContactTypologie = null)
    {
        $this->idContactTypologie = $idContactTypologie;

        return $this;
    }

    /**
     * Get idContactTypologie.
     *
     * @return \AppBundle\Entity\ContactTypologie|null
     */
    public function getIdContactTypologie()
    {
        return $this->idContactTypologie;
    }

    /**
     * Set idSociete.
     *
     * @param \AppBundle\Entity\Societes|null $idSociete
     *
     * @return Contact
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
     * Set idTypeContact.
     *
     * @param \AppBundle\Entity\ContactType|null $idTypeContact
     *
     * @return Contact
     */
    public function setIdTypeContact(\AppBundle\Entity\ContactType $idTypeContact = null)
    {
        $this->idTypeContact = $idTypeContact;

        return $this;
    }

    /**
     * Get idTypeContact.
     *
     * @return \AppBundle\Entity\ContactType|null
     */
    public function getIdTypeContact()
    {
        return $this->idTypeContact;
    }
}
