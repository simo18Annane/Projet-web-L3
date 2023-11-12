<div class="container-header" id="container-header">
    <div class="container-header-1" id="container-header-1">
        <div class="container-logo" id="container-logo">
            <a href=<?= $lienIndex ?> >
                <span class="logo" id="logo">LearnHub.</span>
            </a>
        </div>
        <div class="container-sign-in-up" id="container-sign-in-up">
            <?php 
                if(isset($_SESSION['nom']))
                {   
                    echo "<div class='container-menu-1' id='container-menu-1'>";
                    echo "<button class='dropbtn-1' id='dropbtn-1' onclick='showMenu_1()'>";
                    echo "" . $_SESSION['nom'] . " " . $_SESSION['prenom'] . "";
                    echo "</button>";
                    echo "<div class='dropdown-content-1' id='dropdown-menu-1'>";
                    echo "<a href='index.php?page=monCompte'>Mon compte</a>";
                    echo "<a href='../index.php?action=deconnexion'>D&eacute;connexion</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "<a href='index.php?page=monCompte'>";
                    echo "<div class='user-avatar'style='background-image: url(../media/avatar/avatar.jpg);'>";
                    echo "</div>";
                    echo "</a>";
                }
            ?>
            <a href=<?= $lienCnx ?> >
                <div class="container-sign-in" id="container-sign-in">
                    <span class="sign-in" id="sign-in">Se connecter</span>
                </div>
            </a>
            <?php
                if(isset($_SESSION['nom']))
                {
                    //echo "connected";
                    echo "<script>";
                    echo "var containerSignIn = document.getElementById('container-sign-in');";
                    echo "containerSignIn.style.display = 'none';";
                    echo "</script>";
                }
                else
                {
                    //echo "disconnected";
                    echo "<script>";
                    echo "var containerSignIn = document.getElementById('container-sign-in');";
                    echo "containerSignIn.style.display = 'flex';";
                    echo "</script>";
                }
            ?>
        </div>
    </div>
    <div class="container-header-2" id="container-header-2">
        <div class="container-components" id="container-components">
            <div class="container-menu" id="container-menu">
                <button class="dropbtn" id="dropbtn" onclick="showMenu()">
                    <i class="fa-solid fa-bars"></i>
                    Cours
                </button>
                <div class="dropdown-content" id="dropdown-menu">
                    <!-- <a href="index.php?page=quizz">Quizz</a> -->
                    <a href=<?= $lienCoursAll ?>>Tous les cours</a>
                    <a href=<?= $lienCoursDev ?>>D&eacute;veloppement</a>
                    <a href=<?= $lienCoursLang ?>>Langues</a>
                    <a href=<?= $lienCoursDes ?>>Design</a>
                    <a href=<?= $lienCoursFit ?>>Sant&eacute;&Fitness</a>
                </div>
            </div>
            <div class="container-forum" id="container-forum">
                <a href=<?= $lienForum ?>>
                    <span class="forum" id="forum">Forum</span>
                </a>
            </div>
            <?php
                if(isset($_SESSION['nom']))
                {
                    echo "<script>";
                    echo "let forumButton = document.getElementById('container-forum');";
                    echo "forumButton.style.display = 'block';";
                    echo "</script>";
                }
                else
                {
                    echo "<script>";
                    echo "let forumButton = document.getElementById('container-forum');";
                    echo "forumButton.style.display = 'none';";
                    echo "</script>";
                }
            ?>
            <div class="container-contact-us" id="container-contact-us">
                <a href=<?= $lienCtct ?>>
                    <span class="contact-us" id="contact-us">Nous contacter</span>
                </a>
            </div>
        </div>
        <div class="container-settings" id="container-settings">
            <div class="inner-settings" id="inner-settings">
                <p class="dark-mode-switch" id="dark-mode-switch">Th&egrave;me sombre</p>
                <input type="checkbox" class="toggle-switch" id="toggle-switch">
            </div>
        </div>
    </div>
    <script src="../assets/js/header.js"></script>
</div>