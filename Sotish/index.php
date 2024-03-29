<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

session_start();
require "controller/navigation.php";
require "controller/users.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'register' :
            register($_POST);
            break;
        case 'service' :
            service();
            break;
        case 'location':
            location();
            break;
        case 'vente':
            vente();
            break;
        case 'createAd' :
            createAd();
            break;
        case 'submitAdd':
            submitAdd($_POST);
            break;
        case 'remvoveAdd':
            spliceAdd();
            break;
        default :
            lost();
    }
} else {
    home();
}