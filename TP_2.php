<?php 
include 'controller_tp2.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>TP 2</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <form method="POST" action="" novalidate>
                <div class="form-row">
                    <div class="col-4">
                        <label for="gender">Civilité</label>
                        <select class="custom-select mr-sm-2" name="gender" id="gender" required>
                            <option disabled selected>Choix</option>
                            <option value="Monsieur" <?= isset($_POST['gender']) && $_POST['gender'] == 'Monsieur' ? 'selected' : ''; ?>>Monsieur</option>
                            <option value="Madame" <?= isset($_POST['gender']) && $_POST['gender'] == 'Madame' ? 'selected' : ''; ?>>Madame</option>
                        </select>
                        <p class="text-danger"><?= isset($formError['gender']) ? $formError['gender'] : ''; ?></p>
                    </div>
                    <div class="col-4">
                        <label for="firstName">Prénom</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Votre prénom" value="<?= isset($firstName) ? $firstName : ''; ?>" required />
                        <p class="text-danger"><?= isset($formError['firstName']) ? $formError['firstName'] : ''; ?></p>
                    </div>
                    <div class="col-4">
                        <label for="lastName">Nom</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Votre nom" value="<?= isset($lastName) ? $lastName : ''; ?>" required />
                        <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Votre âge" value="<?= isset($age) ? $age : ''; ?>" required />
                        <p class="text-danger"><?= isset($formError['age']) ? $formError['age'] : ''; ?></p>
                    </div>
                    <div class="col-6">
                        <label for="society">Société</label>
                        <input type="text" class="form-control" id="society" name="society" placeholder="Votre société" value="<?= isset($society) ? $society : ''; ?>" required />
                        <p class="text-danger"><?= isset($formError['society']) ? $formError['society'] : ''; ?></p>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="validateForm">Envoyer</button>
            </form>
        </div>
            <?php if (isset($_POST['validateForm']) && count($formError) == 0){ ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h1>Vos informations</h1>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Civilité : <strong><?= $gender; ?></strong></li>
                                <li class="list-group-item">NOM : <strong><?= $lastName; ?></strong></li>
                                <li class="list-group-item">Prénom : <strong><?= $firstName; ?></strong></li>
                                <li class="list-group-item">Age : <strong><?= $age; ?></strong></li>
                                <li class="list-group-item">Société : <strong><?= $society; ?></strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?> 
    </body>
</html>
