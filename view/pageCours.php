<?php $titre = 'LearnHub - Page de Cours'?>
<?php $CSS = '../style/pageCours.css'?>
<?php require_once 'links.php'?>

<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php  require_once 'header.php'; ?>

        <div class="container-center" id="container-center">
            <?php
                try
                {
                    if (isset($_GET['pageCours'])) 
                    {
                        for ($i = 0; $i < $nbCours; $i++)
                        {
                            $courseId = "course" . $i;
                            if ($_GET['pageCours'] == $GLOBALS[$courseId]->getId())
                            {
                                if (isset($_SESSION['nom']))
                                {
                                    echo "<div class='container-titre' id='container-titre'>";
                                    echo "<span class='titre' id='titre'>" . $GLOBALS[$courseId]->getTitre() . "</span>";
                                    echo "</div>";
                                    echo "<div class='contenu-cours' id='contenu-cours'>";
                                    echo "<div class='container-content' id='container-content'>";  
                                    foreach($coursList as $cours)
                                    {
                                        if($cours['id'] == $GLOBALS[$courseId]->getId())
                                        {
                                            if (strstr($GLOBALS[$courseId]->getContent(), '.mp4') == '.mp4')
                                            {
                                                echo "<video width='100%' height='100%' controls>";
                                                echo "<source src='" . $GLOBALS[$courseId]->getContent() . "' type='video/mp4'>";
                                                echo "</video>";
                                            }
                                            else if (strstr($GLOBALS[$courseId]->getContent(), '.pdf') == '.pdf')
                                            {  
                                                echo "<object data='" . $GLOBALS[$courseId]->getContent() . "' type='application/pdf' width='100%' height='600px'></object>";
                                            }
                                            else
                                            {
                                                echo "error";
                                            }
                                        }
                                    }
                                    echo "<div class='container-image' id='container-image'>";    
                                    echo "<img class='image-cours' src='" . $GLOBALS[$courseId]->getImage() . "'>";
                                    echo "</div>";  
                                    echo "</div>";
                                    echo "<div class='container-description' id='container-description'>";    
                                    echo "<span class='titre-description' id='titre-description'>Description</span>";
                                    echo "<p class='description-cours' id='description-cours'>" . $GLOBALS[$courseId]->getDescription() . "</p>";
                                    echo "<p class='categorie-cours' id='categorie-cours'>Cat&eacute;gorie : " . strtoupper($GLOBALS[$courseId]->getCategorie()) . "</p>";
                                    echo "<p class='niveau-cours' id='niveau-cours'>Niveau : " . $GLOBALS[$courseId]->getNiveau() . "</p>";
                                    echo "<p class='note-cours' id='note-cours'>Note : " . $GLOBALS[$courseId]->getNote() . "<i class='fa-solid fa-star'></i></p>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='container-button' id='container-button'>";    
                                    echo "<a href='index.php?addCours=" . $GLOBALS[$courseId]->getId() . "'>";
                                    echo "<span class='button-obtenir' id='button-obtenir'>Obtenir le cours</span>";
                                    echo "</a>";
                                    echo "</div>";
                                    foreach($coursList as $cours)
                                    {
                                        if($cours['id'] == $GLOBALS[$courseId]->getId())
                                        {
                                            echo "<script src='../assets/js/cours.js'></script>";
                                        }
                                    }
                                }
                                else
                                {
                                    echo "<div class='container-titre' id='container-titre'>";
                                    echo "<span class='titre' id='titre'>" . $GLOBALS[$courseId]->getTitre() . "</span>";
                                    echo "</div>";
                                    echo "<div class='contenu-cours' id='contenu-cours'>";
                                    echo "<div class='container-image' id='container-image'>";    
                                    echo "<img class='image-cours' src='" . $GLOBALS[$courseId]->getImage() . "'>";
                                    echo "</div>";
                                    echo "<div class='container-description' id='container-description'>";    
                                    echo "<span class='titre-description' id='titre-description'>Description</span>";
                                    echo "<p class='description-cours' id='description-cours'>" . $GLOBALS[$courseId]->getDescription() . "</p>";
                                    echo "<p class='categorie-cours' id='categorie-cours'>Cat&eacute;gorie : " . strtoupper($GLOBALS[$courseId]->getCategorie()) . "</p>";
                                    echo "<p class='niveau-cours' id='niveau-cours'>Niveau : " . $GLOBALS[$courseId]->getNiveau() . "</p>";
                                    echo "<p class='note-cours' id='note-cours'>Note : " . $GLOBALS[$courseId]->getNote() . "<i class='fa-solid fa-star'></i></p>";
                                    echo "</div>";
                                    echo "</div>";
                                    /* echo "<div class='container-button' id='container-button'>";    
                                    echo "<a href='index.php?cours'>";
                                    echo "<span class='button-obtenir' id='button-obtenir'>Obtenir le cours</span>";
                                    echo "</a>";
                                    echo "</div>"; */
                                }
                            }
                        }
                    }
                }
                catch (Exception $e) 
                {
                    echo ($e->getMessage());
                }
            ?>
        </div>

        <script src="../assets/js/contactValid.js"></script>

        <?php require "footer.php"; ?>
        
    </div>
    
<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>