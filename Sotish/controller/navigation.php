<?php
/**
 * @file      navigation.php
 * @brief     This controller is designed to manage all navigation aspect (view controller view)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @author    Updated by Simon.CUANY
 * @author    Updated by Mahe.LAVAUD
 * @author    Updated by Pedro.PINTO
 * @version   13-APR-2020
 */
require "model/addsManager.php";

function home()
{
    $res = getAdds();
    require "view/home.php";

}

function lost()
{
    require "view/lost.php";
}

function service()
{
    $service = getAddsService();
    require "view/home.php";
}

function location()
{
    $location = getAddsLocation();
    require 'view/home.php';
}

function vente()
{
    $vente = getAddsVente();
    require "view/home.php";
}

function createAd()
{
    require "view/createAd.php";
}

function submitAdd($addInfo)
{
    require "view/home.php";
    addAdds($addInfo);
}

