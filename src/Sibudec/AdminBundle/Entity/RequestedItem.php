<?php

namespace Sibudec\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * RequestedItem
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RequestedItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="journalTitle", type="string", length=255)
     */
    private $journalTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="volume", type="string", length=255, nullable=true)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="initialPage", type="integer", nullable=true)
     */
    private $initialPage;

    /**
     * @var integer
     *
     * @ORM\Column(name="finalPage", type="integer", nullable=true)
     */
    private $finalPage;

    /**
     * @var string
     *
     * @ORM\Column(name="requesterName", type="string", length=255)
     */
    private $requesterName;

    /**
     * @var string
     *
     * @ORM\Column(name="requesterEmail", type="string", length=255)
     * @Assert\Email(
     *     message = "El correo {{ value }} no es válido.",
     *     checkMX = true,
     *     checkHost = true
     * )
     */
    private $requesterEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="requesterSchool", type="string", length=255)
     */
    private $requesterSchool;

    /**
     * @var string
     *
     * @ORM\Column(name="requesterHQ", type="string", length=255)
     */
    private $requesterHQ;

    /**
     * @var string
     *
     * @ORM\Column(name="requesterPhone", type="string", length=255, nullable=true)
     */
    private $requesterPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return RequestedItem
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set journalTitle
     *
     * @param string $journalTitle
     * @return RequestedItem
     */
    public function setJournalTitle($journalTitle)
    {
        $this->journalTitle = $journalTitle;

        return $this;
    }

    /**
     * Get journalTitle
     *
     * @return string 
     */
    public function getJournalTitle()
    {
        return $this->journalTitle;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return RequestedItem
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set volume
     *
     * @param string $volume
     * @return RequestedItem
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return string 
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return RequestedItem
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set year
     *
     * @param string $year
     * @return RequestedItem
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set initialPage
     *
     * @param integer $initialPage
     * @return RequestedItem
     */
    public function setInitialPage($initialPage)
    {
        $this->initialPage = $initialPage;

        return $this;
    }

    /**
     * Get initialPage
     *
     * @return integer 
     */
    public function getInitialPage()
    {
        return $this->initialPage;
    }

    /**
     * Set finalPage
     *
     * @param integer $finalPage
     * @return RequestedItem
     */
    public function setFinalPage($finalPage)
    {
        $this->finalPage = $finalPage;

        return $this;
    }

    /**
     * Get finalPage
     *
     * @return integer 
     */
    public function getFinalPage()
    {
        return $this->finalPage;
    }

    /**
     * Set requesterName
     *
     * @param string $requesterName
     * @return RequestedItem
     */
    public function setRequesterName($requesterName)
    {
        $this->requesterName = $requesterName;

        return $this;
    }

    /**
     * Get requesterName
     *
     * @return string 
     */
    public function getRequesterName()
    {
        return $this->requesterName;
    }

    /**
     * Set requesterEmail
     *
     * @param string $requesterEmail
     * @return RequestedItem
     */
    public function setRequesterEmail($requesterEmail)
    {
        $this->requesterEmail = $requesterEmail;

        return $this;
    }

    /**
     * Get requesterEmail
     *
     * @return string 
     */
    public function getRequesterEmail()
    {
        return $this->requesterEmail;
    }

    /**
     * Set requesterPhone
     *
     * @param string $requesterPhone
     * @return RequestedItem
     */
    public function setRequesterPhone($requesterPhone)
    {
        $this->requesterPhone = $requesterPhone;

        return $this;
    }

    /**
     * Get requesterPhone
     *
     * @return string 
     */
    public function getRequesterPhone()
    {
        return $this->requesterPhone;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return RequestedItem
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return RequestedItem
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return RequestedItem
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set requesterSchool
     *
     * @param string $requesterSchool
     * @return RequestedItem
     */
    public function setRequesterSchool($requesterSchool)
    {
        $this->requesterSchool = $requesterSchool;

        return $this;
    }

    /**
     * Get requesterSchool
     *
     * @return string 
     */
    public function getRequesterSchool()
    {
        return $this->requesterSchool;
    }

    /**
     * Set requesterHQ
     *
     * @param string $requesterHQ
     * @return RequestedItem
     */
    public function setRequesterHQ($requesterHQ)
    {
        $this->requesterHQ = $requesterHQ;

        return $this;
    }

    /**
     * Get requesterHQ
     *
     * @return string 
     */
    public function getRequesterHQ()
    {
        return $this->requesterHQ;
    }
}
