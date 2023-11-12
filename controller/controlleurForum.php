<?php

class ControlleurForum 
{

    private static $instance;
    private $model;
    private $message;
    private $messages;

    private function __construct() {
        $this->model = new ModelBDD();
        $this->messages = array();
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new ControlleurForum();
        }
        return self::$instance;
    }

    function Ajouter_message() {
       
        if (isset($_POST['message'])) {
            $message = $_POST['message'];
            $id_utilisateur=$_SESSION['id_utilisateur'];
            $groupe=$_SESSION['id_groupe'];
            $date = date('Y-m-d H:i:s');
            $resultat = $this->model->execute_query("SELECT * FROM messages WHERE message='$message'");
            if($resultat && $resultat->rowCount()>0){
                return;
            }
            $req = $this->model->execute_query("INSERT INTO messages (id_utilisateur, id_groupe, message, date) VALUES ('$id_utilisateur', '$groupe', '$message', '$date')");
        }  
    }

    function get_messages($id_groupe):string
    {
        $All_Messages='';
        $utilisateur='';
        $sql=$this->model->execute_query("SELECT * FROM messages WHERE id_groupe='$id_groupe'");
        if($sql->rowCount()>0)
                {
                    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) 
                    {
                        $message=$row['message'];
                        $date=$row['date'];
                        $id_utilisateur=$row['id_utilisateur'];

                        $rqt=$this->model->execute_query("SELECT Nom,Prenom FROM utilisateur WHERE id=' $id_utilisateur'");
                        if($rqt->rowCount()>0)
                        {
                            while ($row = $rqt->fetch(PDO::FETCH_ASSOC)) 
                            {
                                $Nom=$row['Nom'];
                                $Prenom=$row['Prenom'];
                                $utilisateur= $Nom ." ".$Prenom;
                            }
                        }
                        $this->message= new message($message,$date,$utilisateur);
                        $All_Messages=$All_Messages.$this->message->My_message()."<br>";

                    }
                }
            return $All_Messages;
        
    }
}

class ControlleurCanal
{
    private $model;
    private $cours;
    
    function __construct() {
        $this->model = new ModelBDD();
        $this->cours=array();
    }

    public function getCurs()
    {
        return $this->cours;
    }

    public function getApprenantCours($apprenantId) {
        // Utilisez le modèle Apprenant pour récupérer les cours associés à l'apprenant
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

    private function getCoursById($id_cours) {
        $sql = $this->model->execute_query("SELECT id, titre, image, niveau, note FROM cours WHERE id='$id_cours'");
        $cours = $sql->fetch(PDO::FETCH_ASSOC);
        return $cours;
    }
}

class controlleurGroupe
{
    private static $instance;
    private $model;

    private function __construct() {
        $this->model = new ModelBDD();
    }
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new ControlleurGroupe();
        }
        return self::$instance;
    }

    public function id_groupe($titre) : int
    {
        // Créez une connexion à la base de données
        $conn = $this->model->getBdd();
        
        // Utilisez des placeholders pour le titre
        $sql = "SELECT id FROM cours WHERE titre = :titre";
        
        // Préparez et exécutez la requête préparée en passant les paramètres
        $stmt = $conn->prepare($sql);
        $stmt->execute([':titre' => $titre]);

        $groupe = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifiez si l'ID du groupe a été trouvé et extrayez-le du tableau associatif
        if ($groupe !== false && isset($groupe['id'])) {
            return (int) $groupe['id'];
        } else {
            return -1;
        }
    }

    
}

?>