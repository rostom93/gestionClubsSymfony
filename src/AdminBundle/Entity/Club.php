<?php


namespace AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class Club
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\President", inversedBy="CahierCharge" ,cascade="persist")
     * @ORM\JoinColumn(name="president_id", referencedColumnName="id")
     * */
    private $president;

    /**
     * @ORM\Column(type="integer")
     */
    protected $telClub;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $objectif;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $responsable;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Club
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set telClub
     *
     * @param integer $telClub
     *
     * @return Club
     */
    public function setTelClub($telClub)
    {
        $this->telClub = $telClub;

        return $this;
    }

    /**
     * Get telClub
     *
     * @return integer
     */
    public function getTelClub()
    {
        return $this->telClub;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     *
     * @return Club
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return string
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     *
     * @return Club
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set president
     *
     * @param \UserBundle\Entity\President $president
     *
     * @return Club
     */
    public function setPresident(\UserBundle\Entity\President $president = null)
    {
        $this->president = $president;

        return $this;
    }

    /**
     * Get president
     *
     * @return \UserBundle\Entity\President
     */
    public function getPresident()
    {
        return $this->president;
    }

    function __toString()
    {
        return $this->name ;
    }

}
