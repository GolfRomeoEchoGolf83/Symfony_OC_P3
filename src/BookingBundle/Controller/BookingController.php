<?php

namespace BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookingController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('BookingBundle:Default:index.html.twig');
    }

    public function ticketingAction()
    {
        // on récupère les infos pour autoriser la création d'un ticket
        // contrainte jour : ouverture et pour le futur
        // contrainte type : jour, 1/2 journée

    }

    public function orderingAction()
    {
        // on récupère les données du visiteur

    }

    public function checkoutAction()
    {
        // on affiche les données récupérées avant de procéder au paiement
        // validation de panier

    }

    public function payingAction()
    {
        // paiement via API Stripe

    }
}
