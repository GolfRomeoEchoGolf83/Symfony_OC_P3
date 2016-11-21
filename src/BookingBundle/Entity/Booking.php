<?php

namespace BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Booking
 *
 * @ORM\Table(name="booking")
 * @ORM\Entity(repositoryClass="BookingBundle\Repository\BookingRepository")
 */
class Booking
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
     * @var \DateTime
     *
     * @ORM\Column(name="visitingDay", type="date")
     */
    private $visitingDay;

    /**
     * @var int
     *
     * @ORM\Column(name="kindOfTicket", type="integer")
     */
    private $kindOfTicket;

    /**
     * @var string
     *
     * @ORM\Column(name="emailVisitor", type="string", length=255)
     */
    private $emailVisitor;

    /**
     * @var int
     *
     * @ORM\Column(name="nbTicket", type="integer")
     */
    private $nbTicket;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Booking
     */
    public function setvisitingDay($date)
    {
        $this->visitingDay = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getvisitingDay()
    {
        return $this->visitingDay;
    }

    /**
     * Set kindOfTicket
     *
     * @param integer $kindOfTicket
     *
     * @return Booking
     */
    public function setKindOfTicket($kindOfTicket)
    {
        $this->kindOfTicket = $kindOfTicket;

        return $this;
    }

    /**
     * Get kindOfTicket
     *
     * @return int
     */
    public function getKindOfTicket()
    {
        return $this->kindOfTicket;
    }

    /**
     * Set emailVisitor
     *
     * @param string $emailVisitor
     *
     * @return Booking
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

    /**
     * Set nbTicket
     *
     * @param integer $nbTicket
     *
     * @return Booking
     */
    public function setNbTicket($nbTicket)
    {
        $this->nbTicket = $nbTicket;

        return $this;
    }

    /**
     * Get nbTicket
     *
     * @return int
     */
    public function getNbTicket()
    {
        return $this->nbTicket;
    }
}
