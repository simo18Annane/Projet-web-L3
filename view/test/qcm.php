<?php
    require 'config.php';
    $title = $type = $question = $repA = $repB = $repC = $repCorrect = $fichier = "";

    //pour créer le fichier.xml
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(isset($_POST['creerQCM'])) {
            $title = test_input($_POST["title"]);
            $type = test_input($_POST["type"]);
            creerXML($title, $type);
        }

        //pour ajouter des questions au fichier xml
        if(isset($_POST['addQuestion'])) {
            $question = test_input($_POST["question"]);
            $repA = test_input($_POST["propA"]);
            $repB = test_input($_POST["propB"]);
            $repC = test_input($_POST["propC"]);
            $repCorrect = test_input($_POST["answer"]);
            $title = test_input($_POST["nomQCM"]);
            addQST($question, $repA, $repB, $repC, $repCorrect, $title);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

    <h1>Création du qcm</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="title">Titre du QCM: </label>
        <input type="text" id="title" name="title" required><br>
        <label for="type">Type du QCM :</label>
        <input type="text" id="type" name="type" required><br>
        <input type="submit" name="creerQCM" value="Submit">
    </form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label for="nomQCM">Titre QCM : </label>
        <input type="text" id="nomQCM" name="nomQCM" required><br>
        <label for="question">Question : </label>
        <input type="text" id="question" name="question" required><br>
        <label for="propA">Proposition A : </label>
        <input type="text" id="propA" name="propA" required><br>
        <label for="propB">Proposition B : </label>
        <input type="text" id="propB" name="propB" required><br>
        <label for="propC">Proposition C : </label>
        <input type="text" id="propC" name="propC" required><br>
        <label for="answer">réponse : </label>
        <input type="text" id="answer" name="answer" placeholder="A,B,C ->une seule reponse possible" required><br>
        <input type="submit" name="addQuestion" value="ajouter question">

    </form>