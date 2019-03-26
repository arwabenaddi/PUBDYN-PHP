<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benchmark
 *
 * @ORM\Table(name="benchmark", indexes={@ORM\Index(name="def", columns={"defaut"}), @ORM\Index(name="nomord", columns={"nom"})})
 * @ORM\Entity
 */
class Benchmark
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_benchmark", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBenchmark;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_en", type="string", length=255, nullable=true)
     */
    private $nomEn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="defaut", type="boolean", nullable=true)
     */
    private $defaut;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Societes", inversedBy="idBenchmark")
     * @ORM\JoinTable(name="benchmark_societe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_benchmark", referencedColumnName="id_benchmark")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_societe", referencedColumnName="id_societe")
     *   }
     * )
     */
    private $idSociete;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Users", inversedBy="idBenchmark")
     * @ORM\JoinTable(name="benchmark_users",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_benchmark", referencedColumnName="id_benchmark")
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
        $this->idSociete = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idUsers = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idBenchmark.
     *
     * @return int
     */
    public function getIdBenchmark()
    {
        return $this->idBenchmark;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Benchmark
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
     * Set nomEn.
     *
     * @param string|null $nomEn
     *
     * @return Benchmark
     */
    public function setNomEn($nomEn = null)
    {
        $this->nomEn = $nomEn;

        return $this;
    }

    /**
     * Get nomEn.
     *
     * @return string|null
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }

    /**
     * Set defaut.
     *
     * @param bool|null $defaut
     *
     * @return Benchmark
     */
    public function setDefaut($defaut = null)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut.
     *
     * @return bool|null
     */
    public function getDefaut()
    {
        return $this->defaut;
    }

    /**
     * Add idSociete.
     *
     * @param \AppBundle\Entity\Societes $idSociete
     *
     * @return Benchmark
     */
    public function addIdSociete(\AppBundle\Entity\Societes $idSociete)
    {
        $this->idSociete[] = $idSociete;

        return $this;
    }

    /**
     * Remove idSociete.
     *
     * @param \AppBundle\Entity\Societes $idSociete
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdSociete(\AppBundle\Entity\Societes $idSociete)
    {
        return $this->idSociete->removeElement($idSociete);
    }

    /**
     * Get idSociete.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }

    /**
     * Add idUser.
     *
     * @param \AppBundle\Entity\Users $idUser
     *
     * @return Benchmark
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
