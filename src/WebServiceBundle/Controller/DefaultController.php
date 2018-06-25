<?php

namespace WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $trajets = $em->getRepository('BackOfficeBundle:Trajet')->findAll();

        //return $this->json(array('trajets' => $trajets));
        return $this->render('WebServiceBundle:Default:index.html.twig', array("trajets" => $trajets));
    }
}
