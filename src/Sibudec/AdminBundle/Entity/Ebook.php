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
     * @ORM\Column(name="title", type="string", unique=false, nullable=false)
     */
    protected $title;  //Titulo

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", unique=false, nullable=false)
     */
    protected $author; //Autor

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    protected $year; //Año

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="ebooks")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $category; //Área Temática

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", unique=false, nullable=false)
     */
    protected $url; // URL

    /**
     * @ORM\ManyToOne(targetEntity="Source", inversedBy="ebooks")
     * @ORM\JoinColumn(name="source_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $source; // Base de datos y/o Plataforma

    /**
     * @ORM\ManyToOne(targetEntity="AccessType", inversedBy="ebooks")
     * @ORM\JoinColumn(name="access_type_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $accessType; // Tipo Acceso

    /**
     * @ORM\ManyToOne(targetEntity="Access", inversedBy="ebooks")
     * @ORM\JoinColumn(name="access_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     */
    protected $access; // Ingreso

    /**
     * @var string
     *
     * @ORM\Column(name="purchaseMode", type="string", unique=false, nullable=false)
     */
    protected $purchaseMode; // Modalidad de Compra

    /**
     * @var string
     *
     * @ORM\Column(name="subscriptionType", type="string", unique=false, nullable=false)
     */
    protected $subscriptionType; // Tipo de suscripción

    /**
     * @var string
     *
     * @ORM\Column(name="bibliography", type="string", unique=false, nullable=true)
     */
    protected $bibliography; // Tipo de Bibliografía

    /**
     * @ORM\ManyToOne(targetEntity="Editorial", inversedBy="ebooks")
     * @ORM\JoinColumn(name="editorial_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $editorial; // Editorial

    /**
     * @var string
     *
     * @ORM\Column(name="inMetasearch", type="string", unique=false, nullable=true)
     */
    protected $inMetasearch; // En Metabuscador

    /**
     * @var string
     *
     * @ORM\Column(name="activationDate", type="string", unique=false, nullable=true)
     */
    protected $activationDate; // Fecha de Activación

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", unique=false, nullable=true)
     */
    protected $note; // Notas

    /**
     * @var string
     *
     * @ORM\Column(name="userType", type="string", unique=false, nullable=false)
     */
    protected $userType; // Tipo de Usuario

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", unique=false, nullable=false)
     */
    protected $isbn; // ISBN

    /**
     * @var string
     *
     * @ORM\Column(name="purchaseYear", type="string", unique=false, nullable=false)
     */
    protected $purchaseYear; // Año de compra


    /**
     * @var boolean
     *
     * @ORM\Column(name="broken", type="boolean", unique=false, nullable=false)
     */
    protected $broken; // Enlace Roto

    

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

    /**
     * Set access
     *
     * @param \Sibudec\AdminBundle\Entity\Access $access
     * @return Ebook
     */
    public function setAccess(\Sibudec\AdminBundle\Entity\Access $access = null)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return \Sibudec\AdminBundle\Entity\Access 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set purchaseMode
     *
     * @param string $purchaseMode
     * @return Ebook
     */
    public function setPurchaseMode($purchaseMode)
    {
        $this->purchaseMode = $purchaseMode;

        return $this;
    }

    /**
     * Get purchaseMode
     *
     * @return string 
     */
    public function getPurchaseMode()
    {
        return $this->purchaseMode;
    }

    /**
     * Set inMetasearch
     *
     * @param string $inMetasearch
     * @return Ebook
     */
    public function setInMetasearch($inMetasearch)
    {
        $this->inMetasearch = $inMetasearch;

        return $this;
    }

    /**
     * Get inMetasearch
     *
     * @return string 
     */
    public function getInMetasearch()
    {
        return $this->inMetasearch;
    }

    /**
     * Set activationDate
     *
     * @param string $activationDate
     * @return Ebook
     */
    public function setActivationDate($activationDate)
    {
        $this->activationDate = $activationDate;

        return $this;
    }

    /**
     * Get activationDate
     *
     * @return string 
     */
    public function getActivationDate()
    {
        return $this->activationDate;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Ebook
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set userType
     *
     * @param string $userType
     * @return Ebook
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Ebook
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set purchaseYear
     *
     * @param string $purchaseYear
     * @return Ebook
     */
    public function setPurchaseYear($purchaseYear)
    {
        $this->purchaseYear = $purchaseYear;

        return $this;
    }

    /**
     * Get purchaseYear
     *
     * @return string 
     */
    public function getPurchaseYear()
    {
        return $this->purchaseYear;
    }

    /**
     * Set broken
     *
     * @param boolean $broken
     * @return Ebook
     */
    public function setBroken($broken)
    {
        $this->broken = $broken;

        return $this;
    }

    /**
     * Get broken
     *
     * @return boolean 
     */
    public function getBroken()
    {
        return $this->broken;
    }
}
