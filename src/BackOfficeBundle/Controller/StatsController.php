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

        $query = $em->createQuery("SELECT count(t.internauteId) total FROM BackOfficeBundle:Trajet t group by t.internauteId having count(t.internauteId) > 2");

        $resultat = $query->getResult();
        $nb_internaute_trajet_2 = count($resultat);

        $query = $em->createQuery("SELECT IDENTITY(t.villeId) as ville_id, count(t) total FROM BackOfficeBundle:Trajet t group by t.villeId order by total desc")->setMaxResults(5);

        $resultat = $query->getResult();
        $top_depart = $resultat;

        $query = $em->createQuery("SELECT IDENTITY(t.villeId1) as ville_id, count(t) total FROM BackOfficeBundle:Trajet t group by t.villeId1 order by total desc")->setMaxResults(5);

        $resultat = $query->getResult();
        $top_arrivee = $resultat;

        return $this->render('BackOfficeBundle:Default:stats.html.twig',
          array("nb_internaute" => $nb_internaute,
                "nb_internaute_trajet_2" => $nb_internaute_trajet_2,
                "top_depart" => $top_depart,
                "top_arrivee" => $top_arrivee));
    }
}
