<?php

class message
{
    private string $message;
    private int $id_groupe;
    private $date;
    private string $utilisateur;

    function __construct(string $message, $date, string $utilisateur)
    {
        $this->message = $message;
        $this->date = $date;
        $this->utilisateur=$utilisateur;
    }

    // Getter pour $message
    function getMessage(): string
    {
        return $this->message;
    }

    // Setter pour $message
    function setMessage(string $message): void
    {
        $this->message = $message;
    }

    // Getter pour $id_groupe
    function getIdGroupe(): int
    {
        return $this->id_groupe;
    }

    // Setter pour $id_groupe
    function setIdGroupe(int $id_groupe): void
    {
        $this->id_groupe = $id_groupe;
    }

    // Getter pour $date
    function getDate(): string
    {
        return $this->date;
    }

    // Setter pour $date
    function setDate(string $date): void
    {
        $this->date = $date;
    }

    function getUtilisateur(): string
    {
        return $this->utilisateur;
    }

    function setUtilisateur(string $utilisateur): void
    {
        $this->utilisateur=$utilisateur;
    }

    function My_message(): string 
    {
        return $this->utilisateur."<br> ".$this->message."<br>".$this->date;
    }
}



?>