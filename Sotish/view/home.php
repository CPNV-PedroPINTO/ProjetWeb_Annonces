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
    <section class="button">
        <div class="annonce">

            <a href="?action=createAd">
                <button class="btnannonce">Publier</button>
            </a>

        </div>
        <div class="test">
            <button class="btn btn-primary">Create</button>
        </div>
        <div class="filtrebtn">

            <div class="menuBtn">
                <div class="servicebtn">
                    <a href="index.php?action=service">
                        <button id="service">SERVICES</button>
                    </a>
                </div>
                <br>
                <div class="locationbtn">
                    <a href="index.php?action=location">
                        <button id="loc">LOCATIONS</button>
                    </a>
                    <br>
                </div>
                <br>
                <div class="ventebtn">
                    <a href="index.php?action=vente">
                        <button id="loc">VENTES</button>
                    </a>
                </div>
            </div>
        </div>

    </section>


<?php
$content = ob_get_clean();
require "gabarit.php";
