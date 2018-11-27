<?php
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
$allPortrait = [$portrait1, $portrait2, $portrait3, $portrait4];

function showPortrait($allPortrait){
    $php_with_html = "";
    foreach ($allPortrait as $portrait){
    ?>
        <div class="card">
            <img class="card-img-top" src="<?= $portrait['portrait']; ?>" alt="Portrait <?= $portrait['name'] . ' ' . $portrait['firstname']; ?>">
            <div class="card-body">
                <h1 class="card-title h5 text-center"><?= $portrait['name'] . ' ' . $portrait['firstname']; ?></h1>
            </div>
        </div>
    <?php
    }
    return $php_with_html;
}
?>