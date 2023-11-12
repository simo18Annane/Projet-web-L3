<?php

session_start(); 
require_once('config/autoload.php');

    

try 
{
    if (isset($_GET['action'])) 
    {
        switch ($_GET['action']) 
        {
            case "inscription":
                $inscri = new ControlleurInscription();
                if ($inscri->Remplir_Table_Etudiant()) 
                {
                    header("Location: index.php?page=qcm");
                } 
                else 
                {
                    header("Location: index.php?error=emaildejasouscrit");
                }
                exit;
                break;
            case "connexion":
                $connect = new ControlleurConnexion();
                if ($connect->Recup_Client()) 
                {
                    header("Location: index.php");
                } 
                else 
                {
                    header("Location: index.php?error=emailnonsouscrit");
                }
                exit;
                break;
            case "deconnexion":
                session_destroy();
                header("Location: index.php");
                exit;
                break;
            case "sendContactMessage":
                $contact = new ControlleurContact();
                $contact->sendMessage();
                header("Location: index.php?page=contact");
                exit;
                break;
            case "addToMaillist":
                $maillistControl = new ControlleurMaillist();
                $maillistControl->addToMaillist();
                header("Location: index.php");
                exit;
                break;
            case "admin_cours":
                $connect = new ControlleurAdmin();
                if($connect->AjoutCour_Admin())
                {
                  header("Location: index.php?page=administrateur");
                }
                else
                {
                  header("Location: view/test.php");
                }
                exit;
            case "admin_supprim":
                $connect = new ControlleurAdmin();
               
                    if($connect->Supp_Admin($_GET['Id']))
                    {
                        header("Location: index.php");
                      }
                      else
                      {
                        header("Location: view/test.php");
                      }
                exit;       
            case "affich_modif":
                header('Content-Type: text/HTML'); 
                $connect = new ControlleurAdmin();
                $user=$connect->affich_info($_GET['Id']);
                echo $user;
                exit; 
            case "admin_modifier":
                $connect = new ControlleurAdmin();
                if($connect->modif_Admin())
                {
                  header("Location: index.php");
                }
                else
                {
                  header("Location: view/test.php");
                }
                exit;
            case "admin_ajout":
                $connect = new ControlleurAdmin();
                if($connect->AjoutUser_Admin())
                {
                  header("Location: index.php");
                }
                else
                {
                  header("Location: view/test.php");
                }
               
               exit;

            case "admin_video":
                $connect = new ControlleurAdmin();
                //$connect->AjoutVideo_Admin();
                if($connect->AjoutVideo_Admin())
                {
                    header("Location: index.php?page=administrateur");
                }
                else
                {
                    header("Location: view/test.php");
                }
                exit;
                break;
            default:
                throw new Exception("Argument non valide");
        }
    } 
    else if (isset($_GET['error']))
    {
        switch ($_GET['error']) 
        {
            case "emailnonsouscrit":
                require_once 'view/connexion.php';
                echo "<script>";
                echo "console.log('error');";
                echo "messageCnxMail.innerHTML = 'Adresse non souscrite';";
                echo "emailInputCnx.style.borderBottom = 'solid 1px hsl(0, 100%, 50%)';";
                echo "messageCnxMail.style.display = 'block';";
                echo "emailInputCnx.focus();";
                echo "</script>";
                exit;
                break;
            case "emaildejasouscrit":
                require_once 'view/inscription.php';
                echo "<script>";
                echo "console.log('error');";
                echo "messageInsMail.innerHTML = 'Adresse d&eacute;ja souscrite';";
                echo "emailInputIns.style.borderBottom = 'solid 1px hsl(0, 100%, 50%)';";
                echo "messageInsMail.style.display = 'block';";
                echo "emailInputIns.focus();";
                echo "</script>";
                exit;
                break;
        }
    }
    else if (isset($_GET['addCours'])) 
    {   
        $utilisateur = new ControlleurUtilisateur();
        $courseId = $_GET['addCours'];
        $utilisateur->addCourseToUser($courseId);
        header("Location: index.php?pageCours=" . $courseId);
        exit;
    }
    else if (isset($_GET['page'])) 
    {
        switch ($_GET['page']) 
        {
            case "inscription":
                require_once 'view/inscription.php';
                exit;
                break;
            case "connexion":
                require_once 'view/connexion.php';
                exit;
                break;
            case "administrateur" :
                require_once 'view/administrateur.php';
                exit;
                break;
            case "monCompte":
                $canalcontrolleur=new ControlleurCanal();
                $coursList=$canalcontrolleur->getApprenantCours($_SESSION['id_utilisateur']);
                require_once 'view/compteUtilisateur.php';
                exit;
                break;
            case "qcm":
                $controlleurQCM = new ControlleurQCM();
                require_once 'view/qcm.php';
                exit;
                break;
            case "recommendationDeCours":
                $controlleurQCM = new ControlleurQCM();
                $controlleurQCM->checkReponse();
                $score = $_SESSION['score_info'];
                $cours = new ControlleurCours();
                if($score['niveau'] == "Débutant")
                {
                    $coursArray = $cours->recupCoursDebutant();
                }
                else
                {
                    $coursArray = $cours->recupCoursIntermediaire();
                }
                $nbCours = count($coursArray);
                $cours->recupCours($coursArray);
                require_once 'view/recommendationDeCours.php';
                exit;
                break;
            case "quizz":
                require_once 'view/quizz.php';
                exit;
                break;
            case "forum" :
                // Instanciez le contrôleur du forum
                $_SESSION['id_groupe']=0;
                $forumControlleur = ControlleurForum::getInstance();
                $canalcontrolleur = new ControlleurCanal();
                $All_Messages = $forumControlleur->get_messages(0);
                $coursList = $canalcontrolleur->getApprenantCours($_SESSION['id_utilisateur']);
                require_once 'view/forum.php';
                break;
            case "contact":
                require_once 'view/contact.php';
                exit;
                break;
        }
    }
    else if (isset($_GET['cours'])) 
    {
        switch ($_GET['cours']) 
        {
            case "tous":
                $cours = new ControlleurCours();
                $coursArray = $cours->recupAllCours();
                $nbCours = count($coursArray);
                $cours->recupCoursNoShuffle($coursArray);
                require_once 'view/cours.php';
                exit;
                break;
            case "developpement":
                $cours = new ControlleurCours();
                $coursArray = $cours->recupCoursDev();
                $nbCours = count($coursArray);
                $cours->recupCours($coursArray);
                require_once 'view/cours.php';
                exit;
                break;
            case "langues":
                $cours = new ControlleurCours();
                $coursArray = $cours->recupCoursLang();
                $nbCours = count($coursArray);
                $cours->recupCours($coursArray);
                require_once 'view/cours.php';
                exit;
                break;
            case "design":
                $cours = new ControlleurCours();
                $coursArray = $cours->recupCoursDes();
                $nbCours = count($coursArray);
                $cours->recupCours($coursArray);
                require_once 'view/cours.php';
                exit;
                break;
            case "fitness":
                $cours = new ControlleurCours();
                $coursArray = $cours->recupCoursFit();
                $nbCours = count($coursArray);
                $cours->recupCours($coursArray);
                require_once 'view/cours.php';
                exit;
                break;
        }
    }
    else if (isset($_GET['pageCours'])) 
    {
        $canalcontrolleur=new ControlleurCanal();
        if(isset($_SESSION['nom']))
        {
            $coursList=$canalcontrolleur->getApprenantCours($_SESSION['id_utilisateur']);
        }
        $cours = new ControlleurCours();
        $coursArray = $cours->recupAllCours();
        $nbCours = count($coursArray);
        $cours->recupCoursNoShuffle($coursArray);
        require_once 'view/pageCours.php';
    }
    else 
    {
        if(isset($_POST['Nom_admin']) && isset($_POST['Prenom_admin']))
            {
                header('Content-Type: text/HTML'); 
            // Traitez les données POST et renvoyez la réponse souhaitée
                $controller=new ControlleurAdmin();
                $contacts=$controller->getusers();
                // Affichage des contacts sous forme de tableau
                echo "<table>";
                echo "<thead><tr><th>Id</th><th>Nom</th><th>Email</th><th>Action</th></tr></thead>";
                echo "<tbody>";
                foreach ($contacts as $contact) {
                echo "<tr>";
                echo "<td>{$contact['id']}</td>";
                echo "<td>{$contact['nom']}</td>";
                echo "<td>{$contact['email']}</td>";
                echo "<td>";
                echo "<button class='BouttonModif' data-id='{$contact['id']}' >Modifier</button>";
                echo "<button class='add_supp' data-id='{$contact['id']}'>Supprimer</button>";
                echo "</td>";
                echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";

                exit(); 
            }
        // la vérification si on est connecté en mode administrateur
        if (isset($_SESSION['nom']) && $_SESSION['nom'] == 'root') 
        {
            header("Location: index.php?page=administrateur");
            exit;
        } 
        if (isset($_POST['message'])) 
        {
          $forumControlleur= ControlleurForum::getInstance();
          $forumControlleur->Ajouter_message();
          $Messages = $forumControlleur->get_messages($_SESSION['id_groupe']);
          echo $Messages;
          
        }
        if(isset($_POST['groupe']))
        {
          $forumControlleur= ControlleurForum::getInstance();
          $groupcontrolleur= controlleurGroupe::getInstance();
          if($_POST['groupe']=='Général')
          {
            $_SESSION['id_groupe']=0;
            $groupe=0;
          }
          else
          {
            $groupe=$groupcontrolleur->id_groupe($_POST['groupe']);
            $_SESSION['id_groupe']=$groupe;
          }
          $Messages = $forumControlleur->get_messages($groupe);
          echo $Messages;

        }
        else 
        {
            // l'affichage de la page d'accueil
            $cours = new ControlleurCours();
            $arrayCours = $cours->recupAllCours();
            $cours->recupCours($arrayCours);
            require_once('view/accueil.php');
        }
    }
} 
catch (Exception $e) 
{
    echo ($e->getMessage());
}

?>