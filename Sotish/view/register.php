<?php
/**
 * @file      register.php
 * @brief     This view is designed to display the register form
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

$title = 'SnowPoint . Register';

ob_start();
?>

<?php if ($registerErrorMessage != null) : ?>
    <h5><span style="color:red"><?= $registerErrorMessage; ?></span></h5>
<?php endif ?>


    <!--   <section class="login_part padding_top">-->
    <section class="bgwhite p-t-66 p-b-60">

        <h2 class="l-text2 t-center" style="color: black">
            S'inscrire
        </h2><br>
        <div class="container">
            <div class="login_part_form"><br>
                <h3 class="titleH3">Créer un compte</h3>
                <form class="form" action="index.php?action=register" method="post">
                    <div class="col-md-12"><br>
                        <label for="userEmail"><b>Adresse email</b></label><br><input type="email"
                                                                                  placeholder="Email address"
                                                                                  name="registerInputUserEmailAddress"
                                                                                  required>
                    </div><br>
                    <div class="col-md-12 p_star">
                        <label for="userPsw"><b>Mot de passe</b></label><br><input type="password"
                                                                               id="password" name="registerPassword"
                                                                               value=""
                                                                               placeholder="Mot de passe">
                    </div><br>
                    <div class="col-md-12 p_star">
                        <label for="psw-repeat"><b>Vérifier le mot de passe</b></label><br><input type="password"
                                                                                              id="password"
                                                                                              name="registerVerifyPassword"
                                                                                              value=""
                                                                                              placeholder="Mot de passe (vérification)">
                    </div><br>
                    <div class="col-md-12 form-group">
                        <div class="creat_account align-items-center">
                            En soumettant votre demande de compte, <br>vous validez les conditions générales
                            d'utilisation.<a
                                    href="https://termsfeed.com/blog/privacy-policies-vs-terms-conditions/"><br>CGU et
                                vie
                                privée</a>.
                        </div>
                        <input type="submit" value="Inscrivez-vous"
                               class="flex-c-m size10 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                    </div>
                </form>
                <div class="alreadyAccount">
                    <h2>Vous avez déjà un compte ?</h2>
                    <p>Dans ce cas, afin de retrouver vos données, <br>cliquez sur le lien qui suit :<br>
                        <a href="index.php?action=register" class="tag_btn  ">Login</a>
                </div>
            </div>

    </section>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>