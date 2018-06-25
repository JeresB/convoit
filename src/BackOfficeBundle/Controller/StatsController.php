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
        $nb_internaute = $resultat[0]['total'];

        $query = $em->createQuery("SELECT count(t.internauteId) Total FROM BackOfficeBundle:Trajet t group by t.internauteId having count(t.internauteId) > 2");

        $resultat = $query->getResult();
        $nb_internaute_trajet_2 = $resultat;

        return $this->render('BackOfficeBundle:Default:stats.html.twig',
          array("nb_internaute" => $nb_internaute,
                "nb_internaute_trajet_2" => $nb_internaute_trajet_2));
    }
}
