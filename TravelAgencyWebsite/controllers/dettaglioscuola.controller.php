<?php




$tempScuola= new Scuole();

$scuola = filter_input (INPUT_GET,'scuola',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$citta = filter_input (INPUT_GET,'citta',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


//var_dump($_GET);

