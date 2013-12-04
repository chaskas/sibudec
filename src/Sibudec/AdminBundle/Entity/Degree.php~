<?php

namespace Sibudec\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Degree
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Degree
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="ApplicationForCertificateOfNoDebt", mappedBy="degree")
     */
    protected $applies;

    public function __toString()
    {
        return $this->getName();
    }


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
     * Set name
     *
     * @param string $name
     * @return Degree
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
     * Constructor
     */
    public function __construct()
    {
        $this->applies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add applies
     *
     * @param \Sibudec\AdminBundle\Entity\ApplicationForCertificateOfNoDebt $applies
     * @return Degree
     */
    public function addApply(\Sibudec\AdminBundle\Entity\ApplicationForCertificateOfNoDebt $applies)
    {
        $this->applies[] = $applies;

        return $this;
    }

    /**
     * Remove applies
     *
     * @param \Sibudec\AdminBundle\Entity\ApplicationForCertificateOfNoDebt $applies
     */
    public function removeApply(\Sibudec\AdminBundle\Entity\ApplicationForCertificateOfNoDebt $applies)
    {
        $this->applies->removeElement($applies);
    }

    /**
     * Get applies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getApplies()
    {
        return $this->applies;
    }
}
