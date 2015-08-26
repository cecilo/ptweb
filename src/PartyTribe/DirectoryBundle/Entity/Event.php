<?php

namespace PartyTribe\DirectoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="fk_Event_Venue_1", columns={"venue_id"}), @ORM\Index(name="fk_Event_Company_1", columns={"CompanyID"})})
 * @ORM\Entity
 */
class Event
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="dresscode_tags", type="string", length=255, nullable=true)
     */
    private $dresscodeTags;

    /**
     * @var string
     *
     * @ORM\Column(name="genre_tags", type="string", length=255, nullable=true)
     */
    private $genreTags;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=true)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="weekdays", type="string", length=255, nullable=true)
     */
    private $weekdays;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_recurring", type="boolean", nullable=true)
     */
    private $isRecurring;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="Loves", type="integer", nullable=false)
     */
    private $loves;

    /**
     * @var integer
     *
     * @ORM\Column(name="Hates", type="integer", nullable=false)
     */
    private $hates;

    /**
     * @var integer
     *
     * @ORM\Column(name="Views", type="integer", nullable=false)
     */
    private $views;

    /**
     * @var integer
     *
     * @ORM\Column(name="event_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var \PartyTribe\DirectoryBundle\Entity\Venue
     *
     * @ORM\ManyToOne(targetEntity="PartyTribe\DirectoryBundle\Entity\Venue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="venue_id", referencedColumnName="venue_id")
     * })
     */
    private $venue;

    /**
     * @var \PartyTribe\DirectoryBundle\Entity\Company
     *
     * @ORM\ManyToOne(targetEntity="PartyTribe\DirectoryBundle\Entity\Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CompanyID", referencedColumnName="company_id")
     * })
     */
    private $companyid;



    /**
     * Set name
     *
     * @param string $name
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dresscodeTags
     *
     * @param string $dresscodeTags
     * @return Event
     */
    public function setDresscodeTags($dresscodeTags)
    {
        $this->dresscodeTags = $dresscodeTags;

        return $this;
    }

    /**
     * Get dresscodeTags
     *
     * @return string 
     */
    public function getDresscodeTags()
    {
        return $this->dresscodeTags;
    }

    /**
     * Set genreTags
     *
     * @param string $genreTags
     * @return Event
     */
    public function setGenreTags($genreTags)
    {
        $this->genreTags = $genreTags;

        return $this;
    }

    /**
     * Get genreTags
     *
     * @return string 
     */
    public function getGenreTags()
    {
        return $this->genreTags;
    }

    /**
     * Set time
     *
     * @param integer $time
     * @return Event
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set weekdays
     *
     * @param string $weekdays
     * @return Event
     */
    public function setWeekdays($weekdays)
    {
        $this->weekdays = $weekdays;

        return $this;
    }

    /**
     * Get weekdays
     *
     * @return string 
     */
    public function getWeekdays()
    {
        return $this->weekdays;
    }

    /**
     * Set isRecurring
     *
     * @param boolean $isRecurring
     * @return Event
     */
    public function setIsRecurring($isRecurring)
    {
        $this->isRecurring = $isRecurring;

        return $this;
    }

    /**
     * Get isRecurring
     *
     * @return boolean 
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set loves
     *
     * @param integer $loves
     * @return Event
     */
    public function setLoves($loves)
    {
        $this->loves = $loves;

        return $this;
    }

    /**
     * Get loves
     *
     * @return integer 
     */
    public function getLoves()
    {
        return $this->loves;
    }

    /**
     * Set hates
     *
     * @param integer $hates
     * @return Event
     */
    public function setHates($hates)
    {
        $this->hates = $hates;

        return $this;
    }

    /**
     * Get hates
     *
     * @return integer 
     */
    public function getHates()
    {
        return $this->hates;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Event
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set venue
     *
     * @param \PartyTribe\DirectoryBundle\Entity\Venue $venue
     * @return Event
     */
    public function setVenue(\PartyTribe\DirectoryBundle\Entity\Venue $venue = null)
    {
        $this->venue = $venue;

        return $this;
    }

    /**
     * Get venue
     *
     * @return \PartyTribe\DirectoryBundle\Entity\Venue 
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Set companyid
     *
     * @param \PartyTribe\DirectoryBundle\Entity\Company $companyid
     * @return Event
     */
    public function setCompanyid(\PartyTribe\DirectoryBundle\Entity\Company $companyid = null)
    {
        $this->companyid = $companyid;

        return $this;
    }

    /**
     * Get companyid
     *
     * @return \PartyTribe\DirectoryBundle\Entity\Company 
     */
    public function getCompanyid()
    {
        return $this->companyid;
    }
}
