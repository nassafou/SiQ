<?php

namespace SiQ\SupportBundle\Entity;

class Ticket1
{
    #code
    
    protected $id;
    protected $date;
    protected $titre;
    protected $auteur;
    protected $contenu;
    
    // Et bien sûr les getters/setters:
    
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }
    public function getContenu()
    {
        return $this->contenu;
    }
    
    
    
}
