<?php

class ControlleurInscription
{

    private $model;

    function __construct() 
    {
        $this->model = new ModelBDD();
    }

    function Remplir_Table_Etudiant()
    {
        $email = $_POST['email'];
        $req=$this->model->execute_query("SELECT * FROM utilisateur WHERE email='$email'");

        if($req->rowCount()>0)
        {
            return false;
        }
        else if($email=='web_master@root.com')
        {
            return false;
        }
        else if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            
            $Session_Nom = $_POST['nom'];
            $Session_Prenom = $_POST['prenom'];
            $Session_Mail= $_POST['email'];
            $Session_Pwd= $_POST['mdp'];

            // Insértion de la BDD
            $sql = "INSERT INTO utilisateur (nom,prenom,email,mdp) VALUES ('$Session_Nom','$Session_Prenom','$Session_Mail','$Session_Pwd')";
            $this->model->execute_query($sql);
            // Récupération de l'ID de l'utilisateur nouvellement inséré
            $conn=$this->model->getconn();
            $id_utilisateur = $conn->lastInsertId();
            //affectation dans la session
            $_SESSION['prenom'] = $Session_Prenom;
            $_SESSION['nom'] = $Session_Nom ;
            $_SESSION['email'] = $Session_Mail ;
            $_SESSION['mdp'] = $Session_Pwd ;
            $_SESSION['id_utilisateur'] = $id_utilisateur;

            return true;
        } 
        else 
        {
            return false;
            exit();
        }
    }

}

?>