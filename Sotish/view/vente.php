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
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title><?= $title; ?></title>
        <meta charset="UTF-8">

    </head>
    <body>
Vente
    </body>
    </html>
<?php
$content = ob_get_clean();
require "gabarit.php";
require "filtre gabarit.php";