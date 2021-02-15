<html lang="">
<head>

    <title>Création d'une annonce</title></head>
<body class="bodyCreateAd">

<h2 class="l-text2 t-center" style="color: black">
    Création d'une annonce
</h2>


<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Nom de l'annonce</label>
        <input type="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="Playstation, Xbox ...">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Prix de l'annonce</label>
        <input type="password" class="form-control border border-primary" id="exampleInputPassword1" placeholder="100$">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description de l'annonce</label>
        <input type="password" class="form-control border border-primary" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Type d'annonce</label>
        <select class="form-control border border-primary" id="exampleFormControlSelect1">
            <option>Vente</option>
            <option>Location</option>
            <option>Services</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>


<?php
require "view/gabarit.php"
?>

