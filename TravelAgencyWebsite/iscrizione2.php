<?php

include 'config/config.inc.php';
include 'controllers/iscrizione.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';

?>

    <h1>Iscriviti</h1>



    <br class="container">
        <h4 class="well">2 Conoscenza della lingua</h4>
        <div class="col-lg-12 well">
            <div class="row">
                <form>
                    <div class="col-sm-12">



                        <div class="form-group">
<!---->
<!---->
<!--                            <label>0 - nessuna conoscenza-->
<!--                                <input type="checkbox" name="peas">-->
<!--                            </label>-->
<!--                            </br>-->
<!--                            <label>A1 - elmentare-->
<!--                                <input type="checkbox" name="peas">-->
<!--                            </label>-->
<!--                            </br>-->
<!--                            <label>A2 - elementare+-->
<!--                                <input type="checkbox" name="peas">-->
<!--                            </label>-->
<!--                            </br>-->
<!--                            <label>B1 - pre-intermedio-->
<!--                                <input type="checkbox" name="peas">-->
<!--                            </label>-->
<!--                            </br>-->
<!--                            <label>B2 - intermedio-->
<!--                                <input type="checkbox" name="peas">-->
<!--                            </label>-->
<!--                            </br>-->
<!--                            <label>C1 - avanzato-->
<!--                                <input type="checkbox" name="peas">-->
<!--                            </label>-->
<!--                            </br>-->
<!--                            <label>C2 - avanzato+-->
<!--                                <input type="checkbox" name="peas">-->
<!--                            </label>-->
<!---->
<!---->


                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Corso di lingua che desiderato
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Inglese</a>
                                    <a class="dropdown-item" href="#">Tedesco</a>
                                    <a class="dropdown-item" href="#">Francese</a>
                                    <a class="dropdown-item" href="#">Spagnolo</a>
                                </div>
                            </div>


                            </br>


                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Conoscenza attuale della lingua
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">0 Nessuna conoscenza</a>
                                    <a class="dropdown-item" href="#">A1 Elemntare</a>
                                    <a class="dropdown-item" href="#">A2 Elementare+</a>
                                    <a class="dropdown-item" href="#">B1 Pre-intermedio</a>
                                    <a class="dropdown-item" href="#">B2 Intermedio</a>
                                    <a class="dropdown-item" href="#">C1 Avanzato</a>
                                    <a class="dropdown-item" href="#">C2 Avanzato+</a>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Per quanti anni ha studiato la lingua?</label>
                                    <input type="text" placeholder="Inserire il numero di anni" class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Nome della scuola</label>
                                    <input type="text" placeholder="Inserire nome scuola" class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Luogo del corso</label>
                                    <input type="text" placeholder="Inserire luogo del corso" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Data inizio corso</label>
                                    <input type="text" placeholder="GG/MM/AA" class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Data di fine corso</label>
                                    <input type="text" placeholder="GG/MM/AA" class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Numero totale di settimane</label>
                                    <input type="text" placeholder="Inserire numero di settimane" class="form-control">
                                </div>
                            </div>



                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tipo di corso
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Corso standard</a>
                                    <a class="dropdown-item" href="#">Corso intensivo</a>
                                    <a class="dropdown-item" href="#">Corso superintensivo</a>
                                    <a class="dropdown-item" href="#">Corso preparazione esami inglese</a>
                                    <a class="dropdown-item" href="#">Corso preparazione esami tedesco</a>
                                    <a class="dropdown-item" href="#">Corso preparazione esami francese</a>
                                    <a class="dropdown-item" href="#">Corso preparazione esami spagnolo</a>
                                    <a class="dropdown-item" href="#">Lezioni individuali</a>
                                    <a class="dropdown-item" href="#">Corso standard + lezioni individuali</a>
                                    <a class="dropdown-item" href="#">Corso standard + lezioni di business</a>
                                    <a class="dropdown-item" href="#">Corso a casa dell'insegnante</a>
                                    <a class="dropdown-item" href="#">Corso + stage professionale</a>
                                    <a class="dropdown-item" href="#">Programma demi-pair</a>

                                </div>
                            </div>


                        </div>

                        </br>




                        <a href="iscrizione3.php" type="button" class="btn btn-lg" id="buttonPreventivo-custom">Vai alla terza parte</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php
include 'config/footer.inc.php';

