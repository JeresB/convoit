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

        $query = $em->createQuery("SELECT internaute_id, count(*) Total FROM BackOfficeBundle:Trajet t group by t.internaute_id having count(*) > 2");

        $resultat = $query->getResult();

        return $this->render('BackOfficeBundle:Default:stats.html.twig',
          array("nb_internaute" => $nb_internaute,
                "nb_internaute_trajet_2" => $resultat));
    }
}
