<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="login_passwd", columns={"passwd", "login"})}, indexes={@ORM\Index(name="id_profil", columns={"id_profil"}), @ORM\Index(name="idx_prenom", columns={"prenom"}), @ORM\Index(name="idx_creatdate", columns={"creatdate"}), @ORM\Index(name="idx_abostartdate", columns={"abonnementstartdate"}), @ORM\Index(name="idx_lastpwd", columns={"lastpwdchange"}), @ORM\Index(name="id_societe", columns={"id_societe"}), @ORM\Index(name="idx_nom", columns={"nom"}), @ORM\Index(name="idx_login", columns={"login"}), @ORM\Index(name="idx_abodate", columns={"abonnementdate"}), @ORM\Index(name="idx_lastlogin", columns={"lastlogin"}), @ORM\Index(name="id_pays", columns={"id_pays"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_users", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsers;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=64, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=64, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=32, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=64, nullable=false)
     */
    private $passwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="text", length=65535, nullable=true)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="valid", type="boolean", nullable=false, options={"default"="1"})
     */
    private $valid = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creatdate", type="date", nullable=true)
     */
    private $creatdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="abonnementdate", type="date", nullable=true)
     */
    private $abonnementdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="abonnementstartdate", type="date", nullable=true)
     */
    private $abonnementstartdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lastlogin", type="datetime", nullable=true)
     */
    private $lastlogin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lastpwdchange", type="datetime", nullable=true)
     */
    private $lastpwdchange;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prefs", type="text", length=65535, nullable=true)
     */
    private $prefs;

    /**
     * @var \AppBundle\Entity\Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pays", referencedColumnName="id_pays")
     * })
     */
    private $idPays;

    /**
     * @var \AppBundle\Entity\Profil
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Profil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profil", referencedColumnName="id_profil")
     * })
     */
    private $idProfil;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Referentiel", inversedBy="idUsers")
     * @ORM\JoinTable(name="user_referentiels",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_users", referencedColumnName="id_users")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_referentiel", referencedColumnName="id_referentiel")
     *   }
     * )
     */
    private $idReferentiel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idReferentiel = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idUsers.
     *
     * @return int
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Users
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Users
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set login.
     *
     * @param string $login
     *
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set passwd.
     *
     * @param string $passwd
     *
     * @return Users
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd.
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set mail.
     *
     * @param string|null $mail
     *
     * @return Users
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
     * Set tel.
     *
     * @param string|null $tel
     *
     * @return Users
     */
    public function setTel($tel = null)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return string|null
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set commentaire.
     *
     * @param string|null $commentaire
     *
     * @return Users
     */
    public function setCommentaire($commentaire = null)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire.
     *
     * @return string|null
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set valid.
     *
     * @param bool $valid
     *
     * @return Users
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid.
     *
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set creatdate.
     *
     * @param \DateTime|null $creatdate
     *
     * @return Users
     */
    public function setCreatdate($creatdate = null)
    {
        $this->creatdate = $creatdate;

        return $this;
    }

    /**
     * Get creatdate.
     *
     * @return \DateTime|null
     */
    public function getCreatdate()
    {
        return $this->creatdate;
    }

    /**
     * Set abonnementdate.
     *
     * @param \DateTime|null $abonnementdate
     *
     * @return Users
     */
    public function setAbonnementdate($abonnementdate = null)
    {
        $this->abonnementdate = $abonnementdate;

        return $this;
    }

    /**
     * Get abonnementdate.
     *
     * @return \DateTime|null
     */
    public function getAbonnementdate()
    {
        return $this->abonnementdate;
    }

    /**
     * Set abonnementstartdate.
     *
     * @param \DateTime|null $abonnementstartdate
     *
     * @return Users
     */
    public function setAbonnementstartdate($abonnementstartdate = null)
    {
        $this->abonnementstartdate = $abonnementstartdate;

        return $this;
    }

    /**
     * Get abonnementstartdate.
     *
     * @return \DateTime|null
     */
    public function getAbonnementstartdate()
    {
        return $this->abonnementstartdate;
    }

    /**
     * Set lastlogin.
     *
     * @param \DateTime|null $lastlogin
     *
     * @return Users
     */
    public function setLastlogin($lastlogin = null)
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    /**
     * Get lastlogin.
     *
     * @return \DateTime|null
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }

    /**
     * Set lastpwdchange.
     *
     * @param \DateTime|null $lastpwdchange
     *
     * @return Users
     */
    public function setLastpwdchange($lastpwdchange = null)
    {
        $this->lastpwdchange = $lastpwdchange;

        return $this;
    }

    /**
     * Get lastpwdchange.
     *
     * @return \DateTime|null
     */
    public function getLastpwdchange()
    {
        return $this->lastpwdchange;
    }

    /**
     * Set prefs.
     *
     * @param string|null $prefs
     *
     * @return Users
     */
    public function setPrefs($prefs = null)
    {
        $this->prefs = $prefs;

        return $this;
    }

    /**
     * Get prefs.
     *
     * @return string|null
     */
    public function getPrefs()
    {
        return $this->prefs;
    }

    /**
     * Set idPays.
     *
     * @param \AppBundle\Entity\Pays|null $idPays
     *
     * @return Users
     */
    public function setIdPays(\AppBundle\Entity\Pays $idPays = null)
    {
        $this->idPays = $idPays;

        return $this;
    }

    /**
     * Get idPays.
     *
     * @return \AppBundle\Entity\Pays|null
     */
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * Set idProfil.
     *
     * @param \AppBundle\Entity\Profil|null $idProfil
     *
     * @return Users
     */
    public function setIdProfil(\AppBundle\Entity\Profil $idProfil = null)
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    /**
     * Get idProfil.
     *
     * @return \AppBundle\Entity\Profil|null
     */
    public function getIdProfil()
    {
        return $this->idProfil;
    }

    /**
     * Set idSociete.
     *
     * @param \AppBundle\Entity\Societes|null $idSociete
     *
     * @return Users
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
     * Add idReferentiel.
     *
     * @param \AppBundle\Entity\Referentiel $idReferentiel
     *
     * @return Users
     */
    public function addIdReferentiel(\AppBundle\Entity\Referentiel $idReferentiel)
    {
        $this->idReferentiel[] = $idReferentiel;

        return $this;
    }

    /**
     * Remove idReferentiel.
     *
     * @param \AppBundle\Entity\Referentiel $idReferentiel
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdReferentiel(\AppBundle\Entity\Referentiel $idReferentiel)
    {
        return $this->idReferentiel->removeElement($idReferentiel);
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
}
