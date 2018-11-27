<?php 
include 'controller_tp1.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>TP 1</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <?php if (count($formError) == 0 && isset($_POST['validateForm'])) { ?>
            <div class="container">
                <h1 class="text-center">Vos données :</h1>
                <p><span class="font-weight-bold">Prénom : </span><?= $firstName ?></p>
                <p><span class="font-weight-bold">Nom : </span><?= $lastName ?></p>
                <p><span class="font-weight-bold">Date de naissance : </span><?= $dateBirth ?></p>
                <p><span class="font-weight-bold">Pays de naissance : </span><?= $contryBirth ?></p>
                <p><span class="font-weight-bold">Nationalité : </span><?= $nationality ?></p>
                <p><span class="font-weight-bold">Adresse : </span><?= $address ?></p>
                <p><span class="font-weight-bold">Ville : </span><?= $city ?></p>
                <p><span class="font-weight-bold">Code Postal : </span><?= $postalCode ?></p>
                <p><span class="font-weight-bold">Mail : </span><?= $email ?></p>
                <p><span class="font-weight-bold">Téléphone : </span><?= $phone ?></p>
                <p><span class="font-weight-bold">Diplôme : </span><?= $qualification ?></p>
                <p><span class="font-weight-bold">Numéro pôle emploi : </span><?= $numberPole ?></p>
                <p><span class="font-weight-bold">Nombre de badge : </span><?= $badge ?></p>
                <p><span class="font-weight-bold">Lien codecademy : </span><?= $linkCode ?></p>
                <p><span class="font-weight-bold">Si vous étiez un super héros / une super héroïne, qui seriez-vous et pourquoi ? : </span><br/><?= $answerOne ?></p>
                <p><span class="font-weight-bold">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </span><br/><?= $answerTwo ?></p>
                <p><span class="font-weight-bold">Avez vous déjà eu une expérience avec la programmation et / ou l'informatique avant de remplir ce formulaire ? : </span><br/><?= $answerThree ?></p>
            </div>
            <?php } else { ?>
            <form method="POST" action="">
                <div class="form-row">
                    <div class="col-6">
                        <label for="firstName">Prénom</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Votre prénom" required />
                        <p class="text-danger"><?= isset($formError['firstName']) ? $formError['lastName'] : '' ?></p>
                    </div>
                    <div class="col-6">
                        <label for="lastName">Nom</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Votre nom" required />
                        <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="dateBirth">Date de naissance</label>
                        <input type="date" class="form-control" id="dateBirth" name="dateBirth" required />
                        <p class="text-danger"><?= isset($formError['dateBirth']) ? $formError['dateBirth'] : '' ?></p>
                    </div>
                    <div class="col-4">
                        <label for="contryBirth">Pays de naissance</label>
                        <input type="text" class="form-control" id="contryBirth" name="contryBirth" placeholder="Votre pays de naissance" required />
                        <p class="text-danger"><?= isset($formError['contryBirth']) ? $formError['contryBirth'] : '' ?></p>
                    </div>
                    <div class="col-4">
                        <label for="nationality">Nationalité</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Votre nationalité" required />
                        <p class="text-danger"><?= isset($formError['nationality']) ? $formError['nationality'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="address">Adresse</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Votre adresse" required>
                        <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : '' ?></p>
                    </div>
                    <div class="col-4">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" placeholder="Votre ville" name="city" required>
                        <p class="text-danger"><?= isset($formError['city']) ? $formError['city'] : '' ?></p>
                    </div>
                    <div class="col-4">
                        <label for="postalCode">Code postal</label>
                        <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Votre code postal" required>
                        <p class="text-danger"><?= isset($formError['postalCode']) ? $formError['postalCode'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="email">Mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Votre adresse mail" required />
                        <p class="text-danger"><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
                    </div>
                    <div class="col-6">
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Votre numéro de téléphone" required />
                        <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : '' ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-3">
                        <label for="qualification">Diplôme</label>
                        <select class="custom-select mr-sm-2" id="qualification" name="qualification" required>
                            <option selected disabled>Votre diplôme</option>
                            <option value="Sans">Sans</option>
                            <option value="bac">Bac</option>
                            <option value="Bac+2">Bac+2</option>
                            <option value="Bac+3">Bac+3</option>
                            <option value="Supérieur">Supérieur</option>
                        </select>
                        <p class="text-danger"><?= isset($formError['qualification']) ? $formError['qualification'] : '' ?></p>
                    </div>
                    <div class="col-3">
                        <label for="numberPole">Numéro pôle emploi</label>
                        <input type="text" class="form-control" id="numberPole" name="numberPole" placeholder="Votre numéro pôle emploi" required />
                        <p class="text-danger"><?= isset($formError['numberPole']) ? $formError['numberPole'] : '' ?></p>
                    </div>
                    <div class="col-3">
                        <label for="badge">Nombre de badge</label>
                        <input type="text" class="form-control" id="badge" name="badge" placeholder="Votre nombre de badge" required />
                        <p class="text-danger"><?= isset($formError['badge']) ? $formError['badge'] : '' ?></p>
                    </div>
                    <div class="col-3">
                        <label for="linkCode">Lien codecademy</label>
                        <input type="text" class="form-control" id="linkCode" name="linkCode" placeholder="Votre liens codecademy" required />
                        <p class="text-danger"><?= isset($formError['linkCode']) ? $formError['linkCode'] : '' ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="answerOne">Si vous étiez un super héros / une super héroïne, qui seriez-vous et pourquoi ?</label>
                    <textarea class="form-control" id="answerOne" name="answerOne" rows="3" required></textarea>
                    <p class="text-danger"><?= isset($formError['answerOne']) ? $formError['answerOne'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="answerTwo">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label>
                    <textarea class="form-control" id="answerTwo" name="answerTwo" rows="3" required></textarea>
                    <p class="text-danger"><?= isset($formError['answerTwo']) ? $formError['answerTwo'] : '' ?></p>
                </div>
                <div class="form-group">
                    <label for="answerThree">Avez vous déjà eu une expérience avec la programmation et / ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea class="form-control" id="answerThree" name="answerThree" rows="3" required></textarea>
                    <p class="text-danger"><?= isset($formError['answerThree']) ? $formError['answerThree'] : '' ?></p>
                </div>
                <button class="btn btn-primary" type="submit" name="validateForm">Envoyer</button>
            </form>
            <?php } ?>
        </div>
    </body>
</html>
