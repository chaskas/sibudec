<?php

namespace Sibudec\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Editorial
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Editorial
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
     * @ORM\Column(name="name", type="string", unique=true, nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Ebook", mappedBy="editorial")
     */
    protected $ebooks;

    public function __construct()
    {
        $this->ebooks = new ArrayCollection();
    }

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
     * @return Editorial
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
     * Add ebooks
     *
     * @param \Sibudec\AdminBundle\Entity\Ebook $ebooks
     * @return Editorial
     */
    public function addEbook(\Sibudec\AdminBundle\Entity\Ebook $ebooks)
    {
        $this->ebooks[] = $ebooks;
    
        return $this;
    }

    /**
     * Remove ebooks
     *
     * @param \Sibudec\AdminBundle\Entity\Ebook $ebooks
     */
    public function removeEbook(\Sibudec\AdminBundle\Entity\Ebook $ebooks)
    {
        $this->ebooks->removeElement($ebooks);
    }

    /**
     * Get ebooks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEbooks()
    {
        return $this->ebooks;
    }
}
