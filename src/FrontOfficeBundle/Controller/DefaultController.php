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
        $form = $this->createFormBuilder()
          ->add('search', TextType::class)
          ->add('Rechercher', SubmitType::class)
          ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          $search = $form["search"]->getData();

          return $this->redirectToRoute('search_homepage', array('search' => $search));
        }

        $em = $this->getDoctrine()->getManager();

        $trajets = $em->getRepository('BackOfficeBundle:Trajet')->findAll();

        return $this->render('FrontOfficeBundle:Default:index.html.twig',
          array("trajets" => $trajets,
                "form" => $form->createView()
          ));
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
      $query = $em->createQuery("SELECT t.id, t.nbKm, t.date, IDENTITY(t.internauteId), IDENTITY(t.villeId), IDENTITY(t.villeId1)
        FROM BackOfficeBundle:Trajet t,
        BackOfficeBundle:Ville v
        WHERE v.ville LIKE :search AND
        t.villeId = v.id")
        ->setParameter('search', '%'.$search.'%');

      $trajets = $query->getResult();

      return $this->render('FrontOfficeBundle:Default:index.html.twig',
        array("trajets" => $trajets));
    }
}
