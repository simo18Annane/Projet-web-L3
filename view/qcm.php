<?php $titre = 'LearnHub - QCM'?>
<?php $CSS = '../style/qcm.css'?>
<?php require_once 'links.php'?>

<?php ob_start(); ?> 

    <div class="container" id="container">

        <?php require_once "header.php"; ?>

        <div class="container-center" id="container-center">
            <div class="container-form-qcm" id="container-form-qcm">
                <h1 class="titre-qcm" id="titre-qcm">Quiz : Question &agrave; choix multiples</h1>
                <form action="index.php?page=recommendationDeCours" method="post" class="form-qcm" id="form-qcm">
                    <?php
                        $xml = simplexml_load_file('assets/xml/qcm.xml');
                        foreach($xml->question as $question)
                        {
                            $id_question = (string) $question['id'];
                            $text_question = (string) $question->text;
                            echo "<span class='titre-quest'>$text_question</span>";
                            echo "<div class='question'>";
                            $lettres_options = ['A', 'B', 'C'];
                            foreach($question->option as $option)
                            {
                                $id_option = (string) $option['id'];
                                $text_option = (string) $option;
                                $lettre_option = array_shift($lettres_options);
                                echo "<span class='reponse'><label><input type='radio' name='reponse[$id_question]' value='$id_option'> $text_option</label></span>";
                            }
                            echo "</div>";
                        }
                    ?>
                    <div class="error-msg" id="error-msg">
                        <p class="error-text" id="error-text">Veuillez répondre à toutes les questions avant de soumettre.</p>
                    </div>
                    <button class="button-qcm" id="button-qcm" type="submit">Soumettre</button>
                </form>
            </div>
        </div>
        
        <script src="../assets/js/qcmValid.js"></script>
        
        <?php require "footer.php"; ?>
        
    </div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>