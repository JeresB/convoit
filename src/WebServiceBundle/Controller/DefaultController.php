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

        return $this->json(array('trajets' => $trajets));
    }

    public function searchAction($search)
    {
      $em = $this->getDoctrine()->getManager();

      $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, CONCAT(i.prenom, ' ', i.nom) AS internaute, vd.ville as depart, va.ville as arrivee
        FROM BackOfficeBundle:Trajet t,
        BackOfficeBundle:internaute i,
        BackOfficeBundle:Ville v,
        BackOfficeBundle:Ville vd,
        BackOfficeBundle:Ville va
        WHERE ((v.ville LIKE :search AND t.villeId = v.id)
        OR (v.ville LIKE :search AND t.villeId1 = v.id))
        AND vd.id = t.villeId AND va.id = t.villeId1 AND i.id = t.internauteId")
        ->setParameter('search', '%'.$search.'%');

      $trajets = $query->getResult();
      return $this->json(array('trajets' => $trajets));
    }

    public function detailsAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, i.prenom, i.nom, i.tel, i.mail, vd.ville as depart, vd.cp as depart_cp, va.ville as arrivee, vd.cp as arrivee_cp
        FROM BackOfficeBundle:Trajet t,
        BackOfficeBundle:internaute i,
        BackOfficeBundle:Ville v,
        BackOfficeBundle:Ville vd,
        BackOfficeBundle:Ville va
        WHERE t.id = :id AND vd.id = t.villeId AND va.id = t.villeId1 AND i.id = t.internauteId LIMIT 1")
        ->setParameter('id', $id);

      $trajets = $query->getResult();
      return $this->json(array('trajets' => $trajets[0]));
    }
}
