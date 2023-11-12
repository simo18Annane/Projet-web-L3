<?php $titre = 'LearnHub - Apprendre en Ligne'?>
<?php $CSS = '../style/accueil.css'?>
<?php require_once 'links.php'?>

<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php require "header.php"; ?>
        
        <div class="container-center" id="container-center">
            <div class="container-center-1" id="container-center-1">
                <div class="container-center-left" id="container-center-left">
                    <h1 class="presentation-big" id="presentation-big">L'ultime et innovante plateforme de cours en ligne</h1>
                    <p class="presentation-small" id="presentation-small">Notre plateforme offre une large sélection de cours dans différents domaines, allant des compétences professionnelles aux loisirs créatifs.</p>
                    <?php
                        if(isset($_SESSION['nom']))
                        { 
                            echo "<a href='index.php?cours=tous'>";
                            echo "<span class='get-started' id='get-started'>Commencer</span>";
                            echo "</a>";
                        }
                        else
                        {
                            echo "<a href='index.php?page=inscription'>";
                            //echo "<a href='index.php?page=qcm'>";
                            echo "<span class='get-started' id='get-started'>Commencer</span>";
                            echo "</a>";
                        }
                    ?>
                </div>
                <div class="container-center-right" id="container-center-right">
                    <img class="image-landing" src="../media/image-landing.svg">
                </div>
            </div>
            <div class="container-center-2" id="container-center-2">
                <div class="fresh-graduates" id="fresh-graduates">
                    <span class="number" id="number-1">12k+</span>
                    <p class="number-description" id="number-1-description">Nouveaux diplom&eacute;s</p>
                </div>
                <div class="years-of-experience" id="years-of-experience">
                    <span class="number" id="number-2">9+</span>
                    <p class="number-description" id="number-2-description">D'ann&eacute;es d'exp&eacute;rience</p>
                </div>
                <div class="excellence-awards" id="excellence-awards">
                    <span class="number" id="number-3">356+</span>
                    <p class="number-description" id="number-3-description">Prix d'excellence</p>
                </div>
                <div class="brand-partners" id="brand-partners">
                    <span class="number" id="number-4">45+</span>
                    <p class="number-description" id="number-4-description">Marques partenaires</p>
                </div>
            </div>
            <div class="container-center-3" id="container-center-3">
                <div class="container-center-3-title" id="container-center-3-title">
                    <h1 class="title-people-learning" id="title-people-learning">Les cours les plus visit&eacute;s de notre plateforme</h1>
                </div>
                <div class="courses-display" id="courses-display">
                    <a href=<?php echo "'index.php?pageCours=" . $course0->getId() . "'"; ?>">
                        <div class="course0" id="course0">
                            <img class="course-image" src="<?php echo $course0->getImage(); ?>">
                            <span class="course-title" id="course-title-1"><?php echo $course0->getTitre(); ?></span>
                            <div class="rating-and-price" id="rating-and-price-1">
                                <span class="rating" id="rating-1">
                                    <?php echo $course0->getNote(); ?>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <span class="price" id="price-1"><?php echo $course0->getNiveau(); ?></span>
                            </div>
                        </div>
                    </a>
                    <a href=<?php echo "'index.php?pageCours=" . $course1->getId() . "'"; ?>">
                        <div class="course1" id="course1">
                            <img class="course-image" src="<?php echo $course1->getImage(); ?>">
                            <span class="course-title" id="course-title-2"><?php echo $course1->getTitre(); ?></span>
                            <div class="rating-and-price" id="rating-and-price-2">
                                <span class="rating" id="rating-2">
                                    <?php echo $course1->getNote(); ?>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <span class="price" id="price-2"><?php echo $course1->getNiveau(); ?></span>
                            </div>
                        </div>
                    </a>
                    <a href=<?php echo "'index.php?pageCours=" . $course2->getId() . "'"; ?>">
                        <div class="course2" id="course2">
                            <img class="course-image" src="<?php echo $course2->getImage(); ?>">
                            <span class="course-title" id="course-title-3"><?php echo $course2->getTitre(); ?></span>
                            <div class="rating-and-price" id="rating-and-price-3">
                                <span class="rating" id="rating-3">
                                <?php echo $course2->getNote(); ?>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <span class="price" id="price-3"><?php echo $course2->getNiveau(); ?></span>
                            </div>
                        </div>
                    </a>
                    <a href=<?php echo "'index.php?pageCours=" . $course3->getId() . "'"; ?>">
                        <div class="course3" id="course3">
                            <img class="course-image" src="<?php echo $course3->getImage(); ?>">
                            <span class="course-title" id="course-title-4"><?php echo $course3->getTitre(); ?></span>
                            <div class="rating-and-price" id="rating-and-price-4">
                                <span class="rating" id="rating-4">
                                <?php echo $course3->getNote(); ?>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                                <span class="price" id="price-4"><?php echo $course3->getNiveau(); ?></span>
                            </div>
                        </div>
                    </a>
                </div>
                <a href=<?= $lienCoursAll ?>>
                    <div class="explore-more" id="explore-more">
                        <span class="explore-more-button" id="explore-more-button">Voir plus</span>
                    </div>
                </a>
            </div>
            <div class="container-center-4" id="container-center-4">
                <div class="top-categories" id="top-categories">
                    <h1 class="top-categories-title" id="top-categories-title">Cat&eacute;gories tendances</h1>
                </div>
                <div class="categories" id="categories">
                    <a href=<?= $lienCoursDev ?>>
                        <div class="development" id="development">D&eacute;veloppement</div>
                    </a>
                    <a href=<?= $lienCoursLang ?>>
                        <div class="languages" id="languages">Langues</div>
                    </a>
                    <a href=<?= $lienCoursDes ?>>
                        <div class="design" id="design">Design</div>
                    </a>
                    <a href=<?= $lienCoursFit ?>>
                        <div class="health" id="health">Sant&eacute;&Fitness</div>
                    </a>
                </div>
            </div>
        </div>

        <?php require "footer.php"; ?>
        
    </div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>