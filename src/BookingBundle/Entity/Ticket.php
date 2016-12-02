<?php

namespace BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * ticket
 *
 * @ORM\Entity(repositoryClass="BookingBundle\Repository\TicketRepository")
 * @ORM\Table()
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */

    /*
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre nom ne peut contenir de chiffre")
     */
    private $visitorLastName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */

    /*
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre prénom ne peut contenir de chiffre")
     * )
     */
    private $visitorFirstName;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $ticketId;

	/**
	 * @var string
	 * @ORM\Column(name="nationality", type="string", length=255)
	 * @ORM\OneToOne()
	 */
	private $nationality;

	/**
	 * @var
	 * @ORM\Column(type="date")
	 * @ORM\OneToOne(targetEntity="BookingBundle\Entity\Booking", cascade={"persist"})
	 */
	/*
	 * @Assert\NotBlank()
	 * @Assert\Date(message="La date saisie n'est pas valide")
	 */
	private $birthDate;

    /**
	 * @var
	 * @ORM\Column(type="string", length=255)
     * @ORM\OneToOne(targetEntity="BookingBundle\Entity\Booking", cascade={"persist"})
	 */
	private $discount;


	/**
	 * @var
	 * @ORM\Column(type="integer")
	 * @ORM\OneToOne(targetEntity="BookingBundle\Entity\Booking", cascade={"persist"})
	 */
	private $price;


	/**
	 * @var
	 * @ORM\ManyToOne(targetEntity="BookingBundle\Entity\Booking")
	 */
	private $booking;


	public function __construct()
	{
		// fixer la nationalité sur France
		$this->nationality = 'Fr';
	}

	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set visitorLastName
     *
     * @param string $visitorLastName
     *
     * @return ticket
     */
    public function setVisitorLastName($visitorLastName)
    {
        $this->visitorLastName = $visitorLastName;

        return $this;
    }

    /**
     * Get visitorLastName
     *
     * @return string
     */
    public function getVisitorLastName()
    {
        return $this->visitorLastName;
    }

    /**
     * Set visitorFirstName
     *
     * @param string $visitorFirstName
     *
     * @return ticket
     */
    public function setVisitorFirstName($visitorFirstName)
    {
        $this->visitorFirstName = $visitorFirstName;

        return $this;
    }

    /**
     * Get visitorFirstName
     *
     * @return string
     */
    public function getVisitorFirstName()
    {
        return $this->visitorFirstName;
    }

    /**
     * Set ticketId
     *
     * @param string $ticketId
     *
     * @return ticket
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * Get ticketId
     *
     * @return string
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Ticket
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set birthDate
     *
     * @param string $birthDate
     *
     * @return Ticket
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }


    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return Ticket
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Ticket
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set ticket
     *
     * @param \BookingBundle\Entity\Booking $ticket
     *
     * @return Ticket
     */
    public function setTicket(\BookingBundle\Entity\Booking $ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \BookingBundle\Entity\Booking
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set booking
     *
     * @param \BookingBundle\Entity\Booking $booking
     *
     * @return Ticket
     */
    public function setBooking(\BookingBundle\Entity\Booking $booking = null)
    {
        $this->booking = $booking;

        return $this;
    }

    /**
     * Get booking
     *
     * @return \BookingBundle\Entity\Booking
     */
    public function getBooking()
    {
        return $this->booking;
    }
}
