<?php

namespace BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * ticket
 *
 * @ORM\Entity(repositoryClass="BookingBundle\Repository\TicketRepository")
 * @ORM\Table(name="ticket")
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="visitor_last_name", type="string", length=255)
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
     * @ORM\Column(name="visitor_first_name", type="string", length=255)
     */

    /*
     *  @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Votre prénom ne peut contenir de chiffre")
     * )
     */
    private $visitorFirstName;

    /**
     * @var string
     * @ORM\Column(name="ticket_id", type="string", length=255)
     */
    private $ticketId;

	/**
	 * @var string
	 * @ORM\Column(name="nationality", type="string", length=255)
	 */
	private $nationality;

	/**
	 * @var
	 * @ORM\Column(name="birth_date", type="date")
	 */

	/*
	 * * @Assert\NotBlank()
	 * @Assert\Date(message="La date saisie n'est pas valide")
	 */
	private $birthDate;

	/**
	 * @var
	 * @ORM\Column(name="email_visitor", type="string", length=255)
	 */

	/*
	 *  @Assert\NotBlank()
	 * @Assert\Email(message = "L'adresse saisie ne correspond pas à un email")
	 */
	private $emailVisitor;


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
     * Set emailVisitor
     *
     * @param string $emailVisitor
     *
     * @return Ticket
     */
    public function setEmailVisitor($emailVisitor)
    {
        $this->emailVisitor = $emailVisitor;

        return $this;
    }

    /**
     * Get emailVisitor
     *
     * @return string
     */
    public function getEmailVisitor()
    {
        return $this->emailVisitor;
    }
}
