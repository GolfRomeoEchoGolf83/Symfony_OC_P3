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
        return $this->render("@Booking/Booking/index.html.twig");
    }

    public function ticketingAction()
    {
        // on récupère les infos pour autoriser la création d'un ticket
        // contrainte jour : ouverture et pour le futur
        // contrainte type : jour, 1/2 journée

        return $this->render("BookingBundle:Booking:ticketing.html.twig");
    }

    public function orderingAction()
    {
        // on récupère les données du visiteur
        return $this->render("BookingBundle:Booking:ordering.html.twig");
    }

    public function checkoutAction()
    {
        // on affiche les données récupérées avant de procéder au paiement
        // validation de panier
        return $this->render("BookingBundle:Booking:checkout.html.twig");
    }

    public function payingAction()
    {
        // paiement via API Stripe
        return $this->render("BookingBundle:Booking:paying.html.twig");
    }
}
