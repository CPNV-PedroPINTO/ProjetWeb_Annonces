<?php

//Permet d'inscrire des données dans le fichier Json

function addAdds($addInfos)
{


    $addName = $addInfos['addName'];
    $addType = $addInfos['addType'];
    $addPrice = $addInfos['addPrice'];
    $addDesc = $addInfos['addDesc'];
    $addPicture = $addInfos['addPicture'];

    $data2add = array('Name' => $addName, 'Type' => $addType, 'Price' => $addPrice, 'Desc' => $addDesc, 'Picture' => $addPicture);


    $file = "model/data/annonces.json";
    $data_results = file_get_contents($file);
    $tempArray = json_decode($data_results);
    $tempArray[] = $data2add;
    $jsonData = json_encode($tempArray);

    

    file_put_contents($file, $jsonData);

}
function getAdds(){
    return json_decode(file_get_contents("model/data/annonces.json"), true);
}
function getAddsLocation(){
     $res = json_decode(file_get_contents("model/data/annonces.json"), true);
     $loc = [];
    foreach ($res as $item) {
        if ($item['Type']=="Location"){
            $loc[] = $item;
        }
     }
    return $loc;
}
function getAddsService(){
     $res = json_decode(file_get_contents("model/data/annonces.json"), true);
     $ser = [];
    foreach ($res as $item) {
        if ($item['Type']=="Services"){
            $ser[] = $item;
        }
     }
    return $ser;
}
function getAddsVente(){
     $res = json_decode(file_get_contents("model/data/annonces.json"), true);
     $ven = [];
    foreach ($res as $item) {
        if ($item['Type']=="Vente"){
            $ven[] = $item;
        }
     }
    return $ven;
}
function spliceAdd(){
    $input = array("red", "green", "blue", "yellow");
    array_splice($input, -1, 1, array("black", "maroon"));
    var_dump($input);
    require "view/home.php";
}



