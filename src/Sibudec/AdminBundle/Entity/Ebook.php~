<?php

namespace Sibudec\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ebook
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ebook
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", unique=true, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", unique=true, nullable=false)
     */
    protected $author;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    protected $year;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="ebooks")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", unique=false, nullable=false)
     */
    protected $url;

    /**
     * @ORM\ManyToOne(targetEntity="Source", inversedBy="ebooks")
     * @ORM\JoinColumn(name="source_id", referencedColumnName="id")
     */
    protected $source;

    /**
     * @ORM\ManyToOne(targetEntity="AccessType", inversedBy="ebooks")
     * @ORM\JoinColumn(name="access_type_id", referencedColumnName="id")
     */
    protected $accessType;

    /**
     * @var string
     *
     * @ORM\Column(name="subscriptionType", type="string", unique=false, nullable=false)
     */
    protected $subscriptionType;

    /**
     * @var string
     *
     * @ORM\Column(name="bibliography", type="string", unique=false, nullable=true)
     */
    protected $bibliography;

    /**
     * @ORM\ManyToOne(targetEntity="Editorial", inversedBy="ebooks")
     * @ORM\JoinColumn(name="editorial_id", referencedColumnName="id")
     */
    protected $editorial;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", unique=false, nullable=false)
     */
    protected $status;


    

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
     * @return Ebook
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
     * @return Ebook
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
     * @return Ebook
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
     * Set url
     *
     * @param string $url
     * @return Ebook
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set subscriptionType
     *
     * @param string $subscriptionType
     * @return Ebook
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->subscriptionType = $subscriptionType;
    
        return $this;
    }

    /**
     * Get subscriptionType
     *
     * @return string 
     */
    public function getSubscriptionType()
    {
        return $this->subscriptionType;
    }

    /**
     * Set bibliography
     *
     * @param string $bibliography
     * @return Ebook
     */
    public function setBibliography($bibliography)
    {
        $this->bibliography = $bibliography;
    
        return $this;
    }

    /**
     * Get bibliography
     *
     * @return string 
     */
    public function getBibliography()
    {
        return $this->bibliography;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Ebook
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set category
     *
     * @param \Sibudec\AdminBundle\Entity\Category $category
     * @return Ebook
     */
    public function setCategory(\Sibudec\AdminBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Sibudec\AdminBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set source
     *
     * @param \Sibudec\AdminBundle\Entity\Source $source
     * @return Ebook
     */
    public function setSource(\Sibudec\AdminBundle\Entity\Source $source = null)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return \Sibudec\AdminBundle\Entity\Source 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set accessType
     *
     * @param \Sibudec\AdminBundle\Entity\AccessType $accessType
     * @return Ebook
     */
    public function setAccessType(\Sibudec\AdminBundle\Entity\AccessType $accessType = null)
    {
        $this->accessType = $accessType;
    
        return $this;
    }

    /**
     * Get accessType
     *
     * @return \Sibudec\AdminBundle\Entity\AccessType 
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * Set editorial
     *
     * @param \Sibudec\AdminBundle\Entity\Editorial $editorial
     * @return Ebook
     */
    public function setEditorial(\Sibudec\AdminBundle\Entity\Editorial $editorial = null)
    {
        $this->editorial = $editorial;
    
        return $this;
    }

    /**
     * Get editorial
     *
     * @return \Sibudec\AdminBundle\Entity\Editorial 
     */
    public function getEditorial()
    {
        return $this->editorial;
    }
}