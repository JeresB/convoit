<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $text = '';

        $form = $this->createFormBuilder()
          ->add('search', TextType::class)
          ->add('Rechercher', SubmitType::class)
          ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $search = $form["search"]->getData();
          $text = 'Résultats de la recherche : '.$search;

          $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, IDENTITY(t.internauteId), IDENTITY(t.villeId), IDENTITY(t.villeId1)
            FROM BackOfficeBundle:Trajet t,
            BackOfficeBundle:Ville v
            WHERE v.ville LIKE :search AND
            (t.villeId = v.id OR t.villeId1 = v.id)")
            ->setParameter('search', '%'.$search.'%');

          $trajets = $query->getResult();
        } else {
          $trajets = $em->getRepository('BackOfficeBundle:Trajet')->findAll();
        }

        return $this->render('FrontOfficeBundle:Default:index.html.twig',
          array("trajets" => $trajets,
                "form" => $form->createView(),
                "text" => $text
          ));
    }

    public function detailsAction($id)
    {
      $em = $this->getDoctrine()->getManager();

      $query = $em->createQuery("SELECT t.id as id,
        t.nbKm as nbKm,
        t.date as date,
        IDENTITY(t.internauteId) as internaute,
        v1.ville as depart,
        v2.ville as arrivee
        FROM BackOfficeBundle:Trajet t,
        BackOfficeBundle:Ville v1,
        BackOfficeBundle:Ville v2
        WHERE t.villeId = v1.id AND t.villeId1 = v2.id AND t.id = :id")
        ->setParameter('id', $id);

      $trajets = $query->getResult();
      $trajet = $trajets[0];

      //$trajet = $em->getRepository('BackOfficeBundle:Trajet')->find($id);
      $internaute = $em->getRepository('BackOfficeBundle:internaute')->find($trajets[0].internauteId);

      return $this->render('FrontOfficeBundle:Default:details.html.twig',
        array("infos" => $trajets[0],
              "internaute" => $internaute));
    }
}
