<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CahierCharge
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CahierCharge
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
     * @var boolean
     *
     * @ORM\Column(type="boolean",nullable=true,options={"default"=0})
     *
     */
    private $chargeAccepted;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean",nullable=true,options={"default"=0})
     *
     */
    private $adminAccepted;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    private $dateEvent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectif;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $details;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $program;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $listInvited;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $equipments;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\President", inversedBy="CahierCharge" ,cascade="persist")
     * @ORM\JoinColumn(name="president_id", referencedColumnName="id")
     * */
    private $president;

    /**
     * @ORM\ManyToOne(targetEntity="Club", inversedBy="CahierCharge" ,cascade="persist")
     * @ORM\JoinColumn(name="club_id", referencedColumnName="id")
     * */
    private $club;


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
     * Set chargeAccepted
     *
     * @param boolean $chargeAccepted
     *
     * @return CahierCharge
     */
    public function setChargeAccepted($chargeAccepted)
    {
        $this->chargeAccepted = $chargeAccepted;

        return $this;
    }

    /**
     * Get chargeAccepted
     *
     * @return boolean
     */
    public function getChargeAccepted()
    {
        return $this->chargeAccepted;
    }

    /**
     * Set adminAccepted
     *
     * @param boolean $adminAccepted
     *
     * @return CahierCharge
     */
    public function setAdminAccepted($adminAccepted)
    {
        $this->adminAccepted = $adminAccepted;

        return $this;
    }

    /**
     * Get adminAccepted
     *
     * @return boolean
     */
    public function getAdminAccepted()
    {
        return $this->adminAccepted;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return CahierCharge
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return CahierCharge
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateEvent
     *
     * @param \DateTime $dateEvent
     *
     * @return CahierCharge
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    /**
     * Get dateEvent
     *
     * @return \DateTime
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     *
     * @return CahierCharge
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
     * Set details
     *
     * @param string $details
     *
     * @return CahierCharge
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set program
     *
     * @param string $program
     *
     * @return CahierCharge
     */
    public function setProgram($program)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return string
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Set listInvited
     *
     * @param string $listInvited
     *
     * @return CahierCharge
     */
    public function setListInvited($listInvited)
    {
        $this->listInvited = $listInvited;

        return $this;
    }

    /**
     * Get listInvited
     *
     * @return string
     */
    public function getListInvited()
    {
        return $this->listInvited;
    }

    /**
     * Set equipments
     *
     * @param string $equipments
     *
     * @return CahierCharge
     */
    public function setEquipments($equipments)
    {
        $this->equipments = $equipments;

        return $this;
    }

    /**
     * Get equipments
     *
     * @return string
     */
    public function getEquipments()
    {
        return $this->equipments;
    }

    /**
     * Set president
     *
     * @param \UserBundle\Entity\President $president
     *
     * @return CahierCharge
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

    /**
     * Set club
     *
     * @param \AdminBundle\Entity\Club $club
     *
     * @return CahierCharge
     */
    public function setClub(\AdminBundle\Entity\Club $club = null)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return \AdminBundle\Entity\Club
     */
    public function getClub()
    {
        return $this->club;
    }
}
