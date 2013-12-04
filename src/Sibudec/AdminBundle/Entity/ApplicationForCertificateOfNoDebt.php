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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="reasonStudent", type="string", length=255)
     */
    private $reasonStudent;

    /**
     * @ORM\ManyToOne(targetEntity="Degree", inversedBy="applies")
     * @ORM\JoinColumn(name="degree_id", referencedColumnName="id")
     */
    private $degree;

    /**
     * @var string
     *
     * @ORM\Column(name="studentType", type="integer", length=255)
     */
    private $studentType;

    /**
     * @var string
     *
     * @ORM\Column(name="reasonOfficer", type="string", length=255)
     */
    private $reasonOfficer;

    /**
     * @ORM\ManyToOne(targetEntity="Department", inversedBy="applies")
     * @ORM\JoinColumn(name="department_id", referencedColumnName="id")
     */
    protected $department;


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

    /**
     * Set reasonStudent
     *
     * @param string $reasonStudent
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setReasonStudent($reasonStudent)
    {
        $this->reasonStudent = $reasonStudent;

        return $this;
    }

    /**
     * Get reasonStudent
     *
     * @return string 
     */
    public function getReasonStudent()
    {
        return $this->reasonStudent;
    }

    /**
     * Set reasonOfficer
     *
     * @param string $reasonOfficer
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setReasonOfficer($reasonOfficer)
    {
        $this->reasonOfficer = $reasonOfficer;

        return $this;
    }

    /**
     * Get reasonOfficer
     *
     * @return string 
     */
    public function getReasonOfficer()
    {
        return $this->reasonOfficer;
    }

    /**
     * Set department
     *
     * @param \Sibudec\AdminBundle\Entity\Department $department
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setDepartment(\Sibudec\AdminBundle\Entity\Department $department = null)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \Sibudec\AdminBundle\Entity\Department 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set studentType
     *
     * @param integer $studentType
     * @return ApplicationForCertificateOfNoDebt
     */
    public function setStudentType($studentType)
    {
        $this->studentType = $studentType;

        return $this;
    }

    /**
     * Get studentType
     *
     * @return integer 
     */
    public function getStudentType()
    {
        return $this->studentType;
    }
}
