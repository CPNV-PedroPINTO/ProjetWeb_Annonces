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
    <html lang="fr">
    <body>
    <div>
        <div class="zone1">
            <div class="sectionMenuLeft">
                <div class="divBtnPublier">

                    <a href="index.php?action=createAd">
                        <button class="btnPublier">Publier</button>
                    </a>
                </div>
                <hr>
                <div class="divMenuLeft">

                    <div class="divServicesBtn">
                        <a href="index.php?action=service">
                            <button id="btnServices">SERVICES</button>
                        </a>
                    </div>
                    <br>
                    <div class="divLocationBtn">
                        <a href="index.php?action=location">
                            <button id="btnLocations">LOCATIONS</button>
                        </a>
                        <br>
                    </div>
                    <br>
                    <div class="divVenteBtn">
                        <a href="index.php?action=vente">
                            <button id="btnVentes">VENTES</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";



