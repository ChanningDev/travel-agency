<?php

include 'config/config.inc.php';
include 'controllers/iscrizione.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';

?>

    <h1>Iscriviti</h1>



    <br class="container">
    <h4 class="well">3 Vitto e alloggio</h4>
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-12">



                    <div class="form-group">


                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Data inizio alloggio</label>
                                <input type="text" placeholder="Inserire la data desiderata" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Data di fine alloggio</label>
                                <input type="text" placeholder="Inserire la data desiderata" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Numero totale di settimane</label>
                                <input type="text" placeholder="Inserire numero totale di settimane" class="form-control">
                            </div>
                        </div>




                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tipo alloggio
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Famiglia ospitante</a>
                                <a class="dropdown-item" href="#">Residenza studentesca</a>
                                <a class="dropdown-item" href="#">Ostello</a>
                                <a class="dropdown-item" href="#">Appartamento condiviso (WG)</a>
                                <a class="dropdown-item" href="#">Appartamento condiviso con studenti della scuola</a>
                                <a class="dropdown-item" href="#">Monolocale</a>
                                <a class="dropdown-item" href="#">Campus</a>
                                <a class="dropdown-item" href="#">Organizzo l'alloggio personalmente</a>

                            </div>
                        </div>

                        </br>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tipo camera
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Camera singola</a>
                                    <a class="dropdown-item" href="#">Camera doppia</a>
                                    <a class="dropdown-item" href="#">Camera con più letti</a>

                            </div>
                        </div>

                        </br>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tipo bagno
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Bagno privato</a>
                                <a class="dropdown-item" href="#">Bagno condiviso</a>
                            </div>
                        </div>

                        </br>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tipo pasti
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Self-catering</a>
                                <a class="dropdown-item" href="#">Senza pasti</a>
                                <a class="dropdown-item" href="#">Colazione</a>
                                <a class="dropdown-item" href="#">Mezza pensione</a>
                                <a class="dropdown-item" href="#">Mezza pensione Lu-Ve e pensione completa Sa-Do</a>
                                <a class="dropdown-item" href="#">Pensione completa</a>

                            </div>
                        </div>

                        </br>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Fumatore/ fumatrice?
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Si</a>
                                <a class="dropdown-item" href="#">No</a>
                            </div>
                        </div>

                        </br>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Animali domestici nella famiglia ospitante
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Indifferente</a>
                                <a class="dropdown-item" href="#">No</a>
                            </div>
                        </div>

                        </br>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Figli giovani (0-12 anni) nella famiglia ospitante
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Indifferente</a>
                                <a class="dropdown-item" href="#">No</a>
                            </div>
                        </div>


                        </br>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Problemi di salute</label>
                                    <input type="text" placeholder="Enter Designation Here.." class="form-control">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Dieta particolare</label>
                                    <input type="text" placeholder="Enter Company Name Here.." class="form-control">
                                </div>
                            </div>


                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Allergie</label>
                                <input type="text" placeholder="Enter Designation Here.." class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Altre informazioni/ necessità</label>
                                <input type="text" placeholder="Enter Company Name Here.." class="form-control">
                            </div>
                        </div>


                    </div>

                    </br>




                    <a href="iscrizione4.php" type="button" class="btn btn-lg" id="buttonPreventivo-custom">Vai alla quarta parte</a>
                </div>
            </form>
        </div>
    </div>
    </div>


<?php
include 'config/footer.inc.php';

