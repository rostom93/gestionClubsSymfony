<?php

namespace UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ClubCharger
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ClubCharger extends User
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
       * @Assert\Length(
       *      min = "2",
       *      max = "20",
       *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères",
       *      maxMessage = "Votre nom ne peut pas être plus long que {{ limit }} caractères"
       * )
    */
    protected $nomClubCharger;

    /**
        * @ORM\Column(type="string", length=45)
        * @Assert\NotBlank
        * @Assert\Length(
        *      min = "2",
        *      max = "20",
        *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères",
        *      maxMessage = "Votre nom ne peut pas être plus long que {{ limit }} caractères"
        * )
  */
    protected $prenomClubCharger;


             /**
              * @ORM\Column(type="integer")
           */
    protected $telClubCharger;


        public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->roles = array('ROLE_ADMIN');
        $this->enabled = true;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    public function getNomClubCharger() {
        return $this->nomClubCharger;
    }

    public function getPrenomClubCharger() {
        return $this->prenomClubCharger;
    }

    public function getTelClubCharger() {
        return $this->telClubCharger;
    }

    public function setNomClubCharger($nomClubCharger) {
        $this->nomClubCharger = $nomClubCharger;
        return $this;
    }

    public function setPrenomClubCharger($prenomClubCharger) {
        $this->prenomClubCharger = $prenomClubCharger;
        return $this;
    }

    public function setTelClubCharger($telClubCharger) {
        $this->telClubCharger = $telClubCharger;
        return $this;
    }


}
