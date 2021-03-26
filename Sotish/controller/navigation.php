<?php
/**
 * @file      navigation.php
 * @brief     This controller is designed to manage all navigation aspect (view controller view)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */
require "model/addsManager.php";
/**
 * @brief This function is designed to redirect the user to the home page (depending on the action received by the index)
 */
function home()
{
    require "view/home.php";
    require 'view/displayAdds.php';
    getAdds();

}

/**
 * @brief This function is designed to inform the user that the resource requested doesn't exist (i. e. if the user modify the url manually)
 */
function lost()
{
    require "view/lost.php";
}

function service()
{
    require 'view/service.php';
}

function location()
{
    require 'view/location.php';
}

function createAd()
{
    require "view/createAd.php";
}

function vente()
{
    require "view/vente.php";
}

function submitAdd($addInfo)
{
    require "view/home.php";
    addAdds($addInfo);
}

