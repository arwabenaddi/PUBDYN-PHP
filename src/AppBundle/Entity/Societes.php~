<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societes
 *
 * @ORM\Table(name="societes", indexes={@ORM\Index(name="fk_societes_pays1", columns={"id_pays"}), @ORM\Index(name="liste_defaut", columns={"liste_default"}), @ORM\Index(name="fk_societes_type_modele_affichage1", columns={"Modele_Aff"}), @ORM\Index(name="fk_societes_soussecteurs1", columns={"id_soussecteur"}), @ORM\Index(name="fk_societes_type_appartenance_sectorielle1", columns={"id_type_appartenance_sectorielle"}), @ORM\Index(name="idx_nom", columns={"Nom"}), @ORM\Index(name="fk_societes_secteurs1", columns={"id_secteur"}), @ORM\Index(name="fk_societes_regions1", columns={"id_region"})})
 * @ORM\Entity
 */
class Societes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_societe", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description_Activite", type="text", length=65535, nullable=true)
     */
    private $descriptionActivite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description_Activite_en", type="text", length=65535, nullable=true)
     */
    private $descriptionActiviteEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse", type="string", length=255, nullable=true)
     */
    private $adresse = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code_Postal", type="string", length=10, nullable=true)
     */
    private $codePostal = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ville", type="string", length=30, nullable=true)
     */
    private $ville = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel1", type="string", length=20, nullable=true)
     */
    private $tel1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel2", type="string", length=20, nullable=true)
     */
    private $tel2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax", type="string", length=20, nullable=true)
     */
    private $fax = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Site_Web", type="string", length=255, nullable=true)
     */
    private $siteWeb = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_IPO", type="date", nullable=true)
     */
    private $dateIpo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Soc_Comm", type="string", length=255, nullable=true)
     */
    private $socComm = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Site_Soc_Comm", type="string", length=255, nullable=true)
     */
    private $siteSocComm = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Cont_Soc_Comm", type="string", length=255, nullable=true)
     */
    private $nomContSocComm = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_Cont_Soc_Comm", type="string", length=255, nullable=true)
     */
    private $emailContSocComm = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Site_Cob", type="string", length=255, nullable=true)
     */
    private $siteCob = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="liste_default", type="boolean", nullable=false)
     */
    private $listeDefault = '0';

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
     * @var \AppBundle\Entity\Regions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Regions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_region", referencedColumnName="id_region")
     * })
     */
    private $idRegion;

    /**
     * @var \AppBundle\Entity\Secteurs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Secteurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_secteur", referencedColumnName="id_secteur")
     * })
     */
    private $idSecteur;

    /**
     * @var \AppBundle\Entity\Soussecteurs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Soussecteurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_soussecteur", referencedColumnName="id_ssecteur")
     * })
     */
    private $idSoussecteur;

    /**
     * @var \AppBundle\Entity\TypeAppartenanceSectorielle
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeAppartenanceSectorielle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_appartenance_sectorielle", referencedColumnName="id")
     * })
     */
    private $idTypeAppartenanceSectorielle;

    /**
     * @var \AppBundle\Entity\TypeModeleAffichage
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeModeleAffichage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Modele_Aff", referencedColumnName="id_type_modele_affichage")
     * })
     */
    private $modeleAff;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Users", inversedBy="idSociete")
     * @ORM\JoinTable(name="societe_analyste",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_users", referencedColumnName="id_users")
     *   }
     * )
     */
    private $idUsers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Code", inversedBy="idSociete")
     * @ORM\JoinTable(name="societes_code",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_code", referencedColumnName="id_code")
     *   }
     * )
     */
    private $idCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\IndiceBoursier", inversedBy="idSociete")
     * @ORM\JoinTable(name="societes_indice_boursier",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_indice_boursier", referencedColumnName="id_indice_boursier")
     *   }
     * )
     */
    private $idIndiceBoursier;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUsers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idCode = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idIndiceBoursier = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idSociete.
     *
     * @return int
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Societes
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
     * Set descriptionActivite.
     *
     * @param string|null $descriptionActivite
     *
     * @return Societes
     */
    public function setDescriptionActivite($descriptionActivite = null)
    {
        $this->descriptionActivite = $descriptionActivite;

        return $this;
    }

    /**
     * Get descriptionActivite.
     *
     * @return string|null
     */
    public function getDescriptionActivite()
    {
        return $this->descriptionActivite;
    }

    /**
     * Set descriptionActiviteEn.
     *
     * @param string|null $descriptionActiviteEn
     *
     * @return Societes
     */
    public function setDescriptionActiviteEn($descriptionActiviteEn = null)
    {
        $this->descriptionActiviteEn = $descriptionActiviteEn;

        return $this;
    }

    /**
     * Get descriptionActiviteEn.
     *
     * @return string|null
     */
    public function getDescriptionActiviteEn()
    {
        return $this->descriptionActiviteEn;
    }

    /**
     * Set adresse.
     *
     * @param string|null $adresse
     *
     * @return Societes
     */
    public function setAdresse($adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string|null
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal.
     *
     * @param string|null $codePostal
     *
     * @return Societes
     */
    public function setCodePostal($codePostal = null)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal.
     *
     * @return string|null
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville.
     *
     * @param string|null $ville
     *
     * @return Societes
     */
    public function setVille($ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string|null
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tel1.
     *
     * @param string|null $tel1
     *
     * @return Societes
     */
    public function setTel1($tel1 = null)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1.
     *
     * @return string|null
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2.
     *
     * @param string|null $tel2
     *
     * @return Societes
     */
    public function setTel2($tel2 = null)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2.
     *
     * @return string|null
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set fax.
     *
     * @param string|null $fax
     *
     * @return Societes
     */
    public function setFax($fax = null)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax.
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set siteWeb.
     *
     * @param string|null $siteWeb
     *
     * @return Societes
     */
    public function setSiteWeb($siteWeb = null)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb.
     *
     * @return string|null
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set dateIpo.
     *
     * @param \DateTime|null $dateIpo
     *
     * @return Societes
     */
    public function setDateIpo($dateIpo = null)
    {
        $this->dateIpo = $dateIpo;

        return $this;
    }

    /**
     * Get dateIpo.
     *
     * @return \DateTime|null
     */
    public function getDateIpo()
    {
        return $this->dateIpo;
    }

    /**
     * Set socComm.
     *
     * @param string|null $socComm
     *
     * @return Societes
     */
    public function setSocComm($socComm = null)
    {
        $this->socComm = $socComm;

        return $this;
    }

    /**
     * Get socComm.
     *
     * @return string|null
     */
    public function getSocComm()
    {
        return $this->socComm;
    }

    /**
     * Set siteSocComm.
     *
     * @param string|null $siteSocComm
     *
     * @return Societes
     */
    public function setSiteSocComm($siteSocComm = null)
    {
        $this->siteSocComm = $siteSocComm;

        return $this;
    }

    /**
     * Get siteSocComm.
     *
     * @return string|null
     */
    public function getSiteSocComm()
    {
        return $this->siteSocComm;
    }

    /**
     * Set nomContSocComm.
     *
     * @param string|null $nomContSocComm
     *
     * @return Societes
     */
    public function setNomContSocComm($nomContSocComm = null)
    {
        $this->nomContSocComm = $nomContSocComm;

        return $this;
    }

    /**
     * Get nomContSocComm.
     *
     * @return string|null
     */
    public function getNomContSocComm()
    {
        return $this->nomContSocComm;
    }

    /**
     * Set emailContSocComm.
     *
     * @param string|null $emailContSocComm
     *
     * @return Societes
     */
    public function setEmailContSocComm($emailContSocComm = null)
    {
        $this->emailContSocComm = $emailContSocComm;

        return $this;
    }

    /**
     * Get emailContSocComm.
     *
     * @return string|null
     */
    public function getEmailContSocComm()
    {
        return $this->emailContSocComm;
    }

    /**
     * Set siteCob.
     *
     * @param string|null $siteCob
     *
     * @return Societes
     */
    public function setSiteCob($siteCob = null)
    {
        $this->siteCob = $siteCob;

        return $this;
    }

    /**
     * Get siteCob.
     *
     * @return string|null
     */
    public function getSiteCob()
    {
        return $this->siteCob;
    }

    /**
     * Set listeDefault.
     *
     * @param bool $listeDefault
     *
     * @return Societes
     */
    public function setListeDefault($listeDefault)
    {
        $this->listeDefault = $listeDefault;

        return $this;
    }

    /**
     * Get listeDefault.
     *
     * @return bool
     */
    public function getListeDefault()
    {
        return $this->listeDefault;
    }

    /**
     * Set idPays.
     *
     * @param \AppBundle\Entity\Pays|null $idPays
     *
     * @return Societes
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
     * Set idRegion.
     *
     * @param \AppBundle\Entity\Regions|null $idRegion
     *
     * @return Societes
     */
    public function setIdRegion(\AppBundle\Entity\Regions $idRegion = null)
    {
        $this->idRegion = $idRegion;

        return $this;
    }

    /**
     * Get idRegion.
     *
     * @return \AppBundle\Entity\Regions|null
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * Set idSecteur.
     *
     * @param \AppBundle\Entity\Secteurs|null $idSecteur
     *
     * @return Societes
     */
    public function setIdSecteur(\AppBundle\Entity\Secteurs $idSecteur = null)
    {
        $this->idSecteur = $idSecteur;

        return $this;
    }

    /**
     * Get idSecteur.
     *
     * @return \AppBundle\Entity\Secteurs|null
     */
    public function getIdSecteur()
    {
        return $this->idSecteur;
    }

    /**
     * Set idSoussecteur.
     *
     * @param \AppBundle\Entity\Soussecteurs|null $idSoussecteur
     *
     * @return Societes
     */
    public function setIdSoussecteur(\AppBundle\Entity\Soussecteurs $idSoussecteur = null)
    {
        $this->idSoussecteur = $idSoussecteur;

        return $this;
    }

    /**
     * Get idSoussecteur.
     *
     * @return \AppBundle\Entity\Soussecteurs|null
     */
    public function getIdSoussecteur()
    {
        return $this->idSoussecteur;
    }

    /**
     * Set idTypeAppartenanceSectorielle.
     *
     * @param \AppBundle\Entity\TypeAppartenanceSectorielle|null $idTypeAppartenanceSectorielle
     *
     * @return Societes
     */
    public function setIdTypeAppartenanceSectorielle(\AppBundle\Entity\TypeAppartenanceSectorielle $idTypeAppartenanceSectorielle = null)
    {
        $this->idTypeAppartenanceSectorielle = $idTypeAppartenanceSectorielle;

        return $this;
    }

    /**
     * Get idTypeAppartenanceSectorielle.
     *
     * @return \AppBundle\Entity\TypeAppartenanceSectorielle|null
     */
    public function getIdTypeAppartenanceSectorielle()
    {
        return $this->idTypeAppartenanceSectorielle;
    }

    /**
     * Set modeleAff.
     *
     * @param \AppBundle\Entity\TypeModeleAffichage|null $modeleAff
     *
     * @return Societes
     */
    public function setModeleAff(\AppBundle\Entity\TypeModeleAffichage $modeleAff = null)
    {
        $this->modeleAff = $modeleAff;

        return $this;
    }

    /**
     * Get modeleAff.
     *
     * @return \AppBundle\Entity\TypeModeleAffichage|null
     */
    public function getModeleAff()
    {
        return $this->modeleAff;
    }

    /**
     * Add idUser.
     *
     * @param \AppBundle\Entity\Users $idUser
     *
     * @return Societes
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

    /**
     * Add idCode.
     *
     * @param \AppBundle\Entity\Code $idCode
     *
     * @return Societes
     */
    public function addIdCode(\AppBundle\Entity\Code $idCode)
    {
        $this->idCode[] = $idCode;

        return $this;
    }

    /**
     * Remove idCode.
     *
     * @param \AppBundle\Entity\Code $idCode
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdCode(\AppBundle\Entity\Code $idCode)
    {
        return $this->idCode->removeElement($idCode);
    }

    /**
     * Get idCode.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCode()
    {
        return $this->idCode;
    }

    /**
     * Add idIndiceBoursier.
     *
     * @param \AppBundle\Entity\IndiceBoursier $idIndiceBoursier
     *
     * @return Societes
     */
    public function addIdIndiceBoursier(\AppBundle\Entity\IndiceBoursier $idIndiceBoursier)
    {
        $this->idIndiceBoursier[] = $idIndiceBoursier;

        return $this;
    }

    /**
     * Remove idIndiceBoursier.
     *
     * @param \AppBundle\Entity\IndiceBoursier $idIndiceBoursier
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdIndiceBoursier(\AppBundle\Entity\IndiceBoursier $idIndiceBoursier)
    {
        return $this->idIndiceBoursier->removeElement($idIndiceBoursier);
    }

    /**
     * Get idIndiceBoursier.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdIndiceBoursier()
    {
        return $this->idIndiceBoursier;
    }
}
