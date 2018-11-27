<?php
//Regex
$regexText = '/^[A-zÀ-ÿ -]+$/';
$regexDate = '/^[0-9]{2,4}-[0-9]{1,2}-[0-3][0-9]$/';
$regexAddress = '/^[0-9]+[ ,][A-zÀ-ÿ -]+$/';
$regexEmail = '/^[A-z-_.]+@[A-z]+\.[A-z]{2,5}$/';
$regexPhone = '/^[0-9]{10}$/';
$regexPole = '/^[0-9]{7}[A-Z]$/';
$regexNumber = '/^[0-9]+$/';
$regexLink = '/^http(s)?:\/\/www.codecademy.com\/[A-zÀ-ÿ0-9-]+$/';
$formError = [];

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

//dateBirth
if (isset($_POST['dateBirth'])) {
    $dateBirth = htmlspecialchars($_POST['dateBirth']);
    if (!preg_match($regexDate, $dateBirth)) {
        $formError['dateBirth'] = 'Erreur : Votre date de naissance à une erreur';
    }
    if (empty($_POST['dateBirth'])) {
        $formError['dateBirth'] = 'Erreur : Le champ est vide';
    }
}

//contryBirth
if (isset($_POST['contryBirth'])) {
    $contryBirth = htmlspecialchars($_POST['contryBirth']);
    if (!preg_match($regexText, $contryBirth)) {
        $formError['contryBirth'] = 'Erreur : Votre pays de naissance ne doit contenir que des lettres';
    }
    if (empty($_POST['contryBirth'])) {
        $formError['contryBirth'] = 'Erreur : Le champ est vide';
    }
}

//nationality
if (isset($_POST['nationality'])) {
    $nationality = htmlspecialchars($_POST['nationality']);
    if (!preg_match($regexText, $nationality)) {
        $formError['nationality'] = 'Erreur : Votre Nationalité ne doit contenir que des lettres';
    }
    if (empty($_POST['contryBirth'])) {
        $formError['nationality'] = 'Erreur : Le champ est vide';
    }
}

//address
if (isset($_POST['address'])) {
    $address = htmlspecialchars($_POST['address']);
    if (!preg_match($regexAddress, $address)) {
        $formError['address'] = 'Erreur : Votre adresse n\'est pas valide';
    }
    if (empty($_POST['address'])) {
        $formError['address'] = 'Erreur : Le champ est vide';
    }
}

//city
if (isset($_POST['city'])) {
    $city = htmlspecialchars($_POST['city']);
    if (!preg_match($regexText, $city)) {
        $formError['city'] = 'Erreur : Votre ville ne doit contenir que des lettres';
    }
    if (empty($_POST['city'])) {
        $formError['city'] = 'Erreur : Le champ est vide';
    }
}

//postalCode
if (isset($_POST['postalCode'])) {
    $postalCode = htmlspecialchars($_POST['postalCode']);
    if (!preg_match($regexNumber, $postalCode)) {
        $formError['postalCode'] = 'Erreur : Votre code postal ne doit contenir que des chiffres';
    }
    if (empty($_POST['postalCode'])) {
        $formError['postalCode'] = 'Erreur : Le champ est vide';
    }
}

//email
if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
    if (!preg_match($regexEmail, $email)) {
        $formError['email'] = 'Erreur : Votre adresse mail doit être au format "JohnDoe@nomdedomaine.extension"';
    }
    if (empty($email)) {
        $formError['email'] = 'Erreur : Le champ est vide';
    }
}

//phone
if (isset($_POST['phone'])) {
    $phone = htmlspecialchars($_POST['phone']);
    if (!preg_match($regexNumber, $phone)) {
        $formError['phone'] = 'Erreur : Votre numéro de téléphone ne doit contenir que des chiffres';
    }
    if (empty($_POST['phone'])) {
        $formError['phone'] = 'Erreur : Le champ est vide';
    }
}

//qualification
if (isset($_POST['qualification'])) {
    $qualification = htmlspecialchars($_POST['qualification']);
    if (empty($_POST['qualification'])) {
        $formError['qualification'] = 'Erreur : Le champ est vide';
    }
}

//numberPole
if (isset($_POST['numberPole'])) {
    $numberPole = htmlspecialchars($_POST['numberPole']);
    if (!preg_match($regexPole, $numberPole)) {
        $formError['numberPole'] = 'Votre numéro pôle emploi n\'est pas valide';
    }
    if (empty($_POST['numberPole'])) {
        $formError['numberPole'] = 'Champs obligatoire';
    }
}

//badge
if (isset($_POST['badge'])) {
    $badge = htmlspecialchars($_POST['badge']);
    if (!preg_match($regexNumber, $badge)) {
        $formError['badge'] = 'Erreur : Le nombre de bagde ne doit contenir que des chiffres';
    }
    if (empty($_POST['badge'])) {
        if ($_POST['badge'] != 0) {
            $formError['badge'] = 'Erreur : Le champ est vide';
        }
    }
}

//linkCode
if (isset($_POST['linkCode'])) {
    $linkCode = htmlspecialchars($_POST['linkCode']);
    if (!preg_match($regexLink, $linkCode)) {
        $formError['linkCode'] = 'Erreur : Le lien codecademy doit être au format http://www.codecademy.com/pseudomembre';
    }
    if (empty($linkCode)) {
        $formError['linkCode'] = 'Erreur : Le champ est vide';
    }
}

//answerOne
if (isset($_POST['answerOne'])) {
    $answerOne = htmlspecialchars($_POST['answerOne']);
    if (empty($_POST['answerOne'])) {
        $formError['answerOne'] = 'Champs obligatoire';
    }
}

//answerTwo
if (isset($_POST['answerTwo'])) {
    $answerTwo = htmlspecialchars($_POST['answerTwo']);
    if (empty($_POST['answerTwo'])) {
        $formError['answerTwo'] = 'Sélection obligatoire';
    }
}

//answerThree
if (isset($_POST['answerThree'])) {
    $answerThree = htmlspecialchars($_POST['answerThree']);
    if (empty($_POST['answerThree'])) {
        $formError['answerThree'] = 'Champs obligatoire';
    }
}
?>