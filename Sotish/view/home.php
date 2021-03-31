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

foreach (@$res as $element) {

    ?>
    <form action="index.php?action=remvoveAdd" class="cardform">
    <div class="card border-secondary mb-3 m-l-220" style="width: 18rem; display: inline-block; margin-top: 10%">
        <?php echo "<b>Photo de l'annonce : </b><img class='card-img-top' style='width: 250px;height: 150px; margin-left' alt='imgNotFound' src='" . "view/content/images/" . $element['Picture'] . "'  " . "<br>"; ?>
        <div class="card-body  ">
            <h5 class="card-title"><b>Nom de l'annonce : </b></h5>
            <div class="text-black divElement "><?= $element['Name'] ?></div>
            <h5 class="card-title"><b>Type de l'annonce : </b></h5>
            <div class="text-black divElement"> <?= $element['Type'] ?></div>
            <h5 class="card-title"><b>Prix de l'annonce : </b></h5>
            <div class="text-black divElement"><?= $element['Price'] . "CHF" ?></div>
            <button type="submit" name="btnDelete" value="<?= $element['Name'] ?>" class="btn btn-primary">Supprimer annonce</button>
        </div>
    </div>
    </form>
    <?php

}
$content = ob_get_clean();
require "gabarit.php";
