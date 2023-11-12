<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>répondre QCM</title>
</head>
<body>

    <?php
        require 'config.php';
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
        $xml = simplexml_load_file('test.xml');
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

</body>
</html>