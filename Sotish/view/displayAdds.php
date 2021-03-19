<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "Sotish";

//Permet d'afficher les données situées dans le fichier Json

function getAdds()
{
    $res = json_decode(file_get_contents("model/data/annonces.json"), true);

    foreach ($res as $element) {
        ?>
        <div class="card border-secondary mb-3" style="width: 18rem;">
            <?php echo "<b>Photo de l'annonce : </b><img class='card-img-top' alt='imgNotFound' src='" . $element['Picture'] . "'  " . "<br>"; ?>
            <div class="card-body">
                <h5 class="card-title"><b>Nom de l'annonce : </b></h5>
                <div class="text-black divElement"><?= $element['Name'] ?></div>
                <h5 class="card-title"><b>Type de l'annonce : </b></h5>
                <div class="text-black divElement"> <?= $element['Type'] ?></div>
                <h5 class="card-title"><b>Prix de l'annonce : </b></h5>
                <div class="text-black divElement"><?= $element['Price'] . " CHF" ?></div>
                <h5 class="card-title"><b>Description de l'annonce : </b></h5>
                <div class="text-black divElement"> <?= $element['Desc'] ?></div>
            </div>
        </div>
        <?php
    }
}

$content = ob_get_clean();
require "gabarit.php";

