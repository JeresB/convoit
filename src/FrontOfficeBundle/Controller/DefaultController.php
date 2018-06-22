<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $voitures = $em->getRepository('BackOfficeBundle:Voiture')->findAll();

        return $this->render('FrontOfficeBundle:Default:index.html.twig',
          array("voitures" => $voitures));
    }
}
