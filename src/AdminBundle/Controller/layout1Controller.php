<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class layout1Controller extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function userNameAction()
    {
      $user=$this->get('security.token_storage')->getToken()->getUser()->getUsername();
       return array( 'user'=>$user);
    }

    /**
     * @Route("/")
     * @Template()
     */
    public function idAction()
    {
        $user=$this->get('security.token_storage')->getToken()->getUser()->getId();
        return array( 'id'=>$user);
    }
}


