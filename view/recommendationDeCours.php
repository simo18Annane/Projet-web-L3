<?php $titre = 'LearnHub - Recommendation de Cours'?>
<?php $CSS = '../style/recommendationDeCours.css'?>
<?php require_once 'links.php'?>

<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php  require_once 'header.php'; ?>

        <div class="container-center" id="container-center">
            <div class="container-titre" id="container-titre">
                <span class="titre" id="titre">Cours recommendés</span>
            </div>  

            <div class="resultat-qcm" id="resultat-qcm">
                <?php
                    $score_info = $_SESSION['score_info'];
                    $score = $score_info['score'];
                    $nombre_questions = $score_info['nombre_questions'];
                    $niveau = $score_info['niveau'];
                    
                    $template = simplexml_load_file('assets/xml/score.xml');
                    
                    $template->score = str_replace('%SCORE%', $score, (string)$template->score);
                    $template->score = str_replace('%NB_QUESTIONS%', $nombre_questions, (string)$template->score);
                    $template->niveau = str_replace('%NIVEAU%', $niveau, (string)$template->niveau);
                    
                    echo $template->asXML();
                ?>
            </div>
            <div class="container-courses" id="container-courses">
                <div class="courses-display" id="courses-display">
                    <?php
                        for($i = 0; $i < $nbCours; $i++)
                        {
                            $courseId = "course" . $i;
                            echo "<div class='course-overall'>";
                            echo "<a href='index.php?pageCours=" . $GLOBALS[$courseId]->getId() . "'>";
                            echo "<div class='course'>";
                            echo "<img class='course-image' src='" . $GLOBALS[$courseId]->getImage() . "'>";
                            echo "<span class='course-title'>" . $GLOBALS[$courseId]->getTitre() . "</span>";
                            echo "<div class='rating-and-price'>";
                            echo "<span class='rating'>";
                            echo $GLOBALS[$courseId]->getNote();
                            echo "<i class='fa-solid fa-star'></i>";
                            echo "</span>";
                            echo "<span class='price'>" . $GLOBALS[$courseId]->getNiveau();
                            echo "</span>";
                            echo "</div>";
                            echo "</div>";
                            echo "</a>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <?php require "footer.php"; ?>

    </div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>