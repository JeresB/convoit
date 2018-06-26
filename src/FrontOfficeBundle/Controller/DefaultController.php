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
          ->getForm();

        $form->handleRequest($request);
        $submit = '';

        if ($form->isSubmitted() && $form->isValid()) {
          $search = $form["search"]->getData();
          $text = 'Résultats de la recherche : '.$search;

          $submit = $request->request->get('action');

          if ($submit == 'Recherche sur la ville d\'arrivée') {
            $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, IDENTITY(t.internauteId) as internaute, vd.ville as depart, va.ville as arrivee
              FROM BackOfficeBundle:Trajet t,
              BackOfficeBundle:Ville v,
              BackOfficeBundle:Ville vd,
              BackOfficeBundle:Ville va
              WHERE (v.ville LIKE :search AND t.villeId1 = v.id)
              AND vd.id = t.villeId AND va.id = t.villeId1")
              ->setParameter('search', '%'.$search.'%');
          } else if ($submit == 'Recherche sur la ville de départ') {
            $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, IDENTITY(t.internauteId) as internaute, vd.ville as depart, va.ville as arrivee
              FROM BackOfficeBundle:Trajet t,
              BackOfficeBundle:Ville v,
              BackOfficeBundle:Ville vd,
              BackOfficeBundle:Ville va
              WHERE (v.ville LIKE :search AND t.villeId = v.id)
              AND vd.id = t.villeId AND va.id = t.villeId1")
              ->setParameter('search', '%'.$search.'%');
          } else {
            $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, IDENTITY(t.internauteId) as internaute, vd.ville as depart, va.ville as arrivee
            FROM BackOfficeBundle:Trajet t,
            BackOfficeBundle:Ville v,
            BackOfficeBundle:Ville vd,
            BackOfficeBundle:Ville va
            WHERE ((v.ville LIKE :search AND t.villeId = v.id)
            OR (v.ville LIKE :search AND t.villeId1 = v.id))
            AND vd.id = t.villeId AND va.id = t.villeId1")
            ->setParameter('search', '%'.$search.'%');
          }


          $trajets = array();
          $trajets_result = $query->getResult();

          foreach ($trajets_result as $trajet) {
              // On récupère les infos de l'internaute
              $internaute = $em->getRepository('BackOfficeBundle:internaute')->find($trajet['internaute']);
              $trajet['internaute'] = $internaute;

              $trajets[] = $trajet;
          }


        } else {
          $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, IDENTITY(t.internauteId) as internaute, vd.ville as depart, va.ville as arrivee
            FROM BackOfficeBundle:Trajet t,
            BackOfficeBundle:Ville vd,
            BackOfficeBundle:Ville va
            WHERE vd.id = t.villeId AND va.id = t.villeId1");

          $trajets = $query->getResult();

          foreach ($trajets as $key => $trajet) {
            // On récupère les infos de l'internaute
            $internaute = $em->getRepository('BackOfficeBundle:internaute')->find($trajet['internaute']);
            $trajets[$key]['internaute'] = $internaute;
          }
        }

        return $this->render('FrontOfficeBundle:Default:index.html.twig',
          array("trajets" => $trajets,
                "form" => $form->createView(),
                "text" => $text,
                "submit" => $submit
          ));
    }

    public function detailsAction($id)
    {
      // On récupère le manager
      $em = $this->getDoctrine()->getManager();

      // On crée une requete pour récupérer le detail d'un trajet
      // + le nom de la ville de départ et d'arrivée
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

      // On récupère le résultat
      $trajets = $query->getResult();

      // On récupère les infos de l'internaute + voiture
      $internaute = $em->getRepository('BackOfficeBundle:internaute')->find($trajets[0]['internaute']);

      // On appel la page details.html.twig
      return $this->render('FrontOfficeBundle:Default:details.html.twig',
        array("infos" => $trajets[0],
              "internaute" => $internaute));
    }
}
