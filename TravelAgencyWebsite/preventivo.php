<?php

include 'config/config.inc.php';
include 'controllers/preventivo.controller.php';
include 'config/header.inc.php';
include 'config/navmenu.inc.php';


if (isset($_POST['submit'])) {
    $to = "info@worldstudies.ch";
    $from = $_POST['email'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $telefono = $_POST['telefono'];
    $indirizzo = $_POST['indirizzo'];
    $datanascita = $_POST['datanascita'];
    $destinazionecorso = $_POST['destinazionecorso'];
    $tipocorso = $_POST['tipocorso'];
    $datainiziocorso = $_POST['datainiziocorso'];
    $duratacorso = $_POST['duratacorso'];
    $tipoalloggio = $_POST['tipoalloggio'];
    $comunicazioni = $_POST['comunicazioni'];

    $headers = "From:" . $from;
    $subject = "Form submission";
    $message = $nome . " " . $cognome . " ha richiesto un preventivo:"

        . "\n\n" . "Numero di telefono: " .$_POST['telefono']
        . "\n\n" . "Indirizzo email: " .$_POST['email']
        . "\n\n" . "Nome: " .$_POST['nome']
        . "\n\n" . "Cognome: " .$_POST['cognome']
        . "\n\n" . "Indirizzo: " .$_POST['indirizzo']
        . "\n\n" . "Data di nascita: " .$_POST['datanascita']
        . "\n\n" . "destinazione del corso: " .$_POST['destinazionecorso']
        . "\n\n" . "Tipo di corso " .$_POST['tipocorso']
        . "\n\n" . "Data inizio corso: " .$_POST['datainiziocorso']
        . "\n\n" . "Durata del corso: " .$_POST['duratacorso']
        . "\n\n" . "Tipo di alloggio: " .$_POST['tipoalloggio']
        . "\n\n" . "Comunicazioni: " .$_POST['comunicazioni'];


    mail($to,$subject,$message,$headers);
    echo "<h1>Mail inviata, grazie " . $nome . ", ti contatteremo presto.</h1>";

}


?>




<div class="container">

    <h1>Richiedi un preventivo gratuito</h1>

        <!-- Default form contact -->
        <form class="text-center border border-light p-5" action="" method="post">

            <p class="h4 mb-4">Compila il form sottostante per ricevere un preventivo</p>

            <!-- Nome -->
            <input type="text" name="nome" id="defaultContactFormName" class="form-control mb-4" placeholder="Nome">

            <!-- Cognome -->
            <input type="text" name="cognome" "id="defaultContactFormName" class="form-control mb-4" placeholder="Cognome">

            <!-- Email -->
            <input type="text" name="email" id="defaultContactFormName" class="form-control mb-4" placeholder="Email">

            <!-- Numero di telefono -->
            <input type="text" name="telefono" id="defaultContactFormName" class="form-control mb-4" placeholder="Numero di telefono">

            <!-- Indirizzo -->
            <input type="text" name="indirizzo" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Indirizzo completo">

            <!-- Data di nascita -->
            <input type="text" name="datanascita" id="defaultContactFormName" class="form-control mb-4" placeholder="Data di nascita GG/MM/AA">

            <!-- Destinazione del corso -->
            <input type="text" name="destinazionecorso" id="defaultContactFormName" class="form-control mb-4" placeholder="Destinazione del corso">

            <!-- Tipo di corso -->
            <label>Tipo di corso desiderato (standard/intensivo/superintensivo/corso preparazione esami/corso estivo per giovani):</label>
            <input type="text" name="tipocorso" id="defaultContactFormName" class="form-control mb-4" placeholder="Tipo di corso desiderato">

            <!-- Data inizio corso -->
            <input type="text" name="datainiziocorso" id="defaultContactFormName" class="form-control mb-4" placeholder="Data inizio corso desiderata">

            <!-- Durata del corso -->
            <input type="text" name="duratacorso" id="defaultContactFormName" class="form-control mb-4" placeholder="Durata del corso desiderata (no. settimane)">

            <!-- Tipo di alloggio -->
            <label **text-left**>Tipo di alloggio desiderato (famiglia ospitante con o senza pasti/ appartamento condiviso WG/ residenza/ campus/ appartamento con altri studenti della scuola/ nessun alloggio):</label>
            <input type="text" name="tipoalloggio" id="defaultContactFormName" class="form-control mb-4" placeholder="Tipo di alloggio desiderato">




            <!-- Messaggio -->
            <label>Comunicazioni (opzionale)</label>

            <!-- Message -->
            <div class="form-group">
                <textarea class="form-control rounded-0" name="comunicazioni" id="exampleFormControlTextarea2" rows="3" placeholder="Messaggio"></textarea>
            </div>

            <!-- Copy -->
<!--            <div class="custom-control custom-checkbox mb-4">-->
<!--                <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">-->
<!--                <label class="custom-control-label" for="defaultContactFormCopy">Mandami una copia</label>-->
<!--            </div>-->

            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit" name="submit" id="ContactFormButton">Invia</button>

        </form>
        <!-- Default form contact -->
    </div>

<?php
//    $formPreventivo->open_form();
//
//    echo 'Nome:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Cognome:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Indirizzo completo:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Data di nascita:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Destinazione del corso:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Tipo di corso:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Data inizio desiderata:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Durata desiderata:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Tipo di alloggio:';
//    $formPreventivo->add_input(' ','text','','form-control input-lg col-lg-3');
//
//    echo 'Commenti (opzionale):';
//    $formPreventivo->add_textArea('','5','4');
//
//
//    echo '</br>';
//
//    $formPreventivo->submitButton('Invia');
//
//    echo '</br>';
//
//    $formPreventivo->close_form();



include 'config/footer.inc.php';
