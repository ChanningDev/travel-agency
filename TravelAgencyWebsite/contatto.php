<?php

include 'config/config.inc.php';
include 'controllers/contatto.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';



if (isset($_POST['submit'])) {
    $to = "info@worldstudies.ch";
    $from = $_POST['email'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $messaggio = $_POST['messaggio'];

    $headers = "From:" . $from;
    $subject = "Form submission";
    $message = $nome . " " . $cognome . " ha richiesto delle informazioni:"

        . "\n\n" . "Nome: " .$_POST['nome']
        . "\n\n" . "Cognome: " .$_POST['cognome']
        . "\n\n" . "Indirizzo email: " .$_POST['email']
        . "\n\n" . "Comunicazioni: " .$_POST['messaggio'];


    mail($to,$subject,$message,$headers);
    echo "<h1>Mail inviata, grazie " . $nome . ", ti contatteremo presto.</h1>";

}


?>


    <div class="container">

        <h1>Contattaci</h1>

                <!-- Default form contact -->
                <form class="text-center border border-light p-5" action="" method="post">

                    <p class="h4 mb-4">Siamo a tua completa disposizione.</p>

                    <!-- Name -->
                    <input type="text" name="nome" id="defaultContactFormName" class="form-control mb-4" placeholder="Nome">
                    <input type="text" name="cognome" id="defaultContactFormName" class="form-control mb-4" placeholder="Cognome">

                    <!-- Email -->
                    <input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

                    <!-- Subject -->
<!--                    <label>Soggetto</label>-->
<!--                    <select class="browser-default custom-select mb-4">-->
<!--                        <option value="" disabled>Scegli un'opzione</option>-->
<!--                        <option value="1" selected>Feedback</option>-->
<!--                        <option value="2">Domande sui corsi</option>-->
<!--                        <option value="3">Domande sulle prenotazioni</option>-->
<!--                        <option value="4">Altro</option>-->
<!--                    </select>-->

                    <!-- Message -->
                    <div class="form-group">
                        <textarea class="form-control rounded-0" name="messaggio" id="exampleFormControlTextarea2" rows="3" placeholder="Messaggio"></textarea>
                    </div>

                    <!-- Copy -->
<!--                    <div class="custom-control custom-checkbox mb-4">-->
<!--                        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">-->
<!--                        <label class="custom-control-label" for="defaultContactFormCopy">Mandami una copia</label>-->
<!--                    </div>-->

                    <!-- Send button -->
                    <button class="btn btn-info btn-block" type="submit" name="submit" id="ContactFormButton">Invia</button>

                </form>
                <!-- Default form contact -->

    </br>

            <article>
                <p>Travel Agency</p>
                <p>Soggiorni linguistici</p>
                <p>Via Dei Soggiorni</p>
                <p>6500 Bellinzona</p>
                <p>Tel: <a href="tel:">0041 (0) 93 825 99 74 </a></p>
                <p>Whastapp: <a href="tel:>0041 (0) 71 846 05 11 </a></p>
                <p>Mail: <a href="mailto:test@test.ch">info@travel-agency.ch</a></p>
            </article>

        </br>
        </br>


        <h4>Orari di apertura</h4>
        <table class="table">
            <tbody>
            <tr>
                <th scope="row">Lunedì</th>
                <td>9 -17.30</td>
                <td>Continuato</td>
            </tr>
            <tr>
                <th scope="row">Martedì</th>
                <td>9 - 11.45</td>
                <td>13.45 - 17.30</td>
            </tr>
            <tr>
                <th scope="row">Mercoledì</th>
                <td>9 - 11.45</td>
                <td>13.45 - 17.30</td>
            </tr>
            <tr>
                <th scope="row">Giovedì</th>
                <td>9 - 11.45</td>
                <td>13.45 - 17.30</td>
            </tr>
            <tr>
                <th scope="row">Venerdì</th>
                <td>9 - 17.30</td>
                <td>Continuato</td>
            </tr>
            <tr>
                <th scope="row">Sabato</th>
                <td>9 - 11.30</td>
                <td></td>
            </tr>

            </tbody>
        </table>


    </div>



    </br>
        <?php
        include 'config/vantaggiegaranzie.inc.php';
        ?>
    </br>
    </br>
    </br>


    <div class="container">

        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2762.1847504818925!2d9.016584351226392!3d46.18688209284829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47844a39aacd495b%3A0x62b1180174b3f4fc!2sVia%20Convento%204A%2C%206500%20Bellinzona!5e0!3m2!1sit!2sch!4v1625064843390!5m2!1sit!2sch" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!--Google Maps-->

    </div>




<?php
include 'config/footer.inc.php';
