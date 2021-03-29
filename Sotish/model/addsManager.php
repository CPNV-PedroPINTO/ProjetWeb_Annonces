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
     $location = json_decode(file_get_contents("model/data/annonces.json"), true);
     $loc = [];
    foreach ($location as $item) {
        if ($item['Type']=="Location"){
            $loc[] = $item;
        }
     }
    return $loc;
}
function getAddsService(){
    $service = json_decode(file_get_contents("model/data/annonces.json"), true);
     $Ser = [];
    foreach ($service as $item) {
        if ($item['Type']=="Service"){
            $Ser[] = $item;
        }
     }
    return $Ser;
}
function getAddsVente(){
    $vente = json_decode(file_get_contents("model/data/annonces.json"), true);
     $Ven = [];
    foreach ($vente as $item) {
        if ($item['Type']=="Vente"){
            $Ven[] = $item;
        }
     }
    return $Ven;
}

