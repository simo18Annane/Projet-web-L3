<?php

class ControlleurContact
{

    private $model;

    function __construct()
    {
        $this->model = new ModelBDD();
    }

    function sendMessage()
    {
        $nomComplet = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $sql = "INSERT INTO contact_msg (nomComplet, email, sujet, message) VALUES ('$nomComplet', '$email', '$subject', '$message')";
        $this->model->execute_query($sql);
    }

}

?>