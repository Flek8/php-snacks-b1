<?php


    
    if (empty($_GET['name']) || empty($_GET['age']) || empty($_GET['mail'])) {
        echo 'ACCESSO NEGATO';
        echo ' Campo mancante';
    } else {
        $nome = $_GET['name'];
        $eta = $_GET['age'];
        $mail = $_GET['mail'];


        if (strlen($nome) <= 3) {

            echo 'ACCESSO NEGATO';
            echo ' Nome troppo corto';

        } elseif (!is_numeric($eta)) {

            echo 'ACCESSO NEGATO';
            echo ' Età non valida';

        } elseif (strpos($mail, '@') === false || strpos ($mail, '.') === false) {

            echo 'ACCESSO NEGATO';
            echo ' Mail non valida';
            
        } else {
            echo 'ACCESSO CONSENTITO';
        }
    }
    
    
    
    
    
    
    