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
?>

<h2>Vous êtes bien sur la page Home</h2>

<?php

echo "Nom de l'annonce : ";

$content = ob_get_clean();
require "gabarit.php";
require "filtre gabarit.php";
