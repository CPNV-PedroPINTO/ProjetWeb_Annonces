<?php

function addAdds($addInfos)
{
    $addName = $addInfos['addName'];
    $addType = $addInfos['addType'];
    $addPrice = $addInfos['addPrice'];
    $addDesc = $addInfos['addDesc'];

    $data2add = array('Name' => $addName, 'Type' => $addType, 'Price' => $addPrice, 'Desc' => $addDesc);

    $file = "model/data/annonces.json";
    $data_results = file_get_contents($file);
    $tempArray = json_decode($data_results);
    $tempArray[] = $data2add;
    $jsonData = json_encode($tempArray);

    file_put_contents($file, $jsonData);

    var_dump($addInfos);
}

function getAdds()
{
    $res = json_decode(file_get_contents("model/data/annonces.json"), true);


}
