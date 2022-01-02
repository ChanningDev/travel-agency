<?php

include 'config/config.inc.php';
include 'controllers/listatuttelenazioni.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';


echo '<h1>Tutte le nazioni</h1>';
foreach ($tutteLeNazioni as $item) {
    echo '<h3>'.$item->nome.'</h3>';
    echo '<img src="media/nazioni/'.$item->img.'" style="width: 80%; height: auto;"/>';
    echo '</br>';
    echo '<a href="dettaglionazioni.php?nazione='.$item->nome.'">Vai alle città</a>';

}
include 'config/footer.inc.php';
