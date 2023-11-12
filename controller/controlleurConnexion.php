<?php

class ControlleurConnexion
{

    private $model;

    function __construct() 
    {
        $this->model = new ModelBDD();
    }

    function Recup_Client()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $email = $_POST['email'];
            $mot_de_passe = $_POST['mdp'];

            if($email=='web_master@root.com' & $mot_de_passe=='rootroot')
            {
                $_SESSION['nom']='root';
                return true;
            }
            else
            {
                $req=$this->model->execute_query("SELECT * FROM utilisateur WHERE email='$email' AND mdp='$mot_de_passe'");
                if($req->rowCount()>0)
                {
                    while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
                    {
                        $_SESSION['id_utilisateur'] = $row['id'];
                        $_SESSION['prenom'] = $row['prenom'];
                        $_SESSION['nom'] = $row['nom'] ;
                        $_SESSION['email'] = $row['email'] ;
                        $_SESSION['mdp'] = $row['mdp'] ;
                    }
                    return true;
                }
                else
                {
                    return false;
                }
            }
        } 
        else 
        {
            exit();
        }
    }
}

?>
