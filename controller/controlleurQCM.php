<?php
    class ControlleurQCM
    {

        private $model;

        function __construct() 
        {
            $this->model = new ModelBDD();
        }

        function checkReponse()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Initialisation du score
                $score = 0;
        
                // Récupération des réponses de l'utilisateur
                $reponses_utilisateur = $_POST['reponse'];
        
                // Vérification des réponses de l'utilisateur
                if($reponses_utilisateur['q1'] == 'A')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q2'] == 'B')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q3'] == 'A')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q4'] == 'C')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q5'] == 'A')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q6'] == 'B')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q7'] == 'A')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q8'] == 'A')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q9'] == 'B')
                {
                    $score++; 
                }
                if($reponses_utilisateur['q10'] == 'C')
                {
                    $score++; 
                }
        
                $nombre_questions = 10;
                $score_info = array(
                    'score' => $score,
                    'nombre_questions' => $nombre_questions,
                    'niveau' => ($score >= 5) ? 'Intermédiaire' : 'Débutant'
                );
                $_SESSION['score_info'] = $score_info;
            }
        }
    }
?>