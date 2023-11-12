<?php

class ControlleurAdmin
{
    private $model;
    function __construct() 
    {
        $this->model = new ModelBDD();
    }

    function AjoutCour_Admin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $titre = $_POST['titre'];
            $niveau = $_POST['niveau'];
            $categorie = $_POST['categorie'];
            $image = $_POST['image'];
            $prix = $_POST['prix'];
            $note = $_POST['note'];
            $descri = $_POST['description'];
            $chemin = "../media/content/pdfs/" . $_FILES['fichier1']['name'];
            $sql = "INSERT INTO cours (titre, niveau, categorie, image, prix, note, description, contenu) VALUES ('$titre', '$niveau', '$categorie', '$image', '$prix', '$note', '$descri', '$chemin')";
            $this->model->execute_query($sql);
            return true;
        }
    }

    function AjoutVideo_Admin()
    { 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $titre1 = $_POST['titre1'];
            $niveau1 = $_POST['niveau1'];
            $categorie1 = $_POST['categorie1'];
            $image1 = $_POST['image1'];
            $prix1 = $_POST['prix1'];
            $note1 = $_POST['note1'];
            $descri1 = $_POST['description1'];
            $chemin_video1 = "../media/content/videos/" . $_FILES['video1']['name'];
            $sql = "INSERT INTO cours (titre, niveau, categorie, image, prix, note, description, contenu) VALUES ('$titre1', '$niveau1', '$categorie1', '$image1', '$prix1', '$note1', '$descri1', '$chemin_video1')";
            $this->model->execute_query($sql);
            return true;
        }
    }
    
    function AjoutUser_Admin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO utilisateur (nom,prenom,email,mdp) VALUES ('$nom','$prenom','$email','$password')";
            $this->model->execute_query($sql);
            return true;
        }
    }


    function modif_Admin() 
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            // Récupération des données du formulaire
            $id = $_POST['id3'];
            $nom = $_POST['nom3'];
            $prenom = $_POST['prenom3'];
            $Mail= $_POST['mail3'];
            $Pwd= $_POST['mdp3'];

            $sql = "UPDATE utilisateur SET nom = '$nom', prenom = '$prenom', email = '$Mail', mdp = '$Pwd' WHERE id = '$id'";
            $this->model->execute_query($sql);
            return true;
        }
    }
    
    function Supp_Admin($id)
    {
        $requete = "DELETE FROM utilisateur WHERE id = '$id'";
        $this->model->execute_query($requete);
        return true; 
    }

    function affich_info($id)
    {
        $contacts =$this->model->execute_query("SELECT * FROM utilisateur where id ='$id'")->fetchAll(PDO::FETCH_ASSOC);
        $contact = $contacts[0];
        $html = '
            <form  action="../index.php?action=admin_modifier" method="post" enctype="multipart/form-data>
                <label for="id3">Id :</label>
                <input type="text" id="id3" name="id3" value="'. htmlspecialchars($contact['id']).'" readonly>
                <label for="nom3">Nom :</label>
                <input type="text" id="nom3" name="nom3" value="'. htmlspecialchars($contact['nom']).'">
                <label for="prenom3">Prénom :</label>
                <input type="text" id="prenom3" name="prenom3" value="'. htmlspecialchars($contact['prenom']).'">
                <label for="email3">Mail :</label>
                <input type="text" id="email3" name="mail3" value="' . htmlspecialchars($contact['email']).'">
                <label for="MDP3">Mot de passe</label>
                <input type="text" id="MDP3" name="mdp3" value="' . htmlspecialchars($contact['mdp']) . '">
                <input type="submit" value="Modifier">
            </form>';
        return $html;
    }

    function All_utilisateur()
    {
        $contacts = $this->model->execute_query("SELECT * FROM utilisateur")->fetchAll(PDO::FETCH_ASSOC);
        return $contacts;
    }

    function getusers()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $nom = $_POST['Nom_admin'];
            $prenom = $_POST['Prenom_admin'];
            $users = $this->model->execute_query("SELECT * FROM utilisateur where nom='$nom' AND prenom='$prenom'")->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } 
    }

} 
?> 