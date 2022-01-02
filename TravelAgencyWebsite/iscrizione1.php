<?php

include 'config/config.inc.php';
include 'controllers/iscrizione.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';

?>

    <h1>Iscriviti</h1>

    <div class="container">
        <h4 class="well">1 Dati del partecipante</h4>
        <div class="col-lg-12 well">
            <div class="row">
                <form>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Nome</label>
                                <input type="text" placeholder="Enter First Name Here.." class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Cognome</label>
                                <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Via</label>
                            <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Luogo</label>
                                <input type="text" placeholder="Enter City Name Here.." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Cantone</label>
                                <input type="text" placeholder="Enter State Name Here.." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>CAP</label>
                                <input type="text" placeholder="Enter Zip Code Here.." class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Data e luogo di nascita</label>
                                <input type="text" placeholder="Enter Designation Here.." class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Nazionalità</label>
                                <input type="text" placeholder="Enter Company Name Here.." class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Numero di telefono privato e/o cellulare</label>
                            <input type="text" placeholder="Enter Phone Number Here.." class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Indirizzo email</label>
                            <input type="text" placeholder="Enter Email Address Here.." class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Professione</label>
                            <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Lingua madre</label>
                            <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Lingue attualmente conosciute</label>
                            <input type="text" placeholder="Enter Website Name Here.." class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Persona da contattare in caso di emergenza durante il soggiorno linguistico</label>
                            <input type="text" placeholder="Nome" class="form-control">
                            <input type="text" placeholder="Cognome" class="form-control">
                            <input type="text" placeholder="Telefono cellulare" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Per i minorenni</label>
                            <input type="text" placeholder="Nome" class="form-control">
                            <input type="text" placeholder="Cognome" class="form-control">
                            <input type="text" placeholder="Telefono cellulare del padre" class="form-control">
                            <input type="text" placeholder="Telefono cellulare della madre" class="form-control">
                        </div>


                        <a href="iscrizione2.php" type="button" class="btn btn-lg" id="buttonPreventivo-custom">Vai alla seconda parte</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
include 'config/footer.inc.php';
