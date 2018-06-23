<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trajets = $em->getRepository('BackOfficeBundle:Trajet')->findAll();

        return $this->render('FrontOfficeBundle:Default:index.html.twig',
          array("trajets" => $trajets));
    }

    public function detailsAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $trajet = $em->getRepository('BackOfficeBundle:Trajet')->find($id);

      return $this->render('FrontOfficeBundle:Default:details.html.twig',
        array("infos" => $trajet));
    }

    public function searchAction($search)
    {
      $em = $this->getDoctrine()->getManager();
      $query = $em->createQuery("SELECT t.id, t.nbKm
        FROM BackOfficeBundle:Trajet t,
        BackOfficeBundle:Ville v
        WHERE v.ville LIKE ? AND
        t.villeId = v.id")
        ->setParameter('%'.$search.'%');

      $trajets = $query->getResult();

      return $this->render('FrontOfficeBundle:Default:index.html.twig',
        array("trajets" => $trajets));
    }
}
