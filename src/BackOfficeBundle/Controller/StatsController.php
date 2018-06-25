<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT count(i.id) as total FROM BackOfficeBundle:internaute i");

        $resultat = $query->getResult();

        return $this->render('BackOfficeBundle:Default:stats.html.twig',
          array("nb_internaute" => $resultat));
    }
}
