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

        $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, CONCAT(i.prenom, ' ', i.nom) AS internaute, vd.ville as depart, va.ville as arrivee
          FROM BackOfficeBundle:Trajet t,
          BackOfficeBundle:internaute i,
          BackOfficeBundle:Ville vd,
          BackOfficeBundle:Ville va
          WHERE vd.id = t.villeId AND va.id = t.villeId1 AND t.internauteId = i.id");

        $trajets = $query->getResult();
      //  $trajets = $em->getRepository('BackOfficeBundle:Trajet')->findAll();

        //return $this->json(array('trajets' => $trajets));
        return $this->render('WebServiceBundle:Default:index.html.twig', array("trajets" => $trajets));
    }
}
