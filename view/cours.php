<?php $titre = 'LearnHub - Cours'?>
<?php $CSS = '../style/cours.css'?>
<?php require_once 'links.php'?>

<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php  require_once 'header.php'; ?>

        <div class="container-center" id="container-center">
            <div class="container-titre" id="container-titre">
                <?php
                    try
                    {
                        if (isset($_GET['cours'])) 
                        {
                            if ($_GET['cours'] == "tous")
                            {
                                echo "<span class='titre' id='titre'>Tous les cours</span>";
                            }
                            if ($_GET['cours'] == "developpement")
                            {
                                echo "<span class='titre' id='titre'>D&eacute;veloppement</span>";
                            }
                            if ($_GET['cours'] == "langues")
                            {
                                echo "<span class='titre' id='titre'>Langues</span>";
                            }
                            if ($_GET['cours'] == "design")
                            {
                                echo "<span class='titre' id='titre'>Design</span>";
                            }
                            if ($_GET['cours'] == "fitness")
                            {
                                echo "<span class='titre' id='titre'>Sant&eacute;&Fitness</span>";
                            }
                        }
                    }
                    catch (Exception $e) 
                    {
                        echo ($e->getMessage());
                    }
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