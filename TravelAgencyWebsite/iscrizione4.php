<?php

include 'config/config.inc.php';
include 'controllers/iscrizione.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';

?>

    <h1>Iscriviti</h1>



    <br class="container">
    <h4 class="well">4 Trasferimento dall'aereoporto / stazione ferroviaria / stazione dell'autobus all'alloggio</h4>
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-12">



                    <div class="form-group">



                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tipo trasferimento
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Si, solo per il giorno dell'arrivo</a>
                                <a class="dropdown-item" href="#">Si, per il giorno di arrivo e di rientro</a>
                                <a class="dropdown-item" href="#">No</a>

                            </div>
                        </div>

                        </br>


                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Come ha conosciuto la World Studies?
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Passaparola</a>
                                <a class="dropdown-item" href="#">Già stato vostro/a cliente</a>
                                <a class="dropdown-item" href="#">Ricerca in Google</a>
                                <a class="dropdown-item" href="#">Pubblicità in internet</a>
                                <a class="dropdown-item" href="#">Altra pubblicità</a>
                                <a class="dropdown-item" href="#">Altro</a>

                            </div>
                        </div>

                        </br>

                        <div class="form-group">
                            <label>Comunicazioni</label>
                            <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                        </div>


                        </br>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ho letto, compreso e accetto integralmente le condizioni generali di contratto della World Studies soggiorni linguistici.
                            </label>
                        </div>

                        </br>



                    <a href="iscrizione4.php" type="button" class="btn btn-lg" id="buttonPreventivo-custom">Invia</a>
                </div>
            </form>
        </div>
    </div>
    </div>


<?php
include 'config/footer.inc.php';


