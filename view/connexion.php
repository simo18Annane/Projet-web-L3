<?php $titre = 'LearnHub - Connexion/Inscription'?>
<?php $CSS = '../style/connexion.css'?>

<?php ob_start(); ?>

    <?php require 'cnx-ins.php'; ?>
    
    <script src="../assets/js/connexion.js"></script>
    <script src="../assets/js/connexionValid.js"></script>
    <script src="../assets/js/inscriptionValid.js"></script>

<?php $contenu= ob_get_clean();?>
<?php require 'commun.php'; ?>