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
        <button class="btn btn-primary" onclick="appendColumn()">Create</button>
        </div>
        <div class="filtrebtn">
            <br><br><br><br><br>

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
                <a href="index.php?action=location">
                    <button id="loc">VENTE</button>
                </a>
            </div>
        </div>


    </section>


<?php
$content = ob_get_clean();
require "gabarit.php";
