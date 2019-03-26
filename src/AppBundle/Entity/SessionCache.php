<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionCache
 *
 * @ORM\Table(name="session_cache", indexes={@ORM\Index(name="fk_session_cache_session1_idx", columns={"session_id"})})
 * @ORM\Entity
 */
class SessionCache
{
    /**
     * @var string
     *
     * @ORM\Column(name="variable", type="string", length=128, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $variable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valeur", type="text", length=16777215, nullable=true)
     */
    private $valeur;

    /**
     * @var \AppBundle\Entity\Session
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="session_id", referencedColumnName="session_id")
     * })
     */
    private $session;



    /**
     * Set variable.
     *
     * @param string $variable
     *
     * @return SessionCache
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;

        return $this;
    }

    /**
     * Get variable.
     *
     * @return string
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Set valeur.
     *
     * @param string|null $valeur
     *
     * @return SessionCache
     */
    public function setValeur($valeur = null)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur.
     *
     * @return string|null
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set session.
     *
     * @param \AppBundle\Entity\Session $session
     *
     * @return SessionCache
     */
    public function setSession(\AppBundle\Entity\Session $session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session.
     *
     * @return \AppBundle\Entity\Session
     */
    public function getSession()
    {
        return $this->session;
    }
}
