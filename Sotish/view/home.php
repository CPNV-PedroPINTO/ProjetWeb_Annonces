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

            <button class="btnannonce">Publier</button>

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
            </div>
        </div>


    </section>


    <table>

        <thead class="banner bgwhite p-t-40 p-b-40">
        <tr class="row">
            <th class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="view/content/images/men_snows/B101_banner.png" alt="IMG-BANNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Burton
                        </a>
                    </div>
                </div>
            </th>
        </tr>
        <tr class="row">
            <th class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="view/content/images/men_snows/banner_P622.png" alt="IMG-BANNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Prior
                        </a>
                    </div>
                </div
            </th>
        </tr>
        <tr class="row">
            <th class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="view/content/images/men_snows/banner_R787.png" alt="IMG-BANNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Rossignol
                        </a>
                    </div>
                </div>
            </th>
        </tr>
        <tr class="row">
            <th class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="view/content/images/men_snows/banner_K409.png" alt="IMG-BANNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            K2
                        </a>
                    </div>
                </div>
            </th>
        </tr>

        <tr class="row">
            <th class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="view/content/images/men_snows/banner_R787.png" alt="IMG-BANNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Rossignol
                        </a>
                    </div>
                </div>
            </th>
        </tr>


        </thead>


    </table>


    <!-- Banner -->


<?php
$content = ob_get_clean();
require "gabarit.php";
