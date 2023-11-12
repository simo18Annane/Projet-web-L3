<?php 

class Etudiant 
{

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $mot_de_passe;
    private $photo;
    private $cours
  
    public function __construct($nom, $prenom, $email, $mot_de_passe, $photo) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mot_de_passe = $mot_de_passe;
        $this->photo = $photo;
        $this->cours = array();
    }
  
    public function getId() 
    {
        return $this->id;
    }
  
    public function getNom() 
    {
        return $this->nom;
    }
  
    public function setNom($nom) 
    {
        $this->nom = $nom;
    }
  
    public function getPrenom() 
    {
        return $this->prenom;
    }
  
    public function setPrenom($prenom) 
    { 
        $this->prenom = $prenom;
    }
  
    public function getEmail() 
    {
        return $this->email;
    }
  
    public function setEmail($email) 
    {
        $this->email = $email;
    }
  
    public function getMotDePasse() 
    {
        return $this->mot_de_passe;
    }
  
    public function setMotDePasse($mot_de_passe) 
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    public function getPhoto() 
    {
        return $this->photo;
    }
  
    public function setPhoto($photo) 
    {
        $this->photo = $photo;
    }

    public function getCours() 
    {
        return $this->cours;
    }

    public function addCours($coursId) 
    {
        $this->cours.push($coursId);
    }

    public function lengthCours()
    {
        return count($this->cours);
    }

  }

?>

