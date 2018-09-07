<?php

namespace UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * President
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class President extends User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $nomPresident;


    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $prenomPresident;


    /**
     * @ORM\Column(type="integer")
     */
    protected $telPresident;


    public function __construct()
    {
        parent::__construct();
        $this->roles = array('ROLE_PRES');
        $this->enabled = true;
    }






    /**
     * Set nomPresident
     *
     * @param string $nomPresident
     *
     * @return President
     */
    public function setNomPresident($nomPresident)
    {
        $this->nomPresident = $nomPresident;

        return $this;
    }

    /**
     * Get nomPresident
     *
     * @return string
     */
    public function getNomPresident()
    {
        return $this->nomPresident;
    }

    /**
     * Set prenomPresident
     *
     * @param string $prenomPresident
     *
     * @return President
     */
    public function setPrenomPresident($prenomPresident)
    {
        $this->prenomPresident = $prenomPresident;

        return $this;
    }

    /**
     * Get prenomPresident
     *
     * @return string
     */
    public function getPrenomPresident()
    {
        return $this->prenomPresident;
    }

    /**
     * Set telPresident
     *
     * @param integer $telPresident
     *
     * @return President
     */
    public function setTelPresident($telPresident)
    {
        $this->telPresident = $telPresident;

        return $this;
    }

    /**
     * Get telPresident
     *
     * @return integer
     */
    public function getTelPresident()
    {
        return $this->telPresident;
    }

    public function __toString()
    {
        return $this->username ;
    }


}
