<?php $titre = 'LearnHub - Quizz'?>
<?php $CSS = '../style/quizz.css'?>
<?php require_once 'links.php'?>

<?php ob_start(); ?> 

<div class="container" id="container">

    <?php  require_once 'header.php'; ?>

    <div class="container-center" id="container-center">

    <?php
        /* try
        {
            if (isset($_GET['pageCours'])) 
            {
                for ($i = 0; $i < $nbCours; $i++)
                {
                    $courseId = "course" . $i;
                    if ($_GET['pageCours'] == $GLOBALS[$courseId]->getId())
                    {
                        echo "<div class='container-titre' id='container-titre'>";
                        echo "<span class='titre' id='titre'>" . $GLOBALS[$courseId]->getTitre() . "</span>";
                        echo "</div>";
                    }
                }
            }
        }
        catch (Exception $e) 
        {
            echo ($e->getMessage());
        } */
    ?>
    <?php
        $score = 0;
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $reponseProposer = $_POST['reponse'];
            $q = nombreQST('test');

            for($i=0; $i<$q; $i++)
            {
                $reponse_correct = donnerReponse('q'.$i+1, 'test');

                if($reponseProposer['q'.$i+1] == $reponse_correct)
                {
                    $score++;
                }
            }
            //gestion du score
            echo "votre score est:".$score;
        }
    ?>

    <form method="post">
        <?php
        //charger le fichier XML
        $xml = simplexml_load_file('assets/xml/test.xml');
        //parcourir les questions et afficher les options
        foreach($xml->question as $question){
            $id_question = (string) $question['id'];// q1, q2, q3 ...
            $text_question = (string) $question->text;
            echo "<h3>$text_question</h3>";
            foreach($question->option as $option){
                $id_option = (string) $option['id'];// A, B, C
                $text_option = (string) $option;
                echo "<input type='radio' name='reponse[$id_question]' value='$id_option' required><label> $text_option</label><br>";
            }
        }
        ?>
        <input type="submit" name="soumettre" value="Submit">
    </form>
    </div>

    <?php require "footer.php"; ?>

</div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'commun.php'; ?>