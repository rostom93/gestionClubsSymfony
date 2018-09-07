<?php
/**
 * Created by IntelliJ IDEA.
 * User: TyreX
 * Date: 03/05/2017
 * Time: 20:35
 */

namespace AdminBundle\Controller;


use AdminBundle\Entity\CahierCharge;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 *
 */
class CahierController extends Controller
{
    /**
     * @Route("/admin_cahier",name="list_cahier")
     * @Template()
     */
    public function cahierAction(Request $request, $message = null)
    {
        /* list all cahiers */

        $user = $admin = $this->get('security.token_storage')->getToken()->getUser();
        $roles = $user->getRoles();
        $cahier = $this->getDoctrine()->getRepository("AdminBundle:CahierCharge")->findall();


        return array("message" => $message, 'cahiers' => $cahier);
    }

    /**
     * @Route("/admin_cahier/add",name="add_cahier")
     * @Template()
     */
    public function addCahierAction(Request $request)
    {
        /* add new centre */
        $message = null;
        $cahier = new CahierCharge();
        $form = $this->createForm('AdminBundle\Form\CahierType', $cahier);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cahier);
            $em->flush();

            $message = "Le cahier des charges a étè bien ajouté";
            return $this->redirect($this->generateUrl("list_cahier", array('message' => $message)));
        }
        return array('formCahier' => $form->createView());
    }

    /**
     * @Route("/admin_cahier/cahier/{id}/delete",name="delete_cahier")
     */
    public function deleteCahierAction($id)
    {
        /* delete  centre */
        $em = $this->getDoctrine()->getManager();
        $cahier = $em->getRepository('AdminBundle:CahierCharge')->find($id);
        $cahier->setChargeAccepted(false);
        $message = "Le cahier '{$cahier->getTitre()}' a été bien annulé";
        $em->persist($cahier);
        $em->flush();
        return $this->redirect($this->generateUrl("list_cahier", array('message' => $message)));
    }

    /**
     * @Route("/admin_cahier/cahier/{id}/valid",name="valid_cahier")
     */
    public function validCahierAction($id)
    {
        /* delete  centre */
        $em = $this->getDoctrine()->getManager();
        $cahier = $em->getRepository('AdminBundle:CahierCharge')->find($id);
        $cahier->setChargeAccepted(true);
        $message = "Le cahier '{$cahier->getTitre()}' a été bien confirmé";
        $em->persist($cahier);
        $em->flush();
        return $this->redirect($this->generateUrl("list_cahier", array('message' => $message)));
    }

    /**
     * @Route("/admin_cahier/cahier/{id}/adminValid",name="admin_valid_cahier")
     */
    public function adminValidCahierAction($id)
    {
        /* delete  centre */
        $em = $this->getDoctrine()->getManager();
        $cahier = $em->getRepository('AdminBundle:CahierCharge')->find($id);
        $cahier->setAdminAccepted(true);
        $message = "Le cahier '{$cahier->getTitre()}' a été bien confirmé par l'administrateur";
        $em->persist($cahier);
        $em->flush();
        return $this->redirect($this->generateUrl("list_cahier", array('message' => $message)));
    }

    /**
     * @Route("/admin_cahier/cahier/{id}/adminDelete",name="admin_delete_cahier")
     */
    public function adminDeleteCahierAction($id)
    {
        /* delete  centre */
        $em = $this->getDoctrine()->getManager();
        $cahier = $em->getRepository('AdminBundle:CahierCharge')->find($id);
        $message = "Le cahier '{$cahier->getTitre()}' a été bien confirmé par l'administrateur";
        $em->remove($cahier);
        $em->flush();
        return $this->redirect($this->generateUrl("list_cahier", array('message' => $message)));
    }
}