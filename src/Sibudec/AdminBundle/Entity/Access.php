<?php

namespace Sibudec\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Access
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
     * @ORM\OneToMany(targetEntity="Ebook", mappedBy="access")
     */
    protected $ebooks;

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
     * @return Access
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
        $this->ebooks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ebooks
     *
     * @param \Sibudec\AdminBundle\Entity\Ebook $ebooks
     * @return Access
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
