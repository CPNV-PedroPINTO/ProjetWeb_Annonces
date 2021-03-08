<?php
/**
 * @file      gabarit.php
 * @brief     This view is designed to centralize all common graphical component like header and footer (will be call by all views)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY & Pascal BENZONANA
 * @version   23-MAY-2020
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="view/content/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/vendor/slick/slick.css">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/content/css/util.css">
    <link rel="stylesheet" type="text/css" href="view/content/css/main.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">

            <div class="topbar-child2">

					<span class="topbar-email">
                        <?php if (isset($_SESSION['userEmailAddress'])) : ?>
                            <?= $_SESSION['userEmailAddress']; ?>
                        <?php endif; ?>
					</span>
            </div>
        </div>

        <div class="wrap_header">

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">

                    <ul class="main_menu">
                        <div class="logo2">
                            <a href="index.php" class="logo">
                                <img src="view/content/images/icons/favicon.png" class="" alt="IMG-LOGO"
                                     width="90px">
                            </a>
                        </div>
                        <?php if (!isset($_SESSION['userEmailAddress']) || (!isset($_GET['action'])) || ((@$_GET['action'] == "logout"))) : ?>
                            <div class="btnLoginRegister">

                                    <a href="index.php?action=login">Login</a>

                                    <a href="index.php?action=register">S'enregistrer</a>

                            </div>
                        <?php else : ?>
                            <li>
                                <a href="index.php?action=logout">Logout</a>
                            </li>
                        <?php endif; ?>


                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">

                <?php if (!isset($_SESSION['userEmailAddress']) || (!isset($_GET['action'])) || ((@$_GET['action'] == "logout"))) : ?>
                    <a href="index.php?action=login" class="header-wrapicon1 dis-block logo">
                        <img src="view/content/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                    </a>
                <?php else : ?>

                <?php endif; ?>


            </div>
        </div>
    </div>


    <?=
    $content;
    ?>


    <!-- Footer -->
    <footer class="footer">
        <div class="flex-b p-b-10">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    UNE VISITE ?
                </h4>

                <div>
                    <p class="s-text7 w-size27">
                        Venez à notre magasin<br>
                        Rue de l'argent 12, 2704 Money <br>ou appelez-nous au (+41) 79 856 84 05
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="https://www.facebook.com/anibis.ch/" class="fs-18 color1 p-r-20 fa fa-facebook"
                           target="_blank"></a>
                        <a href="https://www.instagram.com/anibis_ch/?hl=fr"
                           class="fs-18 color1 p-r-20 fa fa-instagram" target="_blank"></a>
                        <a href="https://www.youtube.com/channel/UCiPtGUZFsw9zQpNBFjKO8bg"
                           class="fs-18 color1 p-r-20 fa fa-youtube-play" target="_blank"></a>
                    </div>
                </div>
            </div>


            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Liens
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="https://www.cpnv.ch" target="_blank" class="s-text7">
                            Formation
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="view/aboutUs.php" target="_blank" class="s-text7">
                            À propos de nous
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="https://github.com/PedroPINTODjDj/ProjetWeb_Annonces" target="_blank" class="s-text7">
                            Notre Github
                        </a>
                    </li>

                </ul>
            </div>

        </div>

    </footer>


    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>


    <!-- SCRIPTS -->

    <!--===============================================================================================-->
    <script type="text/javascript" src="view/content/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="view/content/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="view/content/vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="view/content/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="view/content/vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="view/content/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="view/content/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="view/content/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="view/content/vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="view/content/vendor/sweetalert/sweetalert.min.js"></script>


    <!--===============================================================================================-->
    <script src="view/content/js/main.js"></script>

</body>
</html>
