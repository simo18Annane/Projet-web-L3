<?php $titre = 'LearnHub - Inscription/Connexion'?>
<?php $CSS = '../style/inscription.css'?>

<?php ob_start(); ?>

    <?php require 'cnx-ins.php'; ?>

    <script src="../assets/js/inscription.js"></script>
    <script src="../assets/js/inscriptionValid.js"></script>
    <script src="../assets/js/connexionValid.js"></script>

<?php $contenu= ob_get_clean();?>
<?php require 'commun.php'; ?>