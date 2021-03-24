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

        <div>yooooooooo</div>

<?php
$content = ob_get_clean();
require "filtre_Gabarit.php";
