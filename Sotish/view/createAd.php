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
    <form class="form-group formyo" method="POST" action="index.php?action=submitAdd">
        <div>
            <label for="exampleInputEmail1">Nom de l'annonce</label>
            <input type="text" class="form-control border border-primary" id="addName"
                   placeholder="vente d'une Playstation 5" name="addName">
        </div>
        <div>
            <label for="exampleFormControlSelect1">Type d'annonce</label>
            <select class="form-control border border-primary" id="addType" name="addType">
                <option>Vente</option>
                <option>Location</option>
                <option>Services</option>
            </select>
        </div>
        <div>
            <label for="exampleInputPassword1">Prix de l'annonce</label>
            <input type="text" class="form-control border border-primary" id="addPrice"
                   placeholder="100$" name="addPrice" >
        </div>
        <div>
            <label for="exampleInputPassword1">Coordonées</label>
            <input type="text" class="form-control border border-primary" id="addDesc" name="addDesc">
        </div>

      <button type="submit" value="submitAdd" class="btn btn-primary" >Submit</button>
    </form>
</div>


</body>
</html>


<?php

$content = ob_get_clean();
require "gabarit.php";
?>

