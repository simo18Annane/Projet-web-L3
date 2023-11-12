<?php
    function creerXML2($title, $type) {
        $xml = new DOMDocument('1.0', 'UTF-8');
        $baliseOuv = $xml->createElement('quiz');
        $xml->appendChild($baliseOuv);
        $titre = $xml->createElement('titre', $title);
        $baliseOuv->appendChild($titre);
        $typeqcm = $xml->createElement('type', $type);
        $baliseOuv->appendChild($typeqcm);

        $xml->formatOutput = true;
        $xmlString = $xml->saveXML();

        $filePath = __DIR__.'/'.$title.'.xml';
        file_put_contents($filePath, $xmlString);

        return $filePath;
        exit;
    }


    function addQST($question, $A, $B, $C, $reponse, $title) {
        $xmlFilePath = $title.'.xml';

        $xml = new DOMDocument();
        $xml->preserveWhiteSpace = false;
        $xml->formatOutput = true;
        $xml->load($xmlFilePath);

        $racine = $xml->documentElement;

        $baliseQst = $xml->createElement('question');
        $racine->appendChild($baliseQst);
        $elm = $xml->getElementsByTagName('question');
        $q = $elm->length;
        $baliseQst->setAttribute('id', 'q'.$q);

        $txtQst = $xml->createElement('text', $question.' ?');
        $baliseQst->appendChild($txtQst);

        $repA = $xml->createElement('option', $A);
        $baliseQst->appendChild($repA);
        $repA->setAttribute('id', 'A');

        $repB = $xml->createElement('option', $B);
        $baliseQst->appendChild($repB);
        $repB->setAttribute('id', 'B');

        $repC = $xml->createElement('option', $C);
        $baliseQst->appendChild($repC);
        $repC->setAttribute('id', 'C');

        $repCorrect = $xml->createElement('correct_answer', $reponse);
        $baliseQst->appendChild($repCorrect);

        $xml->save($xmlFilePath);
    }


    function nombreQST($title) {
        $xmlFilePath = $title.'.xml';

        $xml = new DOMDocument();
        $xml->load($xmlFilePath);
        $elm = $xml->getElementsByTagName('question');
        $q = $elm->length;
        return $q;
    }

    //pour recuperer la bonne reponse de chaque question
    function donnerReponse($numQST, $title){
        
        $xml = simplexml_load_file($title.'.xml');

        $correctAnswer = "";

        foreach ($xml->question as $question) {
            if ($question['id'] == $numQST) {
                $correctAnswer = (string) $question->correct_answer;
                break;
            }
        }
        return $correctAnswer;
    }

?>