<?php $titre='LearnHub - Forum de communication'?>
<?php $CSS = '../style/forum.css'?>
<?php require_once 'links.php'?>
 
<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php  require_once 'header.php'; ?>

        <div class="container-center" id="container-center">
            <div class="container-sidebar" id="container-sidebar">
                <div class="sidebar" id="sidebar">
                    <span class="canals" id="canals">Canaux</span>
                        <ul>
                            <li class="liste" id="liste">Général</li>
                                <?php 
                                    foreach ($coursList as $cours)
                                    {
                                        echo '<li class="liste">' . $cours['titre'] . '</li>';
                                        /* echo '<li class="liste"></li>'; */
                                    }
                                    /* echo '<li class="liste">' . $cours['titre'] . '</li>'; */
                                ?> 
                        </ul>
                </div>
            </div>
            <div class="container-contenu" id="container-contenu">
                <div class="container-title" id="container-title">
                    <span class='titre' id='titre'>Tous les cours</span>
                </div>
                <div class="main-content" id="main-content">
                    <?php echo "<div class='messages' id='messages'>$All_Messages</div>"?>
                    <div class="input-bar">
                        <input type="text" placeholder="Tapez votre message ici" class="Msg_envoie" id="Msg_envoie">
                        <button class="Bouton_envoie" id="Bouton_envoie">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="../assets/js/forum.js"></script>
                                  
        <?php require "footer.php"; ?>
                                  
    </div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>