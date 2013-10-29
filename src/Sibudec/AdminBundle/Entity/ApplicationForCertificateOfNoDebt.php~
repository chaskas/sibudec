<?php

namespace Sibudec\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApplicationForCertificateOfNoDebt
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ApplicationForCertificateOfNoDebt
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
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="RUT", type="string", length=255)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="degree", type="string", length=255)
     */
    private $degree;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=255)
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="division", type="string", length=255)
     */
    private $division;


    

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
     * Get fullName
     *
     * @param string $fullName
     * @return ApplicationForCertificateOfNoDebt
     */
    public function getFullName()
    {
        return $this->lastName.", ".$this->firstName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set degree
     *
     * @param string $degree
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * Get degree
     *
     * @return string 
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return ApplicationForCertificateOfNoDebt
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
     * Set division
     *
     * @param string $division
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }
}
