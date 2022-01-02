<?php

include 'config/config.inc.php';
include 'controllers/nazionigiovani.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';


echo '</br>';
echo '<h1>Destinazioni per giovani (<18)</h1>';


echo '<div class="row">';
if (is_array($nazioniGiovani) || is_object($nazioniGiovani))
{
    foreach ($nazioniGiovani as $item) {
        echo '<div class="col-md-3 d-flex align-items-stretch">';
        echo '<div class="card w-75 p-3 mt-4 mb-4 mx-auto">';
        echo '<a href="cittagiovani.php?nazione=' . $item->nome . '">';
        echo '<img class="card-img-top" src="media/nazioni/' . $item->img . '" alt="Card image cap"/>';
        echo '</a>';
        echo '<div class="card-body">';
        echo '<h3 class="card-title">' . $item->nome . '</h3>';
        echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>';

        echo '<a href="cittagiovani.php?nazione=' . $item->nome . '" class="btn btn-primary">Scopri le città</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
else
{
    echo "Unfortunately, an error occured.";
}
echo '</div>';



include 'config/footer.inc.php';
