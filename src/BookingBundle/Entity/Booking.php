<?php

namespace BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Booking
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BookingBundle\Repository\BookingRepository")
 */
class Booking
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
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    // @Assert\Date(message="La date saisie n'est pas valide")
	// @Assert\Range(min="now")
    private $visitingDay;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    // @Assert\NotBlank()
	// @Assert\Choice({"journée", "demi-journée"})
    private $kindOfTicket;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    //  * @Assert\Range(
	// *     min=1,
	// *     max=1000,
	// *     minMessage="Vous devez commander au moins un billet",
	// *     maxMessage="Vous ne pouvez commander plus de 1000 billets
	//     * )
    private $nbTicket;

	/**
	 * @var
	 * @ORM\Column(type="string", length=255)
	 */
	// @Assert\NotBlank()
	// @Assert\Email(message = "L'adresse saisie ne correspond pas à un email")

    private $emailVisitor;


	public function __construct()
	{
		// défintion de la date
		$this->visitingDay = new \DateTime();
		// définition du type de billet (1 = jour / 1/2 = demi journée)
		$this->kindOfTicket = 1;
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
     * @param boolean $kindOfTicket
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
     * @return boolean
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
