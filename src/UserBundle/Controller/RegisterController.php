<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use UserBundle\Entity\Admin;
use UserBundle\Entity\President;
use UserBundle\Entity\ClubCharger;

class RegisterController extends Controller
{
    
    /**
     * @Route("/user", name="user")
     * @Template()
     */
    public function registerAction()
    {
        $factory = $this->get('security.encoder_factory');
        $admin = new Admin;
        $encoder = $factory->getEncoder($admin);
        $em = $this->getDoctrine()->getManager();
        $admin->setUsername("admin");
        $admin->setEmail("admin@admin.com");
        $password = $encoder->encodePassword('admin', $admin->getSalt());
        $admin->setPassword($password);
        $admin->setRoles(array("admin"));
        $admin->setEnabled(true);
        $em->persist($admin);
        $em->flush();
         return array();
    }
        /**
     * @Route("/club")
     * @Template()
     */
    public function registAction()
    {
        $factory = $this->get('security.encoder_factory');
        $clubcharger = new ClubCharger();
        $encoder = $factory->getEncoder($clubcharger);
        $em = $this->getDoctrine()->getManager();
        $clubcharger->setUsername("club");
        $clubcharger->setNomClubCharger("moez");
        $clubcharger->setPrenomClubCharger("chakchouk");
        $clubcharger->setTelClubCharger(54521520);
        $clubcharger->setEmail("club@club.com");
        $password = $encoder->encodePassword('club', $clubcharger->getSalt());
        $clubcharger->setPassword($password);
        $clubcharger->setEnabled(true);
        $em->persist($clubcharger);
        $em->flush();
         return array();
    }

    /**
     * @Route("/president")
     * @Template()
     */
    public function registersAction()
    {
        $factory = $this->get('security.encoder_factory');
        $president = new President();
        $encoder = $factory->getEncoder($president);
        $em = $this->getDoctrine()->getManager();
        $president->setUsername("president");
        $president->setEmail("president@president.com");
        $password = $encoder->encodePassword('president', $president->getSalt());
        $president->setPassword($password);
        $president->setEnabled(true);
        $em->persist($president);
        $em->flush();
        return array();
    }
}
