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
<html lang="en">

<body class="bodyCreateAd">

<h2 class="l-text2 t-center" style="color: black">
    Création d'une annonce
</h2>

<!--------Form to create an announcement--------->
<div class="divFormCreateAd">
    <form class="form-group formCreateAd" method="POST" action="index.php?action=submitAdd">
        <!-------Name of the advertisement input-------->
        <div>
            <label for="addName">Nom de l'annonce</label>
            <input type="text" class="form-control border border-primary" id="addName"
                   placeholder="Playstation 5" name="addName">
        </div>
        <br>
        <!-------Type of the advertisement input-------->
        <div>
            <label for="addType">Type d'annonce</label>
            <select class="form-control border border-primary" id="addType" name="addType">
                <option>Vente</option>
                <option>Location</option>
                <option>Services</option>
            </select>
        </div>
        <br>
        <!-------Price of the advertisement input-------->
        <div>
            <label for="addPrice">Prix de l'annonce</label>
            <input type="number" class="form-control border border-primary" id="addPrice"
                   placeholder="1800" name="addPrice">
        </div>
        <br>
        <!-------Description of the advertisement input-------->
        <div>
            <label for="addDesc">Description</label>
            <textarea class="form-control border border-primary" id="addDesc" name="addDesc" rows="3"
                      placeholder="je vends une ps5 pas chère..."></textarea>
        </div>
        <br>
        <div>
            <label for="addDesc">Choisir une image</label>
            <input type="file" class="form-control border border-primary"  id="addPicture" name="addPicture" accept="image/*">
        </div>

        <br>
        <a href="index.php?action=submitAdd"> <button type="submit" value="submitAdd" class="btn btn-primary">Submit</button></a>

    </form>

</div>

</body>
</html>


<?php

$content = ob_get_clean();
require "gabarit.php";
?>

