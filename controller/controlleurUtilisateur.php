<?php

class ControlleurUtilisateur
{

    private $model;

    function __construct() 
    {
        $this->model = new ModelBDD();
    }

    function addCourseToUser($courseId) 
    {
        $idUser = $_SESSION['id_utilisateur'];
        $sql = "INSERT INTO utilisateur_cours (id_utilisateur, id_cours) VALUES ('$idUser', '$courseId');";
        $this->model->execute_query($sql);
        $conn=$this->model->getconn();
    }

    private function getCoursById($id_cours) {
        $sql = $this->model->execute_query("SELECT titre FROM cours WHERE id='$id_cours'");
        $cours = $sql->fetch(PDO::FETCH_ASSOC);
        return $cours;
    }

    function getApprenantCours($apprenantId) {
        $sql=$this->model->execute_query("SELECT id_cours FROM utilisateur_cours WHERE id_utilisateur='$apprenantId'");
        if($sql->rowCount()>0)
        {
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) 
            {
                $id_cours=$row['id_cours'];
                $cours = $this->getCoursById($id_cours);
                $this->cours[]=$cours;
            }
        }
        return $this->cours;
    }

    function getApprenantCoursLength($apprenantId) {
        $sql=$this->model->execute_query("SELECT id_cours FROM utilisateur_cours WHERE id_utilisateur='$apprenantId'");
        if($sql->rowCount()>0)
        {
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) 
            {
                $id_cours=$row['id_cours'];
                $cours = $this->getCoursById($id_cours);
                $this->cours[]=$cours;
            }
        }
        return $sql->rowCount();
    }

    /* function Modifier_Table_Etudiant()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $pwd = $_POST['mdp'];
            $sql = "UPDATE utilisateur SET nom = $nom, prenom = $prenom, mdp = $pwd  WHERE utilisateur.email = $mail;";
            $this->model->execute_query($sql);
            $conn=$this->model->getconn();
        } 
        else 
        {
            exit();
        }
    } */

}

?>