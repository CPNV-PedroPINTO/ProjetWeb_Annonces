<?php
/**
 * @file      login.php
 * @brief     This view is designed to display the login form
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = 'SnowPoint . Login/Logout';

ob_start();
?>
<?php //if ($loginErrorMessage != null) : ?>
<?php if (isset($loginErrorMessage)) : ?>
    <h5><span style="color:red"><?= $loginErrorMessage; ?></span></h5>
<?php endif ?>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <h2 class="l-text2 t-center" style="color: black">
            Login
        </h2>
        <div class="container">
            <div class="row">

                <div class="col-md-12 p-b-30">
                    <form class="leave-comment" action="index.php?action=login" method="post" >
                        <h4 class="m-text26 p-b-36 p-t-15">
                            Connectez-vous
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="inputUserEmailAddress" placeholder="Adresse email">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="inputUserPsw" placeholder="Mot de passe">
                        </div class="md-12">
                            <input type="submit" value="login" class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        <br>Pas de compte ? <a href="../index.php?action=register">Inscrivez-vous</a>
                        </div>
                </div>
            </div>
    </section>

<?php
$content = ob_get_clean();
include 'gabarit.php';
?>