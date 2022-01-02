<?php




$tempScuole = new Scuole();

$citta = filter_input (INPUT_GET,'citta',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


//var_dump($_GET);


$scuoleAdulti = $tempScuole->getScuoleAdulti($citta,1,0);

