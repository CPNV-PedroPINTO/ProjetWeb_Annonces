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
    <html lang="a">
    <head>
</head>
    <body>
    <section class="button">
        <div class="annonce">

            <a href="?action=createAd">
                <button class="btnannonce">Publier</button>
            </a>

        </div>
        <div class="filtrebtn">

            <div class="servicebtn">
                <a href="index.php?action=service">
                    <button id="service">SERVICE</button>
                </a>
            </div>
            <br>
            <div class="locationbtn">
                <a href="index.php?action=location">
                    <button id="loc">LOCATION</button>
                </a>
                <br>
            </div>
            <br>
            <div class="ventebtn">
                <a href="index.php?action=vente">
                    <button id="loc">VENTE</button>
                </a>
            </div>
        </div>
    </section>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";