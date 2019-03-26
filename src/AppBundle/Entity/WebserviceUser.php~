<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebserviceUser
 *
 * @ORM\Table(name="webservice_user", uniqueConstraints={@ORM\UniqueConstraint(name="user_UNIQUE", columns={"user"})})
 * @ORM\Entity
 */
class WebserviceUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_webservice_user", type="integer", options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWebserviceUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="service_functions", type="text", length=65535, nullable=true)
     */
    private $serviceFunctions;



    /**
     * Get idWebserviceUser.
     *
     * @return int
     */
    public function getIdWebserviceUser()
    {
        return $this->idWebserviceUser;
    }

    /**
     * Set user.
     *
     * @param string|null $user
     *
     * @return WebserviceUser
     */
    public function setUser($user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set password.
     *
     * @param string|null $password
     *
     * @return WebserviceUser
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set serviceFunctions.
     *
     * @param string|null $serviceFunctions
     *
     * @return WebserviceUser
     */
    public function setServiceFunctions($serviceFunctions = null)
    {
        $this->serviceFunctions = $serviceFunctions;

        return $this;
    }

    /**
     * Get serviceFunctions.
     *
     * @return string|null
     */
    public function getServiceFunctions()
    {
        return $this->serviceFunctions;
    }
}
