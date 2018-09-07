<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\CahierCharge;
use AdminBundle\Entity\Club;
use Proxies\__CG__\UserBundle\Entity\President;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin")
 *
 */
class AccueilController extends Controller
{
    /**
     * @Route("/admin_accueil",name="admin_accueil")
     * @Template()
     */
    public function newsAction(Request $request)
    {
        $ree = null;
        //Instruction pour initialiser l'utilisateur connecté
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $roles = $user->getRoles();
        $ree = $this->getDoctrine()->getRepository("UserBundle:Admin")->findAll();
        //var_dump(get_class($ree[0]));die;
        return array('users', $ree);
    }



    /**
     * @Route("/admin_club/add",name="add_club")
     * @Template()
     */
    public function addClubAction(Request $request)
    {
        /* add new centre */
        $message = null;
        $club = new Club();
        $form = $this->createForm('AdminBundle\Form\ClubType', $club);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();

            $message = "Le club a étè bien ajouté";
            return $this->redirect($this->generateUrl("list_club", array('message' => $message)));
        }
        return array('formCLub' => $form->createView());
    }

    /**
     * @Route("/admin_club",name="list_club")
     * @Template()
     */
    public function clubAction(Request $request, $message = null)
    {
        /* list all clubs */

        $user = $admin = $this->get('security.token_storage')->getToken()->getUser();
        $roles = $user->getRoles();
        $club = $this->getDoctrine()->getRepository("AdminBundle:Club")->findall();


        return array("message" => $message, 'clubs' => $club);
    }




    /**
     * @Route("/admin_president/add",name="add_president")
     * @Template()
     */
    public function addPresidentAction(Request $request)
    {
        $message = null;
        $president = new President();
        $president->setEnabled(true);
        $president->setRoles(array("ROLE_PRES"));
        $form = $this->createForm('UserBundle\Form\PresidentType', $president);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($president);
            $em->flush();

            $message = "Le president du club a étè bien ajouté";
            return $this->redirect($this->generateUrl("add_club", array('message' => $message)));
        }
        return array('formPresident' => $form->createView());
    }

    /**
     * @Route("/admin_president/edit",name="edit_president")
     * @Template()
     */
    public function editPresidentAction()
    {
        $id = $this->get('security.token_storage')->getToken()->getUser()->getId();
        $message = null;
        $em = $this->getDoctrine()->getManager();
        $president = $em->getRepository('UserBundle:President')->find($id);
        $form = $this->createForm('UserBundle\Form\PresidentType', $president);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em->persist($president);
            $em->flush();
            $message = "Le president a étè bien modifié";
        }
        return array('formPresident' => $form->createView(), 'message' => $message);
    }

}


