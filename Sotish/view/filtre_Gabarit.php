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
                <a href="index.php?action=createAd">
                    <div class="divBtnPublier">


                        <button class="btnPublier">Publier</button>

                    </div>
                </a>
                <hr>
                <div class="divMenuLeft" >

                    <a href="index.php?action=service">
                        <div class="divServicesBtn">

                            <button id="btnServices">SERVICES</button>

                        </div>
                    </a>
                    <br>
                    <a href="index.php?action=location">
                        <div class="divLocationBtn">

                            <button id="btnLocations">LOCATIONS</button>

                            <br>
                        </div>
                    </a>
                    <br>
                    <a href="index.php?action=vente">
                        <div class="divVenteBtn">

                            <button id="btnVentes">VENTES</button>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";



