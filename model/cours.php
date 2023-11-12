<?php

class Cours
{
    private $id;
    private $titre;
    private $categorie;
    private $niveau;
    private $image;
    private $prix;
    private $note;
    private $description;
    private $content;

    public function __construct($id, $titre, $categorie, $niveau, $image, $prix, $note, $description, $content)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->categorie = $categorie;
        $this->niveau = $niveau;
        $this->image = $image;
        $this->prix = $prix;
        $this->note = $note;
        $this->description = $description;
        $this->content = $content;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function getTitre() 
    {
        return $this->titre;
    }

    public function setTitre($titre) 
    {
        $this->titre = $titre;
    }

    public function getCategorie() 
    {
        return $this->categorie;
    }

    public function setCategorie($categorie) 
    {
        $this->categorie = $categorie;
    }

    public function getNiveau() 
    {
        return $this->niveau;
    }

    public function setNiveau($niveau) 
    {
        $this->niveau = $niveau;
    }

    public function getImage() 
    {
        return $this->image;
    }
    public function setImage($image) 
    {
        $this->image = $image;
    }

    public function getPrix() 
    {
        return $this->prix;
    }

    public function setPrix($prix) 
    {
        $this->prix = $prix;
    }

    public function getNote()  
    {
        return $this->note;
    }
    
    public function setNote($note) 
    {
        $this->note = $note;
    }

    public function getDescription()  
    {
        return $this->description;
    }
    
    public function setDescription($description) 
    {
        $this->description = $description;
    }

    public function getContent()  
    {
        return $this->content;
    }
    
    public function setContent($content) 
    {
        $this->content = $content;
    }

}

?>