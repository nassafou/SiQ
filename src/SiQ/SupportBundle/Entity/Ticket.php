<?php

namespace SiQ\SupportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="Ticket")
 * @ORM\Entity(repositoryClass="SiQ\SupportBundle\Entity\TicketRepository")
 */

class Ticket
{
    /**
     *@ORM\ManyToMany(targetEntity="SiQ\SupportBundle\Entity\Categorie", cascade={"persist"})
     */
    private $categories;
    
    
    /**
     *@ORM\OneToOne(targetEntity="SiQ\SupportBundle\Entity\Image", cascade={"persist"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $image;
    
    /**
     *@param SiQ\SupportBundle\Entity\Image $image
     */
    public function setImage(\SiQ\SupportBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    }
    
    /**
     *@return SiQ\SupportBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;
    
    /**
     *@var boolean
     *
     *@ORM\Column(name="publication", type="boolean")
     */
    private $publication;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Ticket
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
     * Set titre
     *
     * @param string $titre
     * @return Ticket
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Ticket
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Ticket
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
    
    
    
    // Et modification le constructeur pour mettre cet attribut publication à true par défaut
    public function __construct()
    {
        $this->date = new \Datetime();
        $this->publication = true;
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Ticket
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    
        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }
    

    /**
     * Add categories
     *
     * @param \SiQ\SupportBundle\Entity\Categorie $categories
     * @return Ticket
     */
    public function addCategorie(\SiQ\SupportBundle\Entity\Categorie $categorie)
    {
        $this->categories[] = $categorie;
    
        return $this;
    }

    /**
     * Remove categories
     *
     * @param \SiQ\SupportBundle\Entity\Categorie $categories
     */
    public function removeCategorie(\SiQ\SupportBundle\Entity\Categorie $categories)
    {
        $this->categories->removeElement($categorie);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}