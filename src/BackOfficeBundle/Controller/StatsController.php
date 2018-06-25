<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT count(id) as total FROM BackOfficeBundle:internaute");

        $resultat = $query->getResult();

        return $this->render('BackOfficeBundle:Default:stats.html.twig',
          array("nb_internaute" => $resultat));
    }
}
