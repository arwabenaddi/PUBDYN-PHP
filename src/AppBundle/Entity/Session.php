<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session", indexes={@ORM\Index(name="idx_expir", columns={"session_expires"})})
 * @ORM\Entity
 */
class Session
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=32, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId = '';

    /**
     * @var int
     *
     * @ORM\Column(name="session_expires", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sessionExpires = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="session_data", type="text", length=65535, nullable=true)
     */
    private $sessionData;



    /**
     * Get sessionId.
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionExpires.
     *
     * @param int $sessionExpires
     *
     * @return Session
     */
    public function setSessionExpires($sessionExpires)
    {
        $this->sessionExpires = $sessionExpires;

        return $this;
    }

    /**
     * Get sessionExpires.
     *
     * @return int
     */
    public function getSessionExpires()
    {
        return $this->sessionExpires;
    }

    /**
     * Set sessionData.
     *
     * @param string|null $sessionData
     *
     * @return Session
     */
    public function setSessionData($sessionData = null)
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    /**
     * Get sessionData.
     *
     * @return string|null
     */
    public function getSessionData()
    {
        return $this->sessionData;
    }
}
