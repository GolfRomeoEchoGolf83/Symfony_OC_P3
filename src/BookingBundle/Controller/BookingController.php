<?php

namespace BookingBundle\Controller;

use BookingBundle\Entity\Booking;
use BookingBundle\Entity\Ticket;
use BookingBundle\Form\BookingType;
use BookingBundle\Form\TicketType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Form;
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
    public function ticketingAction(Request $request)
    {
	    // création objet Booking
	    $booking = new Booking();
	    // creation du formulaire
	    $form = $this
		    ->get('form.factory')
		    ->create(BookingType::class, $booking);

	    /* gestion des erreurs
	    et des exceptions */

	    // Date de réservation : exception mardi, 0105, 0111, 2512
	    // Type de réservation : journée ou 1/2 journée à partir de 14h
	    // Exception : dimanche, jours fériés, > 1000 billets vendus, si > 14h pas de billet journée


	    // formulaire passé à la vue
	    return $this->render("BookingBundle:Booking:ticketing.html.twig", array(
	    	'form' => $form->createView(),
	    ));
    }

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @Route("/ticketing/ordering", name="booking_ordering")
	 */
    public function orderingAction()
    {
	    // création objet Ticket
	    $ticket = new Ticket();
	    // création du formulaire
	    $form = $this
		    ->get('form.factory')
		    ->create(TicketType::class, $ticket);

	    /* gestion des erreurs
	    et des exceptions */


	    // formulaire passé à la vue
        return $this->render("BookingBundle:Booking:ordering.html.twig", array(
        	'form' => $form->createView(),
        ));
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
