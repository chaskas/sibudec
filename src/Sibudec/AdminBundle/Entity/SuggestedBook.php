<?php

namespace Sibudec\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SuggestedBook
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SuggestedBook
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
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_information", type="string", length=255)
     */
    private $additionalInformation;

    /**
     * @var integer
     *
     * @ORM\Column(name="format", type="integer")
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255)
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="petitioner_full_name", type="string", length=255)
     */
    private $petitionerFullName;

    /**
     * @var string
     *
     * @ORM\Column(name="petitioner_email", type="string", length=255)
     */
    private $petitionerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="petitioner_status", type="string", length=255)
     */
    private $petitionerStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="petitioner_area", type="string", length=255)
     */
    private $petitionerArea;


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
     * @return SuggestedBook
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
     * Set author
     *
     * @param string $author
     * @return SuggestedBook
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
     * Set year
     *
     * @param integer $year
     * @return SuggestedBook
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set additionalInformation
     *
     * @param string $additionalInformation
     * @return SuggestedBook
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * Get additionalInformation
     *
     * @return string 
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Set format
     *
     * @param integer $format
     * @return SuggestedBook
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return integer 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return SuggestedBook
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set petitionerFullName
     *
     * @param string $petitionerFullName
     * @return SuggestedBook
     */
    public function setPetitionerFullName($petitionerFullName)
    {
        $this->petitionerFullName = $petitionerFullName;

        return $this;
    }

    /**
     * Get petitionerFullName
     *
     * @return string 
     */
    public function getPetitionerFullName()
    {
        return $this->petitionerFullName;
    }

    /**
     * Set petitionerEmail
     *
     * @param string $petitionerEmail
     * @return SuggestedBook
     */
    public function setPetitionerEmail($petitionerEmail)
    {
        $this->petitionerEmail = $petitionerEmail;

        return $this;
    }

    /**
     * Get petitionerEmail
     *
     * @return string 
     */
    public function getPetitionerEmail()
    {
        return $this->petitionerEmail;
    }

    /**
     * Set petitionerStatus
     *
     * @param string $petitionerStatus
     * @return SuggestedBook
     */
    public function setPetitionerStatus($petitionerStatus)
    {
        $this->petitionerStatus = $petitionerStatus;

        return $this;
    }

    /**
     * Get petitionerStatus
     *
     * @return string 
     */
    public function getPetitionerStatus()
    {
        return $this->petitionerStatus;
    }

    /**
     * Set petitionerArea
     *
     * @param string $petitionerArea
     * @return SuggestedBook
     */
    public function setPetitionerArea($petitionerArea)
    {
        $this->petitionerArea = $petitionerArea;

        return $this;
    }

    /**
     * Get petitionerArea
     *
     * @return string 
     */
    public function getPetitionerArea()
    {
        return $this->petitionerArea;
    }
}
