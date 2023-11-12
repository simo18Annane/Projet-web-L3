<?php $titre = 'LearnHub - Compte Utilisateur'?>
<?php $CSS = '../style/compteUtilisateur.css'?>
<?php require_once 'links.php'?>

<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php  require_once 'header.php'; ?>

        <div class="container-center" id="container-center">
            <?php 
                if(isset($_SESSION['nom']))
                { 
                    echo "<div class='container-user' id='container-user'>";
                        echo "<div class='container-photo' id='container-photo'>";
                            echo "<div class='user-big-avatar' style='background-image: url(../media/avatar/avatar.jpg);'>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='container-greetings' id='container-greetings'>";
                            echo "<span class='greetings' id='greetings'>Bonjour, " . $_SESSION['nom'] . " " . $_SESSION['prenom'] . "</span>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class='container-mes-cours' id='container-mes-cours'>";
                        echo "<span class='mes-cours' id='mes-cours'>Mes Cours:</span>";
                    echo "</div>";
                    echo "<div class='container-courses' id='container-courses'>";
                        if(count($coursList) > 0)
                        {
                            echo "<div class='courses-display' id='courses-display'>";
                            foreach ($coursList as $cours)
                            {
                                echo "<div class='course-overall'>";
                                echo "<a href='index.php?pageCours=" . $cours['id'] . "'>";
                                echo "<div class='course'>";
                                echo "<img class='course-image' src='" . $cours['image'] . "'>";
                                echo "<span class='course-title'>" . $cours['titre'] . "</span>";
                                echo "<div class='rating-and-price'>";
                                echo "<span class='rating'>";
                                echo $cours['note'];
                                echo "<i class='fa-solid fa-star'></i>";
                                echo "</span>";
                                echo "<span class='price'>". $cours['niveau'];
                                echo "</span>";
                                echo "</div>";
                                echo "</div>";
                                echo "</a>";
                                echo "</div>";
                            }
                            echo "</div>";
                        }
                        else
                        {
                            echo "<div class='container-mes-cours-1' id='container-mes-cours-1'>";
                                echo "<span class='mes-cours-1' id='mes-cours-1'>Aucun cours</span>";
                            echo "</div>";
                        }
                    echo "</div>";
                }
            ?>
        </div>

        <?php require "footer.php"; ?>

    </div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>