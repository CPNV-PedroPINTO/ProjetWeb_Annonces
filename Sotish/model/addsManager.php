<?php

function getAdds($addsValues){
    $addName = $addsValues['addName'];
    $addType = $addsValues['addType'];
    $addPrice = $addsValues['$addPrice'];
}



function displayAdds($userEmailAddress, $userPsw)
{
    $result = false;

    $resAdd = json_decode(file_get_contents("model/data/users.json"), true);

    foreach ($resAdd as $adds) :
        ?>
        <div style="border: solid black 1px; border-radius: 5px; display: inline-block;
        margin: 10px; padding: 5px; width: 20%; min-width: 150px;">
            <!--Scrit qui permet d'afficher l'image dans un json -->

            <!--   Script qui permet d'afficher le titre de l'annonces     -->

            <!--   Script qui permet d'afficher le type de l'annonce      -->

            <!--   Script qui permet d'afficher le prix de l'annonce      -->
        </div>
    <?php
    endforeach;


    return $result;
}
