<?php

namespace BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="visitorLastName", type="string", length=255)
     */
    private $visitorLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="visitorFirstName", type="string", length=255)
     */
    private $visitorFirstName;

    /**
     * @var string
     * @ORM\Column(name="ticketId", type="string", length=255)
     */
    private $ticketId;

	/**
	 * @var string
	 * @ORM\Column(name="nationality", type="string", length=255)
	 */
	private $nationality;


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
}
