<?php

namespace BookingBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookingController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="booking_homepage")
     */
    public function indexAction()
    {

        return $this->render("@Booking/Booking/index.html.twig");
    }

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @Route("/ticketing", name="booking_ticketing")
	 */
    public function ticketingAction()
    {
	    // Date de réservation : exception mardi, 0105, 0111, 2512

	    // Type de réservation : journée ou 1/2 journée à partir de 14h

	    // Exception : dimanche, jours fériés, > 1000 billets vendus, si > 14h pas de billet journée



        return $this->render("BookingBundle:Booking:ticketing.html.twig");
    }

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @Route("/ticketing/ordering", name="booking_ordering")
	 */
    public function orderingAction()
    {
        // on récupère les données du visiteur
        return $this->render("BookingBundle:Booking:ordering.html.twig");
    }

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @Route("/ticketing/ordering/checkout", name="booking_checkout")
	 */
    public function checkoutAction()
    {
        // on affiche les données récupérées avant de procéder au paiement
        // validation de panier
        return $this->render("BookingBundle:Booking:checkout.html.twig");
    }

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @Route("/paying", name="booking_paying")
	 */
    public function payingAction()
    {
        // paiement via API Stripe
        return $this->render("BookingBundle:Booking:paying.html.twig");
    }
}
