<?php
//Regex
$regexText = '/^[A-zÀ-ÿ -]+$/';
$regexNumber = '/^[0-9]+$/';
$formError = [];

if (isset($_POST['validateForm'])) {
    //gender
    if (isset($_POST['gender'])){
        $gender = htmlspecialchars($_POST['gender']);
         if ($gender != 'Monsieur') {
            $formError['gender'] = 'Erreur : ';
        }
    } else {
        if (empty($_POST['gender'])) {
            $formError['gender'] = 'Erreur : Le champ est vide';
        }
    }

    //fistName
    if (isset($_POST['firstName'])) {
        $firstName = htmlspecialchars($_POST['firstName']);
        if (!preg_match($regexText, $firstName)) {
            $formError['firstName'] = 'Erreur : Votre prénom ne doit contenir que des lettres';
        }
        if (empty($_POST['firstName'])) {
            $formError['firstName'] = 'Erreur : Le champ est vide';
        }
    }

    //lastName
    if (isset($_POST['lastName'])) {
        $lastName = htmlspecialchars($_POST['lastName']);
        if (!preg_match($regexText, $lastName)) {
            $formError['lastName'] = 'Erreur : Votre nom ne doit contenir que des lettres';
        }
        if (empty($_POST['lastName'])) {
            // J'affiche l'erreur
            $formError['lastname'] = 'Erreur : Le champ est vide';
        }
    }

    //age
    if (isset($_POST['age'])) {
        $age = htmlspecialchars($_POST['age']);
        if (!preg_match($regexNumber, $age)) {
            $formError['age'] = 'Erreur : Votre âge ne doit contenir que des chiffres';
        }
        if (empty($_POST['age'])) {
            $formError['age'] = 'Erreur : Le champ est vide';
        }
    }

    //society
    if (isset($_POST['society'])) {
        $society = htmlspecialchars($_POST['society']);
        if (!preg_match($regexText, $society)) {
            $formError['society'] = 'Erreur : Votre société ne doit contenir que des lettres';
        }
        if (empty($_POST['society'])) {
            $formError['society'] = 'Erreur : Le champ est vide';
        }
    }
}
?>