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
<html lang="">

<body class="bodyCreateAd">

<h2 class="l-text2 t-center" style="color: black">
    Création d'une annonce
</h2>


<div class="testoe">
    <form class="form-group formyo" method="post" action="?action=home">
        <div>
            <label for="exampleInputEmail1">Nom de l'annonce</label>
            <input type="text" class="form-control border border-primary" id="exampleInputEmail1"
                   placeholder="Playstation, Xbox ...">
        </div>
        <div>
            <label for="exampleInputPassword1">Prix de l'annonce</label>
            <input type="text" class="form-control border border-primary" id="exampleInputPassword1"
                   placeholder="100$">
        </div>
        <div>
            <label for="exampleInputPassword1">Description de l'annonce</label>
            <input type="text" class="form-control border border-primary" id="exampleInputPassword1"
                   placeholder="Password">
        </div>
        <div>
            <label for="exampleFormControlSelect1">Type d'annonce</label>
            <select class="form-control border border-primary" id="exampleFormControlSelect1">
                <option>Vente</option>
                <option>Location</option>
                <option>Services</option>
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" onclick="appendColumn()">Submit</button>
    </form>
</div>


</body>
</html>


<?php

$content = ob_get_clean();
require "gabarit.php";
?>

