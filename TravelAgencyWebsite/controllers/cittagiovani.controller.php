<?php




$tempCitta = new Citta();

$nazione = filter_input (INPUT_GET,'nazione',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


//var_dump($_GET);


$cittaGiovani = $tempCitta->getCittaGiovani($nazione,0,1);
