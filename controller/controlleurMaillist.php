<?php

class ControlleurMaillist
{

    private $model;

    function __construct() 
    {
        $this->model = new ModelBDD();
    }

    function addToMaillist()
    {
        $email = $_POST['email'];
        $req=$this->model->execute_query("SELECT * FROM maillist WHERE email='$email'");

        if($req->rowCount()>0)
        {
            return false;
            exit();
        }
        else if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            if(empty($_POST['email']))
            {
                return false;
                exit();
            }
            else
            {
                $sql = "INSERT INTO maillist (email) VALUES ('$email')";
                $this->model->execute_query($sql);
                return true;
            }
        }
        else 
        {
            return false;
            exit();
        }
    }

}
?>