<?php

class messageContact
{
    private $id;
    private $nomComplet;
    private $email;
    private $sujet;
    private $message;

    public function __construct($id, $nomComplet, $email, $sujet, $message)
    {
        $this->id = $id;
        $this->nomComplet = $nomComplet;
        $this->email = $email;
        $this->sujet = $sujet;
        $this->message = $message;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

}

?>